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

        $this->load->view('pages/index',$data);
    }

    private function _get_nav_text($navitem_name,$active_page)
    {
        //Parse the nav item name format expected by ci : words_with_underscore
        $navitem_name = trim(preg_replace('/\s+/',' ',$navitem_name));# Remove extra whitespace
        $navitem_name = str_replace(' ','_',$navitem_name);# Replace spaces with undescores
        $navitem_name = strtolower($navitem_name);
        
        // * 'Home page ' would now be 'home_page' (CI view naming convention)

        $active_page = strtolower($active_page);

        return ($navitem_name == $active_page) ? 'active' : '';
    }
    //View any other page
    function view($page)
    {
        //If the view file does not exist 
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        } 
        
        $data['nav_active'] = array();
        
        $data['page'] = $page;
        $data['page_title'] = ucwords(SITE_TITLE).ucfirst($page);

        $view_to_load = SITE_VIEW_PATH.'pages/'.$page;
        $this->load->view($view_to_load,$data);
    }

}