<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
    private $_table = "users";

    public $full_name;
    public $username;
    public $email;
    public $phone;

    public function rules()
    {
        return [
            [
                'field' => 'full_name',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'username',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => ' ',
                'rules' => 'required'
            ],

            [
                'field' => 'phone',
                'label' => ' ',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    public function updateData()
    {
        $post = $this->input->post();
        $this->full_name = $post["full_name"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->phone = $post["phone"];
        $this->db->update($this->_table, $this, array('user_id' => $post['id']));
    }
}
