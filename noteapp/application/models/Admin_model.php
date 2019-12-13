<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getAllAdmin()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function getRole()
    {
        $query = "SELECT *
        FROM `user` 
        INNER JOIN `user_role` on  `user`.`lv_user` = `user_role`.`id_role`
        INNER JOIN `user_sub_role` on  `user`.`sb_user` = `user_sub_role`.`id_sub_role`
        ";
        return $this->db->query($query)->result_array();
    }

    public function getalluser()
    {
        $query = "SELECT *
        FROM `user` 
        INNER JOIN `user_role` on  `user`.`lv_user` = `user_role`.`id_role`
        INNER JOIN `user_sub_role` on  `user`.`sb_user` = `user_sub_role`.`id_sub_role`
        ";
        return $this->db->query($query)->result_array();
    }

    public function deleteuser($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }

    public function getUserByID($id_user)
    {
        $query = "SELECT *
        FROM `user` 
        INNER JOIN `user_role` on  `user`.`lv_user` = `user_role`.`id_role`
        INNER JOIN `user_sub_role` on  `user`.`sb_user` = `user_sub_role`.`id_sub_role`
        INNER JOIN `user_active` on  `user`.`ac_user` = `user_active`.`id_active`
        WHERE `id_user` = $id_user
        ";
        return $this->db->query($query)->row_array();
        // return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
    }
}
