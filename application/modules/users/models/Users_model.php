<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function _create()
    {

    }
    
    public function _read($id)
    {
        $this->db->get_where('users', 'id = '.$id)->result_array();
    }
    
    public function _update()
    {

    }

    public function _delete()
    {
        
    }

    public function _datatable_index()
    {
        return $this->db->get('users')->result_array();
    }
}