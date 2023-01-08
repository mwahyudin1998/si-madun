<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Password_model extends CI_Model
{
    private $_table = "users";

    public $password;

    public function rules()
    {
        return [
            [
                'field' => 'old_password',
                'label' => 'Old Password',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'New Password',
                'rules' => 'required|trim|min_length[5]'
            ],
            [
                'field' => 'confirm_password',
                'label' => 'Confirm Password',
                'rules' => 'required|trim|min_length[5]|matches[password]'
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

    public function updatePassword()
    {
        $user = $this->session->userdata("user_logged");
        $post = $this->input->post();
        $isPasswordTrue = password_verify($post["old_password"], $user->password);

        if ($isPasswordTrue) {
            $data = array(
                'password' => password_hash($post["password"], PASSWORD_DEFAULT)
            );

            // echo '<pre>' . var_export($data, true) . '</pre>';
            // echo '<pre>' . var_export(array('user_id' => $user->user_id), true) . '</pre>';
            // die();
            return $this->db->update($this->_table, $data, array('user_id' => $user->user_id));
        } else {
            return false;
        }
    }
}
