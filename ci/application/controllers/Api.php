<?php defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
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

    //Add a user through a post request
    public function add_user($token='1213123123123')
    {
        $response;
        //If we could not verify the token ~ the response is the auth failed response
        if(!$this->verify_token($token))
        {
            $response = $this->_auth_failed_response();
        }
        else
        {
            $data = $this->input->post();
            $info = $this->user_model->add_user($data);
            $is_ok = $info['ok'];
            $message = $is_ok ? MSG_REGISTRATION_SUCCESS : MSG_REGISTRATION_FAILURE;

            // If there is any extra info, append it
            $extra_info = isset($info['message'])? '<br>'.$info['message'] : '';#TODO: KISS
            $message .= $extra_info;

            $response = $this->_gen_response($is_ok,$message);
        }
        
        return $this->output->set_output($response);
    }
}
