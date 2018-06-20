<?php defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    // Display the home page
    function index()
    {
        $this->load->model('country_model');
        $countries = $this->country_model->get_countries();
        $data = array(
            'countries'=> $countries->result_object(),
        );

        $this->load->view('pages/register',$data);
    }

    //View any other page
    function view($page)
    {

    }

}