<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    // User table joins
    private function _user_joins()
    {
        //TODO: Select only the values we need to avoid selecting passwords & sensitive information
        $this->db->select(
            TBL_USERS.'.id,'
            .TBL_USERS.'.first_name,'
            .TBL_USERS.'.last_name,'
            .TBL_USERS.'.email,'
            .TBL_USERS.'.country_code,'
            
            .TBL_COUNTRIES.'.name,'
            .TBL_COUNTRIES.'.phone_code,'
            .TBL_USERS.'.phone,'

            .TBL_USERS.'.team_id,'
            .TBL_TEAMS,'.team_name,'
            .TBL_TEAMS,'.team_details,'
            .TBL_TEAMS,'.team_image,'
            .TBL_TEAMS,'.date_added,'

            .TBL_USERS.'.active'
        );
        $this->db->from(TBL_USERS);

        $this->db->join(TBL_COUNTRIES,TBL_USERS.'.country_code='.TBL_COUNTRIES.'.id');
        $this->db->join(TBL_TEAMS,TBL_USERS.'.team_id='.TBL_TEAMS.'.id');
    }

    // Get users ~ $limit is the number of records to fetch
    public function get_users($limit=NULL,$offset=NULL)
    {
        $this->_user_joins();
        $this->db->limit($limit,$offset);
        return $this->db->get();
    }

    // Get user by field
    public function get_user($field,$field_value)
    {
        $this->_user_joins();
        $this->db->where($field,$field_value);

        return $this->db->get()->row();
    }
    // Insert user data into database
    public function add_user($data)
    {
        $is_ok = TRUE;
        $message = '';

        //If the data is not set ~ don't bother running query
        if(!is_array($data))
        {
            $is_ok = FALSE;
            $message = 'No data sent ~ invalid request';
        }

        $is_ok &= $this->db->insert(TBL_USERS,$data);
        
        $return_val = array(
            'ok'=> $is_ok,
            'message'=>$message
        );

        //If the user already exists, return false(maybe update it?) to adding the user data 
        return $return_val ;
    }

    // Remove user data based on a field (eg. email).
    // When the value for the field is equal to that, the user will be removed
    public function remove_user($field,$field_value)
    {
        $this->db->where($field,$field_value);
        return $this->db->delete(TBL_USERS);
    }
}
