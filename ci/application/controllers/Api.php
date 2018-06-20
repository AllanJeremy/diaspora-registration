<?php defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
    private static $_captcha_secret = '6Lco-18UAAAAALtgoGexFnv6vGhsNcXy-exFQYMQ';
    private static $_captcha_verify_url = 'https://www.google.com/recaptcha/api/siteverify?';

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    // Verify an API token
    protected function verify_token($token='12343534636')
    {
        //TODO: Add implementation
        return TRUE;
    }
    
    // Generate a json response
    private function _gen_response($is_ok,$message='',$data=NULL)
    {
        // Set the application type to JSON
        $this->output->set_content_type(API_RESPONSE_TYPE,'UTF-8');

        $response = array(
            'ok' => (bool)$is_ok,
            'message' => (string)$message,
        );

        if(isset($data))
        {
            $response['data'] = (array)$data;
        }

        return json_encode($response);
    }

    // Authentication failed
    private function _auth_failed_response()
    {
        $is_ok = FALSE;
        $message = 'Invalid auth token. Could not complete the API request';

        $this->output->set_status_header(403);# Set an access forbidden response
        return $this->_gen_response($is_ok,$message);
    }

    //Validate captcha
    private function _validate_captcha($captcha_response)//TODO: Convert into library
    {
        $validation_url = self::$_captcha_verify_url.'&response='.$captcha_response;
        
        //Send post request with CURL
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,self::$_captcha_verify_url);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query(
            array(
                'secret'=>self::$_captcha_secret,
                'response'=>$captcha_response,
            ))
        );
        
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
        
        $captcha_result = json_decode(curl_exec($ch));
        $captcha_is_valid = !empty($captcha_response) ? $captcha_result->success : FALSE;
        
        return $captcha_is_valid; 
    }

    //Validate the user's information
    protected function validate_user_info()
    {
        $this->load->library('form_validation');
        
        //TODO: Consider moving this to config file
        // Rules to use in the validation for the various fields
        $this->form_validation->set_rules('first_name','First name',array(
            'trim',
            'required',
            'min_length[2]',
            'max_length[50]',
            'alpha'
        ));

        $this->form_validation->set_rules('last_name','Last name',array(
            'trim',
            'required',
            'min_length[2]',
            'max_length[50]',
            'alpha'
        ));
        
        $this->form_validation->set_rules('email','Email address',array(
            'trim',
            'required',
            'valid_email',
            'is_unique['.TBL_USERS.'.email]'
        ), array(
            'is_unique'=>MSG_EMAIL_EXISTS
        ));

        $this->form_validation->set_rules('country_code','Country code',array(
            'trim',
            'required'
        ));

        $this->form_validation->set_rules('phone','Phone number',array(
            'trim',
            'required',
            'min_length[4]',
            'max_length[15]',
            'alpha_numeric'
        ));

        $this->form_validation->set_rules('captcha','Captcha','required',array(
            'required'=>'Captcha is required. Please complete the captcha.'
        ));

        // Validate the data
        $data_valid = $this->form_validation->run();
        $message = $data_valid ? '' : validation_errors();


        //Validate the captcha
        $captcha = $this->input->post_get('captcha');
        $captcha_is_valid = $this->_validate_captcha($captcha);
        if(!$captcha_is_valid)
        {
            $data_valid &= $captcha_is_valid;
            $message .= '<p>Invalid captcha</p>';//Failed to validate the captcha ~ possible bot/ddos attempt
        }
        return array(
            'ok'=>$data_valid,
            'message'=>$message
        ); 
    }

    //Add a user through a post request
    public function add_user($token='1213123123123')
    {
        $response;
        //If we could not verify the token ~ the response is the auth failed response
        if(!$this->verify_token($token))
        {
            $response = $this->_auth_failed_response();
            return $this->output->set_output($response);
        }
        
        //Token was verified ~ proceed to run the api query
        $data = $this->input->post();
        
        $info_is_valid = $this->validate_user_info();
        $is_ok = $info_is_valid['ok'];
        $extra_info = '';

        
        //If the information provided was valid ~ try adding the user
        if($info_is_valid['ok'])
        {
            $data['first_name'] = ucfirst($data['first_name']);
            $data['last_name'] = ucfirst($data['last_name']);

            #[Bugfix]
            unset($data['captcha']);// Unset the captcha field so we only remain with db fields

            $info = $this->user_model->add_user($data);

            // If there is any extra info, append it
            $extra_info = isset($info['message'])? '<br>'.$info['message'] : '';#TODO: KISS
            $is_ok &= $info['ok'];
        }
        
        //Append any errors if found
        $message = $is_ok ? MSG_REGISTRATION_SUCCESS : MSG_REGISTRATION_FAILURE;
        $message .= $info_is_valid['message'];
        $message .= $extra_info;

        $response = $this->_gen_response($is_ok,$message);
        return $this->output->set_output($response);
    }
}
