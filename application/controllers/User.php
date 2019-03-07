<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
    public function index()
    {
        
    }
    public function create()
    {
        $this->load->view('dashboard/user/registration');
    }
    public function login()
    {
        $this->load->view('dashboard/user/login');
    }
    /*public function index(){
        if($this->session->userdata('islogin')){
            redirect('home');
        }else{
            $this->load->view('page/home/login');
        }
    }
    public function registration(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('fullname', 'Name', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');
            if($this->form_validation->run()){
                if(!$this->user_model->user_exists()){
                    $res = $this->user_model->insert();
                    $data = array(
                        'userid' => $res[0],
                        'username' => $res[1],
                        'fullname' => $res[2],
                        'islogin' => true
                    );
                    $this->session->set_userdata($data);
                    redirect('home');
                }else{
                    echo "Already taken email or username";
                }
            }else{
                echo "validation error";
            }
        }else{
            echo "No data";
        }
    }


    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $this->form_validation->set_rules('username', 'Usename', 'trim|required|min_length[2]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');
            if($this->form_validation->run()){
                $res = $this->user_model->get_user();
                if($res->num_rows() === 1){
                    $user = $res->result();
                    $data = array(
                        'userid' => $user[0]->id,
                        'username' => $user[0]->username,
                        'fullname' => $user[0]->fullname,
                        'islogin' => true
                    );
                    $this->session->set_userdata($data);
                    redirect('home');
                }else if($res->num_rows() === 0){
                    echo "Wronge indenty";
                }else{
                    echo "Something error";
                }
            }
        }else{
            echo "Request method error";
        }
    }


    public function logout(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $this->session->unset_userdata('userid');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('fullname');
            $this->session->unset_userdata('islogin');
            redirect('home');
        }else{
            echo "Request method error";
        }
    }*/
}