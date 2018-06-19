<?php defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
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
            $data = $this->input->post_get();
            $this->load->model('User_model');
            
            $is_ok = $this->user_model->add_user($data);
            $message = $is_ok ? MSG_REGISTRATION_SUCCESS : MSG_REGISTRATION_FAILURE;
            $response = $this->_gen_response($is_ok,$message);
        }
        
        return $this->output->set_output($response);
    }
}
