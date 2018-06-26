<?php defined('BASEPATH') or exit('No direct script access allowed');

class Team_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    // Team related selects
    private function _teams_joins()
    {
        $this->db->select(TBL_TEAMS.'.*');
        $this->db->from(TBL_TEAMS);
    }
    // Get all the teams
    public function get_teams()
    {
        $this->_teams_joins();
        return $this->db->get();
    }

    // Add a new team
    public function add_team($data)
    {
        return $this->db->insert(TBL_TEAMS,$data);
    }

    // Update team 
    public function update_team($team_id,$data)
    {
        $this->db->where(TBL_TEAMS.'.id',$team_id);
        return $this->db->update(TBL_TEAMS,$data);
    }

    // Remove a team from the database
    public function delete_team($team_id)
    {
        $this->db->where(TBL_TEAMS.'.id',$team_id);
        return $this->db->delete(TBL_TEAMS);
    }
}