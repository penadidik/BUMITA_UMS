<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body class="no-skin">
    <?php include('navbar.php'); ?>

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}

        </script>

        <?php include('menubar.php'); ?>

        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content">


                    <div class="page-header">
                                   <?php if(!empty($info)){ foreach($info as $i){
                                    if($i=='tambah'){
                                        echo "<span class='alert alert-success full-right'>Berhasil Menambahkan Data Mahasiswa</span>";
                                    }elseif($i=='edit'){
                                        echo "<span class='alert alert-info full-right'>Berhasil Mengedit Data Mahasiswa</span>";
                                    }else{
                                        echo "<span class='alert alert-danger full-right'>Berhasil Menghapus Data Mahasiswa</span>";
                                    }
                                    }
                                                          }
                                 ?>
                        <h1>
                            Data Mahasiswa
                            <?php if(isset($tahun)){
                                echo 'Angkatan '.$tahun;
                            } ?>
                        </h1>

                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class=""><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#add_new_mahasiswa"> Tambah Data</a></div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="pull-right tableTools-container"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div>
                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Data Diri</th>
                                                    <th>Data MoU</th>
                                                    <th>Data Fakultas</th>
                                                    <th>Data OrangTua</th>
                                                    <th>Data Akun</th>

                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($mahasiswa as $show) {?>
                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="row col-sm-12 col-xs-12">
                                                            <div class="col-sm-5 col-xs-12">
                                                                <img class="editable img-responsive" alt="<?php echo $show->nama; ?>" id="avatar2" src="<?php echo base_url(); ?>assets/images/avatars/<?php  $foto=$show->foto; if(!empty($foto)){ echo $foto; }else{ echo 'user.png';} ?>" width='100px' />
                                                            </div>
                                                            <div class="col-sm-7 col-xs-12">
                                                                <span class='label label-primary'>
                                                                    <?php echo $show->nim; ?></span><br>
                                                                <?php echo $show->nama; ?><br>
                                                                Angkatan:
                                                                <?php echo $show->angkatan; ?>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        No.MoU:
                                                        <?php echo $show->nomorMoU; ?><br>
                                                        Tgl MoU:
                                                        <?php echo $show->tglMoU; ?><br><span class='label label-warning'>
                                                            <?php echo $show->jenisBeasiswa; ?></span>
                                                    </td>
                                                    <td>
                                                        Jurusan:
                                                        <?php echo $show->jurusan; ?><br>
                                                        Fakultas:
                                                        <?php echo $show->fakultas; ?>
                                                    </td>
                                                    <td>
                                                        Nama Ayah:
                                                        <?php echo $show->nama_ayah; ?><br>
                                                        Telp. Ayah:
                                                        <?php echo $show->notelp_ayah; ?>
                                                    </td>
                                                    <td>
                                                        Username:
                                                        <?php echo $show->nim; ?><br>
                                                        Password:
                                                        <?php echo base64_decode($show->password); ?><br>
                                                        <?php $status=$show->status;if($status=='online'){ ?>
                                                        <span class="label label-success">Online</span>
                                                        <?php }else{ ?>
                                                        <span class="label label-danger">Offline</span><br><span class="label label-success">Last
                                                            <?php echo date('d/m/Y (H:i)',strtotime($show->log_aktivitas)); } ?></span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a href="#" class="green" data-toggle="modal" data-target="#edit_<?php echo $show->nim; ?>">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#" data-toggle="modal" data-target="#hapus_<?php echo $show->nim; ?>">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-toggle="modal" data-target="#edit_<?php echo $show->nim; ?>">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-toggle="modal" data-target="#hapus_<?php echo $show->nim; ?>">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <?php include('footer.php'); ?>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
        
        <!-- ============ MODAL EDIT =============== -->
        <div class="modal fade" id="add_new_mahasiswa" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Tambah Mahasiswa<strong>
                        </h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/control/tambah_mahasiswa'?>" enctype='multipart/form-data'>
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">NIM</label>
                                <div class="col-xs-8">
                                    <input name="nim" value="" placeholder="NIM Mahasiswa" class="form-control" type="text" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Password</label>
                                <div class="col-xs-8">
                                    <input name="password" class="form-control" value="" type="text" placeholder="Password...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Lengkap</label>
                                <div class="col-xs-8">
                                    <input name="nama" class="form-control" value="" type="text" placeholder="Nama Lengkap..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tempat, Tanggal Lahir</label>
                                <div class="col-xs-8">
                                    <input name="tp_lahir" class="form-control" value="" type="text" placeholder="Tempat Lahir...">,<input name="tg_lahir" class="form-control" value="" type="date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Jenis Kelamin</label>
                                <div class="col-xs-8">
                                    <select name='jenkel' class='form-control' required>
                                        
                                        <option value='Laki-Laki'>Laki-Laki</option>
                                        <option value='Perempuan'>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor Telepon</label>
                                <div class="col-xs-8">
                                    <input name="notelp" class="form-control" value="" type="text" placeholder="Nomor Telepon...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Email</label>
                                <div class="col-xs-8">
                                    <input name="email" class="form-control" value="" type="email" placeholder="Email@...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Foto/Avatar</label>
                                <div class="col-xs-8">
                                    <input type='text' class='hidden' value='user.png' name='old_image'>
                                    <input type='file' name='image' class='form-control'>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Alamat Lengkap</label>
                                <div class="col-xs-8">
                                    <textarea class="form-control" placeholder="Alamat Lengkap" name="alamat"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor MoU</label>
                                <div class="col-xs-8">
                                    <input name="nomorMoU" class="form-control" value="" type="text" placeholder="Nomor MoU...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tanggal MoU</label>
                                <div class="col-xs-8">
                                    <input name="tglMoU" value="" class="form-control" type="date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Jenis Beasiswa</label>
                                <div class="col-xs-8">
                                    
                                    <select name='jenisBeasiswa' class='form-control'>
                                        
                                        <?php  foreach($beasiswa as $show){ ?>
                                        <option value='<?php echo $show->namaBeasiswa; ?>'>
                                            <?php echo $show->namaBeasiswa; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Jurusan</label>
                                <div class="col-xs-8">
                                    <input name="jurusan" value="" class="form-control" type="text" placeholder="Jurusan...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Jenis Beasiswa</label>
                                <div class="col-xs-8">
                                    <select name='fakultas' class='form-control'>
                                        
                                        <?php foreach($fk as $show){ ?>
                                        <option value='<?php echo $show->nama_fakultas; ?>'>
                                            <?php echo $show->nama_fakultas; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Angkatan</label>
                                <div class="col-xs-8">
                                    <select name='angkatan' class='form-control'>
                                        
                                        <?php foreach($angkatan as $show){ ?>
                                        <option value='<?php echo $show->tahun; ?>'>
                                            <?php echo $show->tahun; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Ayah</label>
                                <div class="col-xs-8">
                                    <input name="nama_ayah" class="form-control" value="" type="text" placeholder="Nama Ayah...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor Telepon Ayah</label>
                                <div class="col-xs-8">
                                    <input name="notelp_ayah" value="" class="form-control" type="text" placeholder="Nomor Telepon Ayah ...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Ibu</label>
                                <div class="col-xs-8">
                                    <input name="nama_ibu" value="" class="form-control" type="text" placeholder="Nama Ibu...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor Telepon Ibu</label>
                                <div class="col-xs-8">
                                    <input name="notelp_ibu" value="" class="form-control" type="text" placeholder="Nomor Telepon Ibu ...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Alamat Orang Tua</label>
                                <div class="col-xs-8">
                                    <textarea class="form-control" placeholder="Alamat Lengkap" name="alamat_ortu"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL EDIT-->
        
        <?php foreach($mahasiswa as $key){ ?>
        <!-- ============ MODAL EDIT =============== -->
        <div class="modal fade" id="edit_<?php echo $key->nim; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Profil Mahasiswa a.n. <strong>
                                <?php  echo $key->nama;  ?>
                        </h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/control/edit_mahasiswa'?>" enctype='multipart/form-data'>
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">NIM</label>
                                <div class="col-xs-8">
                                    <input name="nim" value="<?php  echo $key->nim;  ?>" class="form-control" type="text" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Password</label>
                                <div class="col-xs-8">
                                    <input name="password" class="form-control" value="<?php  echo base64_decode($key->password);  ?>" type="text" placeholder="Password...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Lengkap</label>
                                <div class="col-xs-8">
                                    <input name="nama" class="form-control" value="<?php  echo $key->nama;  ?>" type="text" placeholder="Nama Lengkap..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tempat, Tanggal Lahir</label>
                                <div class="col-xs-8">
                                    <input name="tp_lahir" class="form-control" value="<?php  echo $key->tp_lahir;  ?>" type="text" placeholder="Tempat Lahir...">,<input name="tg_lahir" class="form-control" value="<?php  echo $key->tg_lahir;  ?>" type="date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Jenis Kelamin</label>
                                <div class="col-xs-8">
                                    <?php  $j=$key->jenkel;  ?>
                                    <select name='jenkel' class='form-control'>
                                        <?php if(!empty($j)){ ?>
                                        <option selected class='label label-success' value='<?php echo $j; ?>'>
                                            <?php echo $j; ?>
                                        </option>
                                        <?php }  ?>
                                        <option value='Laki-Laki'>Laki-Laki</option>
                                        <option value='Perempuan'>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor Telepon</label>
                                <div class="col-xs-8">
                                    <input name="notelp" class="form-control" value="<?php  echo $key->notelp;  ?>" type="text" placeholder="Nomor Telepon...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Email</label>
                                <div class="col-xs-8">
                                    <input name="email" class="form-control" value="<?php  echo $key->email;  ?>" type="email" placeholder="Email@...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Foto/Avatar</label>
                                <div class="col-xs-8">
                                    <input type='text' class='hidden' value='<?php  $img=$key->foto;  if(!empty($img)){echo $img;}else{echo ' user.png';} ?>' name='old_image'>
                                    <input type='file' name='image' class='form-control'>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Alamat Lengkap</label>
                                <div class="col-xs-8">
                                    <textarea class="form-control" placeholder="Alamat Lengkap" name="alamat"><?php  echo $key->alamat;  ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor MoU</label>
                                <div class="col-xs-8">
                                    <input name="nomorMoU" class="form-control" value="<?php  echo $key->nomorMoU;  ?>" type="text" placeholder="Nomor MoU...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tanggal MoU</label>
                                <div class="col-xs-8">
                                    <input name="tglMoU" value="<?php  echo $key->tglMoU;  ?>" class="form-control" type="date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Jenis Beasiswa</label>
                                <div class="col-xs-8">
                                    <?php  $bea=$key->jenisBeasiswa;  ?>
                                    <select name='jenisBeasiswa' class='form-control'>
                                        <?php if(!empty($bea)){ ?>
                                        <option selected class='label label-success' value='<?php echo $bea; ?>'>
                                            <?php echo $bea; ?>
                                        </option>
                                        <?php } foreach($beasiswa as $show){ ?>
                                        <option value='<?php echo $show->namaBeasiswa; ?>'>
                                            <?php echo $show->namaBeasiswa; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Jurusan</label>
                                <div class="col-xs-8">
                                    <input name="jurusan" value="<?php  echo $key->jurusan;  ?>" class="form-control" type="text" placeholder="Jurusan...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Jenis Beasiswa</label>
                                <div class="col-xs-8">
                                    <?php  $fakultas=$key->fakultas;  ?>
                                    <select name='fakultas' class='form-control'>
                                        <?php if(!empty($fakultas)){ ?>
                                        <option selected class='label label-success' value='<?php echo $fakultas; ?>'>
                                            <?php echo $fakultas; ?>
                                        </option>
                                        <?php } foreach($fk as $show){ ?>
                                        <option value='<?php echo $show->nama_fakultas; ?>'>
                                            <?php echo $show->nama_fakultas; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Angkatan</label>
                                <div class="col-xs-8">
                                    <?php  $ang=$key->angkatan;  ?>
                                    <select name='angkatan' class='form-control'>
                                        <?php if(!empty($ang)){ ?>
                                        <option selected class='label label-success' value='<?php echo $ang; ?>'>
                                            <?php echo $ang; ?>
                                        </option>
                                        <?php } foreach($angkatan as $show){ ?>
                                        <option value='<?php echo $show->tahun; ?>'>
                                            <?php echo $show->tahun; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Ayah</label>
                                <div class="col-xs-8">
                                    <input name="nama_ayah" class="form-control" value="<?php  echo $key->nama_ayah;  ?>" type="text" placeholder="Nama Ayah...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor Telepon Ayah</label>
                                <div class="col-xs-8">
                                    <input name="notelp_ayah" value="<?php  echo $key->notelp_ayah;  ?>" class="form-control" type="text" placeholder="Nomor Telepon Ayah ...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Ibu</label>
                                <div class="col-xs-8">
                                    <input name="nama_ibu" value="<?php  echo $key->nama_ibu;  ?>" class="form-control" type="text" placeholder="Nama Ibu...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nomor Telepon Ibu</label>
                                <div class="col-xs-8">
                                    <input name="notelp_ibu" value="<?php  echo $key->notelp_ibu;  ?>" class="form-control" type="text" placeholder="Nomor Telepon Ibu ...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Alamat Orang Tua</label>
                                <div class="col-xs-8">
                                    <textarea class="form-control" placeholder="Alamat Lengkap" name="alamat_ortu"><?php  echo $key->alamat_ortu;  ?></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL EDIT-->
            <?php } ?>
            
        <!-- MODAL HAPUS-->
        <?php foreach($mahasiswa as $hapus):
            $id=$hapus->nim;
        ?>
        <div id="hapus_<?php echo $hapus->nim; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Apakah Anda akan menghapus Data Akademik Mahasiswa a.n. <strong>
                                <?php echo $hapus->nama; ?>?</strong></h4>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/control/hapus_mahasiswa'?>">
                        <input name="nim" value="<?php echo $id;?>" class="hidden" type="text">
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                            <button class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <!-- MODAL END HAPUS-->
        <?php endforeach;?>


    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");

    </script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.select.min.js"></script>

    <!-- ace scripts -->
    <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            //initiate dataTables plugin
            var myTable =
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable({
                    bAutoWidth: false,
                    "aoColumns": [{
                            "bSortable": false
                        },
                        null, null, null, null, null,
                        {
                            "bSortable": false
                        }
                    ],
                    "aaSorting": [],


                    //"bProcessing": true,
                    //"bServerSide": true,
                    //"sAjaxSource": "http://127.0.0.1/table.php"	,

                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,

                    //"sScrollX": "100%",
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                    //"iDisplayLength": 50


                    select: {
                        style: 'multi'
                    }
                });



            $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

            new $.fn.dataTable.Buttons(myTable, {
                buttons: [{
                        "extend": "colvis",
                        "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        columns: ':not(:first):not(:last)'
                    },
                    {
                        "extend": "copy",
                        "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                        "extend": "csv",
                        "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                        "extend": "excel",
                        "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                        "extend": "pdf",
                        "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                        "extend": "print",
                        "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        autoPrint: false,
                        message: 'This print was produced using the Print button for DataTables'
                    }
                ]
            });
            myTable.buttons().container().appendTo($('.tableTools-container'));

            //style the message box
            var defaultCopyAction = myTable.button(1).action();
            myTable.button(1).action(function(e, dt, button, config) {
                defaultCopyAction(e, dt, button, config);
                $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
            });


            var defaultColvisAction = myTable.button(0).action();
            myTable.button(0).action(function(e, dt, button, config) {

                defaultColvisAction(e, dt, button, config);


                if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                    $('.dt-button-collection')
                        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                        .find('a').attr('href', '#').wrap("<li />")
                }
                $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
            });

            ////

            setTimeout(function() {
                $($('.tableTools-container')).find('a.dt-button').each(function() {
                    var div = $(this).find(' > div').first();
                    if (div.length == 1) div.tooltip({
                        container: 'body',
                        title: div.parent().text()
                    });
                    else $(this).tooltip({
                        container: 'body',
                        title: $(this).text()
                    });
                });
            }, 500);





            myTable.on('select', function(e, dt, type, index) {
                if (type === 'row') {
                    $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                }
            });
            myTable.on('deselect', function(e, dt, type, index) {
                if (type === 'row') {
                    $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                }
            });




            /////////////////////////////////
            //table checkboxes
            $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

            //select/deselect all rows according to table header checkbox
            $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
                var th_checked = this.checked; //checkbox inside "TH" table header

                $('#dynamic-table').find('tbody > tr').each(function() {
                    var row = this;
                    if (th_checked) myTable.row(row).select();
                    else myTable.row(row).deselect();
                });
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
                var row = $(this).closest('tr').get(0);
                if (this.checked) myTable.row(row).deselect();
                else myTable.row(row).select();
            });



            $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                e.stopImmediatePropagation();
                e.stopPropagation();
                e.preventDefault();
            });



            //And for the first simple table, which doesn't have TableTools or dataTables
            //select/deselect all rows according to table header checkbox
            var active_class = 'active';
            $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
                var th_checked = this.checked; //checkbox inside "TH" table header

                $(this).closest('table').find('tbody > tr').each(function() {
                    var row = this;
                    if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                    else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                });
            });

            //select/deselect a row when the checkbox is checked/unchecked
            $('#simple-table').on('click', 'td input[type=checkbox]', function() {
                var $row = $(this).closest('tr');
                if ($row.is('.detail-row ')) return;
                if (this.checked) $row.addClass(active_class);
                else $row.removeClass(active_class);
            });



            /********************************/
            //add tooltip for small view action buttons in dropdown menu
            $('[data-rel="tooltip"]').tooltip({
                placement: tooltip_placement
            });

            //tooltip placement on right or left
            function tooltip_placement(context, source) {
                var $source = $(source);
                var $parent = $source.closest('table')
                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $source.offset();
                //var w2 = $source.width();

                if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
                return 'left';
            }




            /***************/
            $('.show-details-btn').on('click', function(e) {
                e.preventDefault();
                $(this).closest('tr').next().toggleClass('open');
                $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
            });
            /***************/





            /**
            //add horizontal scrollbars to a simple table
            $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
              {
            	horizontal: true,
            	styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
            	size: 2000,
            	mouseWheelLock: true
              }
            ).css('padding-top', '12px');
            */


        })

    </script>
</body>

</html>
