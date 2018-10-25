<?php

class Role_model extends CI_Model
{
    /**
     * Returns single role from database
     * @param $id int id of role
     * @return mixed
     */
    public function get_role($id)
    {
        return $this->db->select('name')->from('roles')->where('id',$id)->get()->row()->name;
    }

    /**
     * Returns all roles from database
     * @return array array of roles
     */
    public function get_all()
    {
        return $this->db->get('roles')->result();
    }
}