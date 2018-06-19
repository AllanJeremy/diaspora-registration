<?php defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    // Display the home page
    function index()
    {
        $this->load->view('pages/register');
    }

    //View any other page
    function view($page)
    {

    }

}