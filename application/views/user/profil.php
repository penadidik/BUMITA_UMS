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
                        <a href="" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#edit_">Edit Profil</a>
                        <h1>
                            Profil
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                Mahasiswa a.n. <?php foreach ($s as $key) { echo $key->nama; }; ?>
                            </small>
                        </h1>
                    </div><!-- /.page-header -->
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            
                            <div class="">
                                <div id="user-profile-2" class="user-profile">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs padding-18">
                                            <li class="active">
                                                <a data-toggle="tab" href="#home">
                                                    <i class="green ace-icon fa fa-user bigger-120"></i>
                                                    Data Diri
                                                </a>
                                            </li>

                                            <li>
                                                <a data-toggle="tab" href="#feed">
                                                    <i class="blue ace-icon fa fa-users bigger-120"></i>
                                                    Data Orang Tua
                                                </a>
                                            </li>

                                            <li>
                                                <a data-toggle="tab" href="#friends">
                                                    <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                                    Data Akun
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content no-border padding-24">
                                            <div id="home" class="tab-pane in active">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-3 center">
                                                        <span class="profile-picture">
                                                            <img class="editable img-responsive" alt="<?php foreach ($s as $key) { echo $key->nama; }; ?>" id="avatar2" src="<?php echo base_url(); ?>assets/images/avatars/<?php foreach ($s as $key) { $foto=$key->foto; } if(!empty($foto)){ echo $foto; }else{ echo 'user.png';} ?>" />
                                                        </span>

                                                    <div class="col-xs-12 col-sm-3 center"><span class='label label-warning center'>Ukuran Foto max 512kB</span></div>
                                                    </div><!-- /.col -->
                                                    

                                                    <div class="col-xs-12 col-sm-9">
                                                        <h4 class="blue">
                                                            <span class="middle"><?php foreach ($s as $key) { echo $key->nama; }; ?></span>

                                                            <span class="label label-purple arrowed-in-right">
                                                                <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                                                online
                                                            </span>
                                                        </h4>

                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> NIM </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->nim; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> TTL </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->tp_lahir; }; ?></span>
                                                                    <span><?php foreach ($s as $key) { echo date('d F Y',strtotime($key->tg_lahir)); }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Jenis Kelamin </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->jenkel; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> No. Telp </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->notelp; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Email </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->email; }; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Alamat </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->alamat; }; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="hr hr-8 dotted"></div>

                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Nomor MoU </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#" target="_blank"><?php foreach ($s as $key) { echo $key->nomorMoU; }; ?></a>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Tanggal MoU </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#" target="_blank"><?php foreach ($s as $key) { echo date('d F Y',strtotime($key->tglMoU)); }; ?></a>
                                                                </div>
                                                            </div>
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Jenis Beasiswa </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#" target="_blank"><?php foreach ($s as $key) { echo $key->jenisBeasiswa; }; ?></a>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Fakultas </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#" target="_blank"><?php foreach ($s as $key) { echo $key->fakultas; }; ?></a>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Jurusan
                                                                </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#"><?php foreach ($s as $key) { echo $key->jurusan; }; ?></a>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name">Angkatan
                                                                </div>

                                                                <div class="profile-info-value">
                                                                    <a href="#"><?php foreach ($s as $key) { echo $key->angkatan; }; ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->


                                               
                                            </div><!-- /#home -->

                                            <div id="feed" class="tab-pane">
                                                <div class="profile-feed row">
                                                    <div class="col-xs-12 col-sm-9">
                                                        <h4 class="blue">
                                                            <span class="middle">Data Orang Tua dari <?php foreach ($s as $key) { echo $key->nama; }; ?> </span>
                                                        </h4>

                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Nama Ayah </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->nama_ayah; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Nama Ibu </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->nama_ibu; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> No. Telp Ayah </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->notelp_ayah; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> No. Telp Ibu </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->notelp_ibu; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Alamat Orang Tua </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->alamat_ortu; }; ?></span>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->
                                            </div><!-- /#feed -->

                                            <div id="friends" class="tab-pane">
                                                <div class="profile-feed row">
                                                    <div class="col-xs-12 col-sm-9">
                                                        <h4 class="blue">
                                                            <span class="middle">Data Akun <?php foreach ($s as $key) { echo $key->nama; }; ?> </span>
                                                        </h4>

                                                        <div class="profile-user-info">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> NIM </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->nim; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Email </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->email; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> No. Telp </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->notelp; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row orange">
                                                                <div class="profile-info-name"> Username </div>

                                                                <div class="profile-info-value">
                                                                    <span><?php foreach ($s as $key) { echo $key->nim; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row orange">
                                                                <div class="profile-info-name"> Password </div>

                                                                <div class="profile-info-value">
                                                                    <span style="text-decoration:line-through"><?php foreach ($s as $key) { echo base64_decode($key->password); } ?></span>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->
                                            </div><!-- /#friends -->

                                            
                                        </div>
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
        <div class="modal fade" id="edit_" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Profil Mahasiswa a.n. <strong><?php foreach ($s as $key) { echo $key->nama; }; ?></h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/dashboard/update_profil'?>" enctype='multipart/form-data'>
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIM</label>
                        <div class="col-xs-8">
                            <input name="nim" value="<?php foreach ($s as $key) { echo $key->nim; }; ?>" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-8">
                            <input name="password" class="form-control" value="<?php foreach ($s as $key) { echo base64_decode($key->password); } ?>" type="text" placeholder="Password..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Lengkap</label>
                        <div class="col-xs-8">
                            <input name="nama" class="form-control" value="<?php foreach ($s as $key) { echo $key->nama; }; ?>" type="text" placeholder="Nama Lengkap..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tempat, Tanggal Lahir</label>
                        <div class="col-xs-8">
                            <input name="tp_lahir" class="form-control" value="<?php foreach ($s as $key) { echo $key->tp_lahir; }; ?>" type="text" placeholder="Tempat Lahir..." required>,<input name="tg_lahir" class="form-control" value="<?php foreach ($s as $key) { echo $key->tg_lahir; }; ?>" type="date" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-8"><?php foreach ($s as $key) { $j=$key->jenkel; }; ?>
                            <select name='jenkel' class='form-control' required>
                                <?php if(!empty($j)){ ?>
                                <option selected class='label label-success' value='<?php echo $j; ?>'><?php echo $j; ?></option>
                                <?php }  ?>
                                <option value='Laki-Laki'>Laki-Laki</option>
                                <option value='Perempuan'>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nomor Telepon</label>
                        <div class="col-xs-8">
                            <input name="notelp" class="form-control" value="<?php foreach ($s as $key) { echo $key->notelp; }; ?>" type="text" placeholder="Nomor Telepon..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-8">
                            <input name="email" class="form-control" value="<?php foreach ($s as $key) { echo $key->email; }; ?>" type="email" placeholder="Email@..." required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Foto/Avatar</label>
                        <div class="col-xs-8">
                            <input type='text' class='hidden' value='<?php foreach ($s as $key) { $img=$key->foto; } if(!empty($img)){echo $img;}else{echo 'user.png';} ?>' name='old_image'>
                            <input type='file' name='image' class='form-control'>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat Lengkap</label>
                        <div class="col-xs-8">
                            <textarea class="form-control" placeholder="Alamat Lengkap" name="alamat"><?php foreach ($s as $key) { echo $key->alamat; }; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nomor MoU</label>
                        <div class="col-xs-8">
                            <input name="nomorMoU" class="form-control" value="<?php foreach ($s as $key) { echo $key->nomorMoU; }; ?>" type="text" placeholder="Nomor MoU..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal MoU</label>
                        <div class="col-xs-8">
                            <input name="tglMoU" value="<?php foreach ($s as $key) { echo $key->tglMoU; }; ?>" class="form-control" type="date" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Beasiswa</label>
                        <div class="col-xs-8"><?php foreach ($s as $key) { $bea=$key->jenisBeasiswa; }; ?>
                            <select name='jenisBeasiswa' class='form-control' required>
                                <?php if(!empty($bea)){ ?>
                                <option selected class='label label-success' value='<?php echo $bea; ?>'><?php echo $bea; ?></option>
                                <?php } foreach($Beasiswa as $show){ ?>
                                <option value='<?php echo $show->namaBeasiswa; ?>'><?php echo $show->namaBeasiswa; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jurusan</label>
                        <div class="col-xs-8">
                            <input name="jurusan" value="<?php foreach ($s as $key) { echo $key->jurusan; }; ?>" class="form-control" type="text" placeholder="Jurusan..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Beasiswa</label>
                        <div class="col-xs-8"><?php foreach ($s as $key) { $fakultas=$key->fakultas; }; ?>
                            <select name='fakultas' class='form-control' required>
                                <?php if(!empty($fakultas)){ ?>
                                <option selected class='label label-success' value='<?php echo $fakultas; ?>'><?php echo $fakultas; ?></option>
                                <?php } foreach($fk as $show){ ?>
                                <option value='<?php echo $show->nama_fakultas; ?>'><?php echo $show->nama_fakultas; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Angkatan</label>
                        <div class="col-xs-8"><?php foreach ($s as $key) { $ang=$key->angkatan; }; ?>
                            <select name='angkatan' class='form-control' required>
                                <?php if(!empty($ang)){ ?>
                                <option selected class='label label-success' value='<?php echo $ang; ?>'><?php echo $ang; ?></option>
                                <?php } foreach($angkatan as $show){ ?>
                                <option value='<?php echo $show->tahun; ?>'><?php echo $show->tahun; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Ayah</label>
                        <div class="col-xs-8">
                            <input name="nama_ayah" class="form-control" value="<?php foreach ($s as $key) { echo $key->nama_ayah; }; ?>" type="text" placeholder="Nama Ayah..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nomor Telepon Ayah</label>
                        <div class="col-xs-8">
                            <input name="notelp_ayah" value="<?php foreach ($s as $key) { echo $key->notelp_ayah; }; ?>" class="form-control" type="text" placeholder="Nomor Telepon Ayah ..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Ibu</label>
                        <div class="col-xs-8">
                            <input name="nama_ibu" value="<?php foreach ($s as $key) { echo $key->nama_ibu; }; ?>" class="form-control" type="text" placeholder="Nama Ibu..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nomor Telepon Ibu</label>
                        <div class="col-xs-8">
                            <input name="notelp_ibu" value="<?php foreach ($s as $key) { echo $key->notelp_ibu; }; ?>" class="form-control" type="text" placeholder="Nomor Telepon Ibu ..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat Orang Tua</label>
                        <div class="col-xs-8">
                            <textarea class="form-control" placeholder="Alamat Lengkap" name="alamat_ortu"><?php foreach ($s as $key) { echo $key->alamat_ortu; }; ?></textarea>
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


    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");

    </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.gritter.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootbox.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.hotkeys.index.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/spinbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-editable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ace-editable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>

    <!-- ace scripts -->
    <script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {

            //editables on first profile page
            $.fn.editable.defaults.mode = 'inline';
            $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
            $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>' +
                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';

            //editables 

            //text editable
            $('#username')
                .editable({
                    type: 'text',
                    name: 'username'
                });



            //select2 editable
            var countries = [];
            $.each({
                "CA": "Canada",
                "IN": "India",
                "NL": "Netherlands",
                "TR": "Turkey",
                "US": "United States"
            }, function(k, v) {
                countries.push({
                    id: k,
                    text: v
                });
            });

            var cities = [];
            cities["CA"] = [];
            $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"], function(k, v) {
                cities["CA"].push({
                    id: v,
                    text: v
                });
            });
            cities["IN"] = [];
            $.each(["Delhi", "Mumbai", "Bangalore"], function(k, v) {
                cities["IN"].push({
                    id: v,
                    text: v
                });
            });
            cities["NL"] = [];
            $.each(["Amsterdam", "Rotterdam", "The Hague"], function(k, v) {
                cities["NL"].push({
                    id: v,
                    text: v
                });
            });
            cities["TR"] = [];
            $.each(["Ankara", "Istanbul", "Izmir"], function(k, v) {
                cities["TR"].push({
                    id: v,
                    text: v
                });
            });
            cities["US"] = [];
            $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"], function(k, v) {
                cities["US"].push({
                    id: v,
                    text: v
                });
            });

            var currentValue = "NL";
            $('#country').editable({
                type: 'select2',
                value: 'NL',
                //onblur:'ignore',
                source: countries,
                select2: {
                    'width': 140
                },
                success: function(response, newValue) {
                    if (currentValue == newValue) return;
                    currentValue = newValue;

                    var new_source = (!newValue || newValue == "") ? [] : cities[newValue];

                    //the destroy method is causing errors in x-editable v1.4.6+
                    //it worked fine in v1.4.5
                    /**			
                    $('#city').editable('destroy').editable({
                    	type: 'select2',
                    	source: new_source
                    }).editable('setValue', null);
                    */

                    //so we remove it altogether and create a new element
                    var city = $('#city').removeAttr('id').get(0);
                    $(city).clone().attr('id', 'city').text('Select City').editable({
                        type: 'select2',
                        value: null,
                        //onblur:'ignore',
                        source: new_source,
                        select2: {
                            'width': 140
                        }
                    }).insertAfter(city); //insert it after previous instance
                    $(city).remove(); //remove previous instance

                }
            });

            $('#city').editable({
                type: 'select2',
                value: 'Amsterdam',
                //onblur:'ignore',
                source: cities[currentValue],
                select2: {
                    'width': 140
                }
            });



            //custom date editable
            $('#signup').editable({
                type: 'adate',
                date: {
                    //datepicker plugin options
                    format: 'yyyy/mm/dd',
                    viewformat: 'yyyy/mm/dd',
                    weekStart: 1

                    //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
                    //,format: 'yyyy-mm-dd',
                    //viewformat: 'yyyy-mm-dd'
                }
            })

            $('#age').editable({
                type: 'spinner',
                name: 'age',
                spinner: {
                    min: 16,
                    max: 99,
                    step: 1,
                    on_sides: true
                    //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
                }
            });


            $('#login').editable({
                type: 'slider',
                name: 'login',

                slider: {
                    min: 1,
                    max: 50,
                    width: 100
                    //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
                },
                success: function(response, newValue) {
                    if (parseInt(newValue) == 1)
                        $(this).html(newValue + " hour ago");
                    else $(this).html(newValue + " hours ago");
                }
            });

            $('#about').editable({
                mode: 'inline',
                type: 'wysiwyg',
                name: 'about',

                wysiwyg: {
                    //css : {'max-width':'300px'}
                },
                success: function(response, newValue) {}
            });



            // *** editable avatar *** //
            try { //ie8 throws some harmless exceptions, so let's catch'em

                //first let's add a fake appendChild method for Image element for browsers that have a problem with this
                //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
                try {
                    document.createElement('IMG').appendChild(document.createElement('B'));
                } catch (e) {
                    Image.prototype.appendChild = function(el) {}
                }

                var last_gritter
                $('#avatar').editable({
                    type: 'image',
                    name: 'avatar',
                    value: null,
                    //onblur: 'ignore',  //don't reset or hide editable onblur?!
                    image: {
                        //specify ace file input plugin's options here
                        btn_choose: 'Change Avatar',
                        droppable: true,
                        maxSize: 110000, //~100Kb

                        //and a few extra ones here
                        name: 'avatar', //put the field name here as well, will be used inside the custom plugin
                        on_error: function(error_type) { //on_error function will be called when the selected file has a problem
                            if (last_gritter) $.gritter.remove(last_gritter);
                            if (error_type == 1) { //file format error
                                last_gritter = $.gritter.add({
                                    title: 'File is not an image!',
                                    text: 'Please choose a jpg|gif|png image!',
                                    class_name: 'gritter-error gritter-center'
                                });
                            } else if (error_type == 2) { //file size rror
                                last_gritter = $.gritter.add({
                                    title: 'File too big!',
                                    text: 'Image size should not exceed 100Kb!',
                                    class_name: 'gritter-error gritter-center'
                                });
                            } else { //other error
                            }
                        },
                        on_success: function() {
                            $.gritter.removeAll();
                        }
                    },
                    url: function(params) {
                        // ***UPDATE AVATAR HERE*** //
                        //for a working upload example you can replace the contents of this function with 
                        //examples/profile-avatar-update.js

                        var deferred = new $.Deferred

                        var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                        if (!value || value.length == 0) {
                            deferred.resolve();
                            return deferred.promise();
                        }


                        //dummy upload
                        setTimeout(function() {
                            if ("FileReader" in window) {
                                //for browsers that have a thumbnail of selected image
                                var thumb = $('#avatar').next().find('img').data('thumb');
                                if (thumb) $('#avatar').get(0).src = thumb;
                            }

                            deferred.resolve({
                                'status': 'OK'
                            });

                            if (last_gritter) $.gritter.remove(last_gritter);
                            last_gritter = $.gritter.add({
                                title: 'Avatar Updated!',
                                text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                class_name: 'gritter-info gritter-center'
                            });

                        }, parseInt(Math.random() * 800 + 800))

                        return deferred.promise();

                        // ***END OF UPDATE AVATAR HERE*** //
                    },

                    success: function(response, newValue) {}
                })
            } catch (e) {}

            /**
            //let's display edit mode by default?
            var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
            if(blank_image) {
            	$('#avatar').editable('show').on('hidden', function(e, reason) {
            		if(reason == 'onblur') {
            			$('#avatar').editable('show');
            			return;
            		}
            		$('#avatar').off('hidden');
            	})
            }
            */

            //another option is using modals
            $('#avatar2').on('click', function() {
                var modal =
                    '<div class="modal fade">\
					  <div class="modal-dialog">\
					   <div class="modal-content">\
						<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal">&times;</button>\
							<h4 class="blue">Change Avatar</h4>\
						</div>\
						\
						<form class="no-margin">\
						 <div class="modal-body">\
							<div class="space-4"></div>\
							<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
						 </div>\
						\
						 <div class="modal-footer center">\
							<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
							<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
						 </div>\
						</form>\
					  </div>\
					 </div>\
					</div>';


                var modal = $(modal);
                modal.modal("show").on("hidden", function() {
                    modal.remove();
                });

                var working = false;

                var form = modal.find('form:eq(0)');
                var file = form.find('input[type=file]').eq(0);
                file.ace_file_input({
                    style: 'well',
                    btn_choose: 'Click to choose new avatar',
                    btn_change: null,
                    no_icon: 'ace-icon fa fa-picture-o',
                    thumbnail: 'small',
                    before_remove: function() {
                        //don't remove/reset files while being uploaded
                        return !working;
                    },
                    allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                    allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                });

                form.on('submit', function() {
                    if (!file.data('ace_input_files')) return false;

                    file.ace_file_input('disable');
                    form.find('button').attr('disabled', 'disabled');
                    form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

                    var deferred = new $.Deferred;
                    working = true;
                    deferred.done(function() {
                        form.find('button').removeAttr('disabled');
                        form.find('input[type=file]').ace_file_input('enable');
                        form.find('.modal-body > :last-child').remove();

                        modal.modal("hide");

                        var thumb = file.next().find('img').data('thumb');
                        if (thumb) $('#avatar2').get(0).src = thumb;

                        working = false;
                    });


                    setTimeout(function() {
                        deferred.resolve();
                    }, parseInt(Math.random() * 800 + 800));

                    return false;
                });

            });



            //////////////////////////////
            $('#profile-feed-1').ace_scroll({
                height: '250px',
                mouseWheelLock: true,
                alwaysVisible: true
            });

            $('a[ data-original-title]').tooltip();

            $('.easy-pie-chart.percentage').each(function() {
                var barColor = $(this).data('color') || '#555';
                var trackColor = '#E2E2E2';
                var size = parseInt($(this).data('size')) || 72;
                $(this).easyPieChart({
                    barColor: barColor,
                    trackColor: trackColor,
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: parseInt(size / 10),
                    animate: false,
                    size: size
                }).css('color', barColor);
            });

            ///////////////////////////////////////////

            //right & left position
            //show the user info on right or left depending on its position
            $('#user-profile-2 .memberdiv').on('mouseenter touchstart', function() {
                var $this = $(this);
                var $parent = $this.closest('.tab-pane');

                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $this.offset();
                var w2 = $this.width();

                var place = 'left';
                if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) place = 'right';

                $this.find('.popover').removeClass('right left').addClass(place);
            }).on('click', function(e) {
                e.preventDefault();
            });


            ///////////////////////////////////////////
            $('#user-profile-3')
                .find('input[type=file]').ace_file_input({
                    style: 'well',
                    btn_choose: 'Change avatar',
                    btn_change: null,
                    no_icon: 'ace-icon fa fa-picture-o',
                    thumbnail: 'large',
                    droppable: true,

                    allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                    allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                })
                .end().find('button[type=reset]').on(ace.click_event, function() {
                    $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
                })
                .end().find('.date-picker').datepicker().next().on(ace.click_event, function() {
                    $(this).prev().focus();
                })
            $('.input-mask-phone').mask('(999) 999-9999');

            $('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{
                type: 'image',
                name: $('#avatar').attr('src')
            }]);


            ////////////////////
            //change profile
            $('[data-toggle="buttons"] .btn').on('click', function(e) {
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                $('.user-profile').parent().addClass('hide');
                $('#user-profile-' + which).parent().removeClass('hide');
            });



            /////////////////////////////////////
            $(document).one('ajaxloadstart.page', function(e) {
                //in ajax mode, remove remaining elements before leaving page
                try {
                    $('.editable').editable('destroy');
                } catch (e) {}
                $('[class*=select2]').remove();
            });
        });

    </script>
</body>

</html>
