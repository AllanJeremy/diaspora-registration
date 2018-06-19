<?php defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    // Display the home page
    function index()
    {
        $this->load->model('country_model');
        $countries = $this->country_model->get_countries();
        $first_country = $countries->result_array()[0];
        $first_country = (object)$first_country ?? NULL;
        $data = array(
            'countries'=> $countries->result_object(),
            'first_country'=>$first_country
        );

        $this->load->view('pages/register',$data);
    }

    //View any other page
    function view($page)
    {

    }

}