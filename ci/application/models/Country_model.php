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
        return $this->db->get();
    }
}
