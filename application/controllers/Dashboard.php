<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
    	$this->load->model('general');
        $this->load->helper(array('form', 'url','text'));
        if($this->session->userdata('status') != "login"){
            redirect("Auth");
        }
    }

    function index(){
        $data['list']=$this->general->show('semester')->result();
        $data['informasi']=$this->general->show('informasi')->result();
        $id=$this->session->userdata("nama");
        $date=date('Y-m-d H:i:s');
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $nim=array('nim'=>$id);
        $row=array(
            'log_aktivitas' => $date
            );
        $this->general->update_data($nim,$row,'student');
        $this->load->view('user/index',$data);
    }
    
    function profil(){
        $data['list']=$this->general->show('semester')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
        $data['Beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $id=$this->session->userdata("nama");
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('user/profil',$data);
    }

    function update_profil(){
        $id=$this->input->post('nim');
        $nim=array('nim'=>$id);

        $password=$this->input->post('password');
        $nama=$this->input->post('nama');
        $tp_lahir=$this->input->post('tp_lahir');
        $tg_lahir=$this->input->post('tg_lahir');
        $jenkel=$this->input->post('jenkel');
        $notelp=$this->input->post('notelp');
        $email=$this->input->post('email');
        $alamat=$this->input->post('alamat');
		
		//Check whether user upload picture
        if(!empty($_FILES['image']['name'])){
            $config['upload_path'] = 'assets/images/avatars/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '512';
            $config['file_name'] = $_FILES['image']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('image')){
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            }else{
                $picture = 'user.png';
            }
        }else{
            $picture = $this->input->post('old_image');
        }

        $nomorMoU=$this->input->post('nomorMoU');
        $tglMoU=$this->input->post('tglMoU');
        $bea=$this->input->post('jenisBeasiswa');
        $jurusan=$this->input->post('jurusan');
        $fakultas=$this->input->post('fakultas');
        $angkatan=$this->input->post('angkatan');

        $nama_ayah=$this->input->post('nama_ayah');
        $notelp_ayah=$this->input->post('notelp_ayah');
        $nama_ibu=$this->input->post('nama_ibu');
        $notelp_ibu=$this->input->post('notelp_ibu');
        $alamat_ortu=$this->input->post('alamat_ortu');


        $stu=array(
            'password' => base64_encode($password),
            'nama' => $nama,
            'tp_lahir' => $tp_lahir,
            'tg_lahir' => $tg_lahir,
            'jenkel' => $jenkel,
            'notelp' => $notelp,
            'email' => $email,
            'foto' => $picture,
            'alamat' => $alamat,
            'nomorMoU' => $nomorMoU,
            'tglMoU' => $tglMoU,
            'jenisBeasiswa' => $bea,
            'jurusan' => $jurusan,
            'fakultas' => $fakultas,
            'angkatan' => $angkatan,
            'nama_ayah' => $nama_ayah,
            'notelp_ayah' => $notelp_ayah,
            'nama_ibu' => $nama_ibu,
            'notelp_ibu' => $notelp_ibu,
            'alamat_ortu' => $alamat_ortu 
        );
        $this->general->update_data($nim,$stu,'student');
        redirect('Dashboard/profil');
    }

    function table(){
        $data['list']=$this->general->show('semester')->result();
        $id=$this->session->userdata("nama");
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('user/tables',$data);
    }

    function akademik(){
        $id=$this->session->userdata("nama");
        $data['akademik']=$this->general->show_by('academic',$id)->result();
        $data['th']=$this->general->show('year_education')->result();
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('user/data-akademik',$data);
    }

    function tambah_akademik(){
        $id=$this->input->post('kode_aka');
        $semester=$this->input->post('semester');
        $TA=$this->input->post('tahun');
        $ipk=$this->input->post('ipk');
        $ips=$this->input->post('ips');
        $nim=$this->input->post('nim');
        $aka=array(
            'semester' => $semester,
            'TA' => $TA,
            'ipk' => $ipk,
            'ips' => $ips,
            'fk_nim' => $nim
        );
        $this->general->input_data($aka,'academic');
        redirect('Dashboard/akademik');
    }

    function edit_akademik(){
        $id=$this->input->post('kode_aka');
        $kode_aka=array('kode_aka'=>$id);
        $semester=$this->input->post('semester');
        $TA=$this->input->post('tahun');
        $ipk=$this->input->post('ipk');
        $ips=$this->input->post('ips');
        $nim=$this->input->post('nim');
        $aka=array(
            'semester' => $semester,
            'TA' => $TA,
            'ipk' => $ipk,
            'ips' => $ips,
            'fk_nim' => $nim
        );
        $this->general->update_data($kode_aka,$aka,'academic');
        redirect('Dashboard/akademik');
    }

    function hapus_akademik(){
        $id=$this->input->post('kode_aka');
        $kode_aka=array('kode_aka'=>$id);
        $this->general->hapus_data($kode_aka,'academic');
        redirect('Dashboard/akademik');
    }

    function dokumentasi(){
        $id=$this->session->userdata("nama");
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('user/dokumentasi',$data);
    }

    function kepengurusan(){
        $id=$this->session->userdata("nama");
        $data['th']=$this->general->show('year_education')->result();
        $data['organisasi']=$this->general->show_by('organization',$id)->result();
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('user/data-kepengurusan',$data);
    }

    function tambah_kepengurusan(){
        $id=$this->input->post('kode_org');
        $semester=$this->input->post('semester');
        $TA=$this->input->post('tahun');
        $nama=$this->input->post('nama');
        $nomorSK=$this->input->post('nomorSK');
        $tanggalSK=$this->input->post('tglSK');
        //Check whether user upload picture
        if(!empty($_FILES['fileSK']['name'])){
            $config['upload_path'] = 'assets/sk/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '512';
            $config['file_name'] = $_FILES['fileSK']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('fileSK')){
                $uploadData = $this->upload->data();
                $fileSK = $uploadData['file_name'];
            }else{
                $fileSK = '';
            }
        }else{
            $fileSK = '';
        }
        
        $jabatan=$this->input->post('jabatan');
        $nama_lokasi=$this->input->post('nama_lokasi');
        $tingkat=$this->input->post('tingkat');
        $nim=$this->input->post('nim');
        $aka=array(
            'semester' => $semester,
            'TA' => $TA,
            'nama_organisasi' => $nama,
            'nomorSK' => $nomorSK,
            'tglSK' => $tanggalSK,
            'file_SK' => $fileSK,
            'jabatan' => $jabatan,
            'nama_lokasi' => $nama_lokasi,
            'tingkat' => $tingkat,
            'fk_nim' => $nim
        );
        $this->general->input_data($aka,'organization');
        redirect('Dashboard/kepengurusan');
    }

    function edit_kepengurusan(){
        $id=$this->input->post('kode_org');
        $kode_org=array('kode_org'=>$id);
        $semester=$this->input->post('semester');
        $TA=$this->input->post('tahun');
        $nama=$this->input->post('nama');
        $nomorSK=$this->input->post('nomorSK');
        $tanggalSK=$this->input->post('tglSK');
        //Check whether user upload picture
        if(!empty($_FILES['fileSK']['name'])){
            $config['upload_path'] = 'assets/sk/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '512';
            $config['file_name'] = $_FILES['fileSK']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('fileSK')){
                $uploadData = $this->upload->data();
                $fileSK = $uploadData['file_name'];
            }else{
                $fileSK = '';
            }
        }else{
            $fileSK = $this->input->post('old_fileSK');
        }
        
        $jabatan=$this->input->post('jabatan');
        $nama_lokasi=$this->input->post('nama_lokasi');
        $tingkat=$this->input->post('tingkat');
        $nim=$this->input->post('nim');
        $aka=array(
            'semester' => $semester,
            'TA' => $TA,
            'nama_organisasi' => $nama,
            'nomorSK' => $nomorSK,
            'tglSK' => $tanggalSK,
            'file_SK' => $fileSK,
            'jabatan' => $jabatan,
            'nama_lokasi' => $nama_lokasi,
            'tingkat' => $tingkat,
            'fk_nim' => $nim
        );
        $this->general->update_data($kode_org,$aka,'organization');
        redirect('Dashboard/kepengurusan');
    }

    function hapus_kepengurusan(){
        $id=$this->input->post('kode_org');
        $kode_org=array('kode_org'=>$id);
        $this->general->hapus_data($kode_org,'organization');
        redirect('Dashboard/kepengurusan');
    }

    function portofolio(){
        $id=$this->session->userdata("nama");
        $data['th']=$this->general->show('year_education')->result();
        $data['portofolio']=$this->general->show_by('portofolio',$id)->result();
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('user/data-portofolio',$data);
    }

    function tambah_portofolio(){
        $id=$this->input->post('kode_keg');
        $semester=$this->input->post('semester');
        $TA=$this->input->post('tahun');
        $nama=$this->input->post('nama_keg');
        $tgl=$this->input->post('tgl_keg');
        $lokasi=$this->input->post('lokasi');
        $ortom=$this->input->post('ortom_penye');
        $deskripsi=$this->input->post('deskripsi');
        $dokumentasi=$this->input->post('dokumentasi_keg');
        $nim=$this->input->post('nim');
        $aka=array(
            'semester' => $semester,
            'TA' => $TA,
            'nama_keg' => $nama,
            'tgl_keg' => $tgl,
            'lokasi' => $lokasi,
            'ortom_peny' => $ortom,
            'deskripsi_keg' => $deskripsi,
            'fk_nim' => $nim
        );
        $this->general->input_data($aka,'portofolio');
        redirect('Dashboard/portofolio');
    }

    function edit_portofolio(){
        $id=$this->input->post('kode_keg');
        $kode_keg=array('kode_keg'=>$id);
        $semester=$this->input->post('semester');
        $TA=$this->input->post('tahun');
        $nama=$this->input->post('nama_keg');
        $tgl=$this->input->post('tgl_keg');
        $lokasi=$this->input->post('lokasi');
        $ortom=$this->input->post('ortom_penye');
        $deskripsi=$this->input->post('deskripsi');
        $dokumentasi=$this->input->post('dokumentasi_keg');
        $nim=$this->input->post('nim');
        $aka=array(
            'semester' => $semester,
            'TA' => $TA,
            'nama_keg' => $nama,
            'tgl_keg' => $tgl,
            'lokasi' => $lokasi,
            'ortom_peny' => $ortom,
            'deskripsi_keg' => $deskripsi,
            'fk_nim' => $nim
        );
        $this->general->update_data($kode_keg,$aka,'portofolio');
        redirect('Dashboard/portofolio');
    }

    function hapus_portofolio(){
        $id=$this->input->post('kode_keg');
        $kode_keg=array('kode_keg'=>$id);
        $this->general->hapus_data($kode_keg,'portofolio');
        redirect('Dashboard/portofolio');
    }

    function laporan(){
        $id=$this->session->userdata("nama");
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('user/laporan',$data);
    }

    function laporan_akhir(){
        $id=$this->session->userdata("nama");
        $semester=$this->input->post('semester');
        $ta=$this->input->post('tahun');
        $data['portofolio']=$this->general->show_by_id('portofolio',$id,$semester,$ta)->result();
        $data['score']=$this->general->show_by_id('scoring',$id,$semester,$ta)->result();
        $data['akademik']=$this->general->show_by_id('academic',$id,$semester,$ta)->result();
        $data['organisasi']=$this->general->show_by_id('organization',$id,$semester,$ta)->result();
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('user/laporan-akhir',$data);
    }
    
    function cetak(){
        $id=$this->session->userdata("nama");
        $semester=$this->input->post('semester');
        $ta=$this->input->post('tahun');
        $data['portofolio']=$this->general->show_by_id('portofolio',$id,$semester,$ta)->result();
        $data['akademik']=$this->general->show_by_id('academic',$id,$semester,$ta)->result();
        $data['organisasi']=$this->general->show_by_id('organization',$id,$semester,$ta)->result();
        $data['s']=$this->general->show_where('student',array('nim'=>$id))->result();
        $data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('user/cetak',$data);
      }


}