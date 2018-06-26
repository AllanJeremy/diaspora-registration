<?php defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    private function _post_joins()
    {
        $this->db->select(TBL_POSTS.'.*');
        $this->db->from(TBL_POSTS);
    }

    //Get all posts
    public function get_posts()
    {
        $this->_post_joins();
        return $this->db->get();
    }

    private function _get_post_by_type($post_type)
    {
        $this->_post_joins();
        $this->db->where(TBL_POSTS.'.post_type',$post_type);
        return $this->db->get();
    }

    // Get announcements
    public function get_announcements()
    {
        return $this->_get_post_by_type('announcement');
    }
    
    // Get minutes
    public function get_minutes()
    {
        return $this->_get_post_by_type('minutes');
    }

    // Add a post
    public function add_post($data)
    {
        return $this->db->insert(TBL_POSTS,$data);
    }

    // Update a post
    public function update_post($post_id,$data)
    {
        $this->db->where(TBL_POSTS.'.id',$post_id);
        return $this->db->update(TBL_POSTS,$data);
    }

    // Delete a post
    function delete_post($post_id)
    {
        $this->db->where(TBL_POSTS.'.id',$post_id);
        return $this->db->delete(TBL_POSTS);
    }
}
