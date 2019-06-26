<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
 
  function __construct(){
    parent::__construct();    
    $this->load->model('UserLog');
    $this->load->model('General');
  }
 
  function index(){
    $data['halaman']=$this->General->show('pengaturan_umum')->result();
    $this->load->view('user/landing',$data);
  }

  function login(){
    $this->load->view('user/login');
  }
 
  function aksi_login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
      'nim' => $username,
      'password' => base64_encode($password)
      );
    $cek = $this->UserLog->cek_login("student",$where)->num_rows();
    if($cek > 0){
 
      $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
 
      $this->session->set_userdata($data_session);
        $nim=array('nim'=>$username);
        $status='online';
        $row=array(
            'status' => $status
            );
        $this->General->update_data($nim,$row,'student');
      redirect("Dashboard");
    }elseif($username=="" && $password==""){
      $data['error_log']="<b class='label label-danger'>Username and Password empty !</b>";
      $this->load->view('user/login',$data);
    }elseif($username==""){
      $data['error_log']="<b class='label label-danger'>Username empty !</b>";
      $this->load->view('user/login',$data);
    }elseif($password==""){
      $data['error_log']="<b class='label label-danger'>Password empty !</b>";
      $this->load->view('user/login',$data);
    }else{
      $data['error_log']="<b class='label label-danger'>Username or password wrong !</b>";
      $this->load->view('user/login',$data);
    }
  }
 
  function logout(){
    $id=$this->session->userdata("nama");
    $nim=array('nim'=>$id);
    $status='offline';
    $row=array(
        'status' => $status
        );
    $this->General->update_data($nim,$row,'student');
    $this->session->sess_destroy();
    redirect('Auth');
  }
}