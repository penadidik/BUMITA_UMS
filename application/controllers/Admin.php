<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
 
  function __construct(){
    parent::__construct();    
    $this->load->model('userLog');
 
  }
 
  function index(){
    $this->load->view('admin/login');
  }
 
  function aksi_login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'kode_admin' => $username,
      'password' => base64_encode($password)
      );
    $cek = $this->userLog->cek_login("administrator",$where)->num_rows();
    if($cek > 0){
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
 
      redirect("control");
    }elseif($username=="" && $password==""){
      $data['error_log']="<b class='label label-danger'>Username and Password empty !</b>";
      $this->load->view('admin/login',$data);
    }elseif($username==""){
      $data['error_log']="<b class='label label-danger'>Username empty !</b>";
      $this->load->view('admin/login',$data);
    }elseif($password==""){
      $data['error_log']="<b class='label label-danger'>Password empty !</b>";
      $this->load->view('admin/login',$data);
    }else{
      $data['error_log']="<b class='label label-danger'>Username or Password wrong !</b>";
      $this->load->view('admin/login',$data);
    }
  }
 
  function logout(){
    $this->session->sess_destroy();
    redirect('admin');
  }
}