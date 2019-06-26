<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

    function __construct(){
        parent::__construct();
    	$this->load->model('general');
        if($this->session->userdata('status') != "login"){
            redirect("admin");
        }
    }
 
    function index(){
        $data['angkatan']=$this->general->show('angkatan')->result();
        $data['qty1']=$this->general->show_where('student','angkatan=2015')->num_rows();
        $data['qty2']=$this->general->show_where('student','angkatan=2016')->num_rows();
        $data['qty3']=$this->general->show_where('student','angkatan=2017')->num_rows();
        $data['qty4']=$this->general->show_where('student','angkatan=2018')->num_rows();
        $data['online']=$this->general->show_where('student',"status='online'")->num_rows();
        $data['offline']=$this->general->show_where('student',"status='offline'")->num_rows();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
        $this->load->view('admin/index',$data);
    }

    function data_mahasiswa(){
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/data-mahasiswa',$data);
    }
    
    function data_mahasiswa_angkatan($tahun){
        if(isset($tahun)){
            $data['tahun']=$tahun;
        }
        $angkatan=array('angkatan'=>$tahun);
        $data['mahasiswa']=$this->general->show_where('student',$angkatan)->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/data-mahasiswa',$data);
    }
    
    function tambah_mahasiswa(){
        $nim=$this->input->post('nim');
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
            'nim' => $nim,
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
        
        $this->general->input_data($stu,'student');
        $data['info']='tambah';
        redirect('control/data_mahasiswa',$data);
    }
    
    function edit_mahasiswa(){
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
        $data['info']='edit';
        redirect('control/data_mahasiswa',$data);
    }
    
    function hapus_mahasiswa(){
        $id=$this->input->post('nim');
        $nim=array('nim'=>$id);
        $this->general->hapus_data($nim,'student');
        $data['info']='hapus';
        redirect('control/data_mahasiswa',$data);
    }
    
    function data_akademik(){
        $where='academic.fk_nim=student.nim';
        $data['akademik']=$this->general->join2table('student','academic',$where);
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['th']=$this->general->show('year_education')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/data-akademik',$data);
    }
    
    function data_akademik_angkatan($tahun){
        if(isset($tahun)){
            $data['tahun']=$tahun;
        }
        $angkatan=array('angkatan'=>$tahun);
        $where='academic.fk_nim=student.nim';
        $data['akademik']=$this->general->join2table_where('student','academic',$where,$angkatan);
        $data['mahasiswa']=$this->general->show_where('student',$angkatan)->result();
        $data['th']=$this->general->show('year_education')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/data-akademik',$data);
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
        redirect('control/data_akademik');
    }

    function edit_akademik(){
        $id=$this->input->post('kode_aka');
        $nim=$this->input->post('nim');
        $kode_aka=array('kode_aka'=>$id,'fk_nim'=>$nim);
        $semester=$this->input->post('semester');
        $TA=$this->input->post('tahun');
        $ipk=$this->input->post('ipk');
        $ips=$this->input->post('ips');
        $aka=array(
            'semester' => $semester,
            'TA' => $TA,
            'ipk' => $ipk,
            'ips' => $ips,
        );
        $this->general->update_data($kode_aka,$aka,'academic');
        redirect('control/data_akademik');
    }

    function hapus_akademik(){
        $id=$this->input->post('kode_aka');
        $nim=$this->input->post('nim');
        $kode_aka=array('kode_aka'=>$id,'fk_nim'=>$nim);
        $this->general->hapus_data($kode_aka,'academic');
        redirect('control/data_akademik');
    }
    
    function data_organisasi(){
        $where='organization.fk_nim=student.nim';
        $data['organisasi']=$this->general->join2table('student','organization',$where);
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['th']=$this->general->show('year_education')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/data-organisasi',$data);
    }
    
    function data_organisasi_angkatan($tahun){
        if(isset($tahun)){
            $data['tahun']=$tahun;
        }
        $angkatan=array('angkatan'=>$tahun);
        $where='organization.fk_nim=student.nim';
        $data['organisasi']=$this->general->join2table_where('student','organization',$where,$angkatan);
        $data['mahasiswa']=$this->general->show_where('student',$angkatan)->result();
        $data['th']=$this->general->show('year_education')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/data-organisasi',$data);
    }
    
    function tambah_organisasi(){
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
        redirect('control/data_organisasi');
    }

    function edit_organisasi(){
        $id=$this->input->post('kode_org');
        $nim=$this->input->post('nim');
        $kode_org=array('kode_org'=>$id,'fk_nim'=>$nim);
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
        $aka=array(
            'semester' => $semester,
            'TA' => $TA,
            'nama_organisasi' => $nama,
            'nomorSK' => $nomorSK,
            'tglSK' => $tanggalSK,
            'file_SK' => $fileSK,
            'jabatan' => $jabatan,
            'nama_lokasi' => $nama_lokasi,
            'tingkat' => $tingkat
        );
        $this->general->update_data($kode_org,$aka,'organization');
        redirect('control/data_organisasi');
    }

    function hapus_organisasi(){
        $id=$this->input->post('kode_org');
        $nim=$this->input->post('nim');
        $kode_org=array('kode_org'=>$id,'fk_nim'=>$nim);
        $this->general->hapus_data($kode_org,'organization');
        redirect('control/data_organisasi');
    }
    
    function data_kegiatan(){
        $where='portofolio.fk_nim=student.nim';
        $data['kegiatan']=$this->general->join2table('student','portofolio',$where);
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['th']=$this->general->show('year_education')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/data-kegiatan',$data);
    }
    
    function data_kegiatan_angkatan($tahun){
        if(isset($tahun)){
            $data['tahun']=$tahun;
        }
        $angkatan=array('angkatan'=>$tahun);
        $where='portofolio.fk_nim=student.nim';
        $data['kegiatan']=$this->general->join2table_where('student','portofolio',$where,$angkatan);
        $data['mahasiswa']=$this->general->show_where('student',$angkatan)->result();
        $data['th']=$this->general->show('year_education')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/data-kegiatan',$data);
    }
    
    function tambah_kegiatan(){
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
        redirect('control/data_kegiatan');
    }

    function edit_kegiatan(){
        $id=$this->input->post('kode_keg');
        $nim=$this->input->post('nim');
        $kode_keg=array('kode_keg'=>$id,'fk_nim' => $nim);
        $semester=$this->input->post('semester');
        $TA=$this->input->post('tahun');
        $nama=$this->input->post('nama_keg');
        $tgl=$this->input->post('tgl_keg');
        $lokasi=$this->input->post('lokasi');
        $ortom=$this->input->post('ortom_penye');
        $deskripsi=$this->input->post('deskripsi');
        $dokumentasi=$this->input->post('dokumentasi_keg');
        $aka=array(
            'semester' => $semester,
            'TA' => $TA,
            'nama_keg' => $nama,
            'tgl_keg' => $tgl,
            'lokasi' => $lokasi,
            'ortom_peny' => $ortom,
            'deskripsi_keg' => $deskripsi
        );
        $this->general->update_data($kode_keg,$aka,'portofolio');
        redirect('control/data_kegiatan');
    }

    function hapus_kegiatan(){
        $id=$this->input->post('kode_keg');
        $nim=$this->input->post('nim');
        $kode_keg=array('kode_keg'=>$id,'fk_nim'=>$nim);
        $this->general->hapus_data($kode_keg,'portofolio');
        redirect('control/data_kegiatan');
    }
    
    function catatan(){
        $where1='scoring.fk_nim=student.nim';
        $where2='academic.fk_nim=student.nim';
        $where3='organization.fk_nim=student.nim';
        $data['catatan']=$this->general->join5table('student','scoring','academic','organization',$where1,$where2,$where3);
        $n=$data['catatan'];
        foreach($n as $show){$nim=$show->nim;}
        $where=array('fk_nim'=>$nim);
        $data['portofolio']=$this->general->show_where('portofolio',$where)->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/catatan',$data);
    }
    
    function data_catatan_angkatan($tahun){
        if(isset($tahun)){
            $data['tahun']=$tahun;
        }
        $angkatan=array('student.angkatan'=>$tahun);
        $where1='scoring.fk_nim=student.nim';
        $where2='academic.fk_nim=student.nim';
        $where3='organization.fk_nim=student.nim';
        $data['catatan']=$this->general->join5table('student','scoring','academic','organization',$where1,$where2,$where3,$angkatan);
        $n=$data['catatan'];
        foreach($n as $show){$nim=$show->nim;}
        $where=array('fk_nim'=>$nim);
        $data['portofolio']=$this->general->show_where('portofolio',$where)->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/catatan',$data);
    }
    
    function informasi(){
        $data['informasi']=$this->general->show('informasi')->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/informasi',$data);
    }
    
    function tambah_informasi(){
        $id=$this->input->post('kode');
        $kode=array('kode_informasi'=>$id);
        $tgl=$this->input->post('tgl_informasi');
        $tujuan=$this->input->post('tujuan');
        $judul=$this->input->post('judul');
        $isi=$this->input->post('isi_informasi');
        
        //Check whether user upload picture
        if(!empty($_FILES['fileSK']['name'])){
            $config['upload_path'] = 'assets/informasi/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '512';
            $config['file_name'] = $_FILES['file_informasi']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('file_informasi')){
                $uploadData = $this->upload->data();
                $file = $uploadData['file_name'];
            }else{
                $file = '';
            }
        }else{
            $file = '';
        }
        
        $aka=array(
            'tgl_informasi' => $tgl,
            'akses_informasi' => $tujuan,
            'isi_informasi' => $judul,
            'ket_informasi' => $isi,
            'lampiran_informasi' => $file
        );
        $this->general->input_data($aka,'informasi');
        redirect('control/informasi');
    }
    
    function edit_informasi(){
        $id=$this->input->post('kode');
        $kode=array('kode_informasi'=>$id);
        $tgl=$this->input->post('tgl_informasi');
        $tujuan=$this->input->post('tujuan');
        $judul=$this->input->post('judul');
        $isi=$this->input->post('isi_informasi');
        
        //Check whether user upload picture
        if(!empty($_FILES['fileSK']['name'])){
            $config['upload_path'] = 'assets/informasi/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '512';
            $config['file_name'] = $_FILES['file_informasi']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('file_informasi')){
                $uploadData = $this->upload->data();
                $file = $uploadData['file_name'];
            }else{
                $file = '';
            }
        }else{
            $file = '';
        }
        
        $aka=array(
            'tgl_informasi' => $tgl,
            'akses_informasi' => $tujuan,
            'isi_informasi' => $judul,
            'ket_informasi' => $isi,
            'lampiran_informasi' => $file
        );
        $this->general->update_data($kode,$aka,'informasi');
        redirect('control/informasi');
    }

    function hapus_informasi(){
        $id=$this->input->post('kode');
        $inf=array('kode_informasi'=>$id);
        $this->general->hapus_data($inf,'informasi');
        redirect('control/informasi');
    }
    
    function laporanmhs(){
        $data['fakultas']=$this->general->show('fakultas')->result();
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/laporan-mhs',$data);
    }
    
    function laporanakademik(){
        $data['fakultas']=$this->general->show('fakultas')->result();
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/laporan-akademik',$data);
    }
    
    function laporanorganisasi(){
        $data['fakultas']=$this->general->show('fakultas')->result();
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/laporan-organisasi',$data);
    }
    
    function laporannilai(){
        $data['fakultas']=$this->general->show('fakultas')->result();
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/laporan-nilai',$data);
    }
    
    function halaman(){
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/halaman',$data);
    }
    
    function angkatan(){
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/angkatan',$data);
    }
    
    function usercontrol(){
        $data['control']=$this->general->show('administrator')->result();
        $data['mahasiswa']=$this->general->show('student')->result();
        $data['beasiswa']=$this->general->show('jenisBeasiswa')->result();
        $data['fk']=$this->general->show('fakultas')->result();
        $data['angkatan']=$this->general->show('angkatan')->result();
    	$data['halaman']=$this->general->show('pengaturan_umum')->result();
    	$this->load->view('admin/user-control',$data);
    }

}