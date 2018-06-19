<?php defined('BASEPATH') or exit('No direct script access allowed');

class Country_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    private function _country_joins()
    {
        $this->db->select('*');
        $this->db->from(TBL_COUNTRIES);
    }

    //Get all countries countries
    function get_countries()
    {
        $this->_country_joins();

        //Only select the countries that have a phone code
        $this->db->where(TBL_COUNTRIES.'.phonecode !=',0);
        $this->db->order_by(TBL_COUNTRIES.'.phonecode','ASC');
        return $this->db->get();
    }
}
