<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->helper(['form','url']);
    }

    public function index() {
        $data['users'] = $this->User_model->get_users();
        $this->load->view('user_list', $data);

    }

    public function create() {
        $this->load->view('user_form');
    }

    public function store() {
    $data = [
        'name'      => $this->input->post('name'),
        'email'     => $this->input->post('email'),
        'education' => $this->input->post('education'),
        'city'      => $this->input->post('city'),
        'gender'    => $this->input->post('gender'),
    ];

    // Handle file uploads
    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = '*';
    $config['max_size']      = 2048;

    $this->load->library('upload', $config);

    for ($i = 1; $i <= 4; $i++) {
        $field_name = 'image_' . $i;
        if (!empty($_FILES[$field_name]['name'])) {
            if ($this->upload->do_upload($field_name)) {
                $upload_data = $this->upload->data();
                $data[$field_name] = $upload_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                return; // Stop execution if upload fails
            }
        }
    }

    $this->User_model->insert_user($data);
    redirect('user');
}



    public function edit($id) {
        $data['user'] = $this->User_model->get_user($id);
        $this->load->view('user_form', $data);
    }

    public function update($id) {
    $data = [
        'name'      => $this->input->post('name'),
        'email'     => $this->input->post('email'),
        'education' => $this->input->post('education'),
        'city'      => $this->input->post('city'),
        'gender'    => $this->input->post('gender'),
    ];

    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = '*';
    $config['max_size']      = 2048;

    $this->load->library('upload', $config);

    for ($i = 1; $i <= 4; $i++) {
        $field_name = 'image_' . $i;
        if (!empty($_FILES[$field_name]['name'])) {
            if ($this->upload->do_upload($field_name)) {
                $upload_data = $this->upload->data();
                $data[$field_name] = $upload_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                return;
            }
        }
    }

    $this->User_model->update_user($id, $data);
    redirect('user');
}


    public function delete($id) {
        $this->User_model->delete_user($id);
        redirect('user');
    }
}
?>