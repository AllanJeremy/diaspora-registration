<?php defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    // Display the home page
    function index()
    {
        $this->load->model('country_model');
        $countries = $this->country_model->get_countries();
        $data['countries'] = $countries->result_object();

        $this->load->view('pages/home',$data);
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
        
        $data['page'] = $page;
        $data['page_title'] = ucfirst($page).' | '.ucwords(SITE_TITLE);

        //If we are on the teams or home page ~ load appropriate models
        switch ($page) {
            case 'teams':
                $this->load->model('team_model');
                $teams = $this->team_model->get_teams();
                $data['teams'] = $teams->result_object();
                $data['teams_exist'] = isset($data['teams']) && (@count($data['teams'])>0);
            
            case 'register':
                $this->load->model('country_model');
                $countries = $this->country_model->get_countries();
                $data['countries'] = $countries->result_object();
                $data['page_title'] = 'Join the Campaign | '.ucwords(SITE_TITLE);
            break;

            case 'minutes':
                $this->load->model('post_model');//TODO: DRY this up
                $minutes = $this->post_model->get_minutes();
                $data['minutes_list'] = $minutes->result_object();
                $data['minutes_exist'] = isset($data['minutes_list']) && (@count($data['minutes_list'])>0);
            break;
            case 'announcements':
                $this->load->model('post_model');//TODO: DRY this up
                $announcements = $this->post_model->get_announcements();
                $data['announcement_list'] = $announcements->result_object();
                $data['announcements_exist'] = isset($data['announcement_list']) && (@count($data['announcement_list'])>0);
            break;
        }

        // If the page is home or teams ~ load the country list
        
        $data['nav_active'] = array();


        $view_to_load = SITE_VIEW_PATH.'pages/'.$page;
        $this->load->view($view_to_load,$data);
    }

}