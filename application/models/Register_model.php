<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
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
                'rules' => 'required|trim|min_length[5]'
            ],
            // [
            //     'field' => 'confirm_password',
            //     'label' => 'Konfirmasi password',
            //     'rules' => 'trim|min_length[5]|matches[password]'
            // ],
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

    public function save()
    {
        $post = $this->input->post();
        $this->full_name = $post["full_name"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->phone = $post["phone"];
        $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        $this->role = $post["role"] ?? "staff";
        $this->db->where('username', $this->username);
        $this->db->or_where('email', $this->email);
        $check_user = $this->db->get($this->_table)->row();
        // echo '<pre>' . var_export($check_user, true) . '</pre>';
        // die();
        if (isset($check_user)) {
            return FALSE;
        } else {
            $this->db->insert($this->_table, $this);
            return TRUE;
        }
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
