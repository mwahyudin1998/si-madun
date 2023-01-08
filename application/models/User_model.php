<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "users";

    public $full_name;
    public $username;
    public $password;
    public $phone;
    public $email;
    public $role;

    public function rules()
    {
        return [
            [
                'field' => 'full_name',
                'label' => 'Full Name',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'phone',
                'label' => 'No. Telp',
                'rules' => 'required|min_length[11]'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|min_length[5]'
            ],
            [
                'field' => 'confirm_password',
                'label' => 'Konfirmasi password',
                'rules' => 'trim|min_length[5]|matches[password]'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get_where($this->_table, ["user_id !=" => $this->session->userdata('user_logged')->user_id])->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->full_name = $post["full_name"];
    //     $this->username = $post["username"];
    //     $this->email = $post["email"];
    //     $this->phone = $post["phone"];
    //     $this->password = password_hash($post["password1"], PASSWORD_DEFAULT);
    //     $this->role = $post["role"] ?? "staff";
    //     return $this->db->insert($this->_table, $this);
    // }

    public function update()
    {
        $post = $this->input->post();
        $this->full_name = $post["full_name"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->phone = $post["phone"];
        $this->role = $post["role"];
        if (!empty($post['password'])) {
            $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        } else {
            $this->password = $post["old_password"];
        }
        $this->db->update($this->_table, $this, array('user_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("user_id" => $id));
    }

    public function verify($id)
    {
        var_dump($id);
        $is_verified = $this->db->update($this->_table, array('is_active' => 1), array('user_id' => $id));
        if (isset($is_verified)) {
            return $this->db->get_where($this->_table, ["user_id" => $id])->row();
        } else return false;
    }

    public function unverify($id)
    {
        var_dump($id);
        $is_unverified = $this->db->update($this->_table, array('is_active' => 0), array('user_id' => $id));
        if (isset($is_unverified)) {
            return $this->db->get_where($this->_table, ["user_id" => $id])->row();
        } else return false;
    }

    public function doLogin()
    {
        $post = $this->input->post();

        $this->db->where('email', $post["email"])
            ->or_where('username', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        if ($post['email'] == '' or $post['password'] == '') {
            return "EMPTY";
        } else if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isActive = $user->is_active == 1;
            if ($isPasswordTrue && $isActive) {
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->user_id);
                return "SUCCESS";
            } else if (!$isActive) {
                return "INACTIVE";
            } else {
                return "FAILED";
            }
        } else {
            return "FAILED";
        }
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id)
    {
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }
}
