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
                        <?php foreach($organisasi as $show){$ket=$show->file_SK;} if(!empty($ket)){ $i='';}else{$i='hidden';} ?>
                        <button class="btn btn-sm btn-primary pull-right <?php echo $i; ?>" onclick="window.print();">Print</button>
                        <button class="btn btn-sm btn-danger pull-right" onclick="history.go(-1);">Back</button>
                        
                        <h1>
                            Laporan Akhir
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                Mahasiswa a.n.
                                <?php foreach ($s as $key) { echo $key->nama; }; ?>
                            </small>
                        </h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="space-6"></div>

                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="widget-box transparent">
                                        <div class="widget-header widget-header-large">
                                            <h3 class="widget-title grey lighter">
                                                <img src="<?php echo base_url(); ?>assets/images/laman/logo-ums.png" width="3%">
                                                BUMITA UMSurakarta
                                            </h3>

                                            <div class="widget-toolbar no-border invoice-info">
                                                <span class="invoice-iprnfo-label">Online Report:</span>
                                                <span class="red">#121212</span>

                                                <br />
                                                <span class="invoice-info-label">Date:</span>
                                                <span class="blue">
                                                    <?php echo date("d F Y"); ?></span>
                                            </div>

                                            <div class="widget-toolbar hidden-480">
                                                <a href="">
                                                    <i class="ace-icon fa fa-print"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main padding-24">
                                                <div class="row">
                                                    <div class="col-sm-12 page-header">
                                                        <div class="col-sm-3"><img src="" width="10%"></div>
                                                        <div class="col-sm-12">
                                                            <h1 class='center'>
                                                                <?php foreach ($s as $key) { echo $key->nama; }; ?> (
                                                                <?php foreach ($s as $key) { echo $key->nim; }; ?>)</h1>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space"></div>
                                                
                                                <div class="row">
                                                <div class="col-sm-6 col-xs-6">
                                                    <div class="row">
                                                        <div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
                                                            <b>Data Mahasiswa</b>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="profile-user-info">

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Tanggal Lahir </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo $key->tp_lahir; }; ?></span>
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo date('d F Y',strtotime($key->tg_lahir)); }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Jenis Kelamin </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo $key->jenkel; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> No. Telp </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo $key->notelp; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Email </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo $key->email; }; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Alamat </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo $key->alamat; }; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.col -->

                                                <div class="col-sm-6 col-xs-6">
                                                    <div class="row">
                                                        <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                                            <b>Data Beasiswa</b>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="profile-user-info">

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> No. MoU </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo $key->nomorMoU; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Tanggal MoU </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo date('d F Y',strtotime($key->tglMoU)); }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Jurusan </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo $key->jurusan; }; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Fakultas </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo $key->fakultas; }; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Angkatan </div>

                                                                <div class="profile-info-value">
                                                                    <span>
                                                                        <?php foreach ($s as $key) { echo $key->angkatan; }; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->

                                        <div class="hr hr8 hr-double hr-dotted"></div>

                                        <div>
                                            <div>
                                                <div class="col-xs-12 label label-lg label-primary">
                                                    <b>Laporan Akademik Semester
                                                        <?php foreach ($akademik as $key) { echo $key->semester; }; ?> Tahun Ajaran
                                                        <?php foreach ($akademik as $key) { echo $key->TA; }; ?></b> <i>(dilampiri fotokopi KHS dan Transkip)</i>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-bordered center">
                                                <thead class="center">
                                                    <tr>
                                                        <th class="center">Indeks Prestasi Semester</th>
                                                        <th class="center">Indeks Prestasi Komulatif</th>
                                                        <th class="center">Tanda Tangan Validasi (BAA)</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h1>
                                                                <?php foreach ($akademik as $key) { echo $key->ips; }; ?>
                                                            </h1>
                                                        </td>
                                                        <td>
                                                            <h1>
                                                                <?php foreach ($akademik as $key) { echo $key->ipk; }; ?>
                                                            </h1>
                                                        </td>
                                                        <td>
                                                            <table align="center">
                                                                <tr>
                                                                    <td>
                                                                        <h2>&nbsp;</h2>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><small><i>
                                                                                <center style='color:grey;'>(nama terang, tanda tangan dan stempel)
                                                                            </i></small></td>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="hr hr8 hr-double hr-dotted"></div>

                                        <div>
                                            <div>
                                                <div class="col-xs-12 label label-lg label-success">
                                                    <b>Laporan Portofolio Semester
                                                        <?php foreach ($akademik as $key) { echo $key->semester; }; ?> Tahun Ajaran
                                                        <?php foreach ($akademik as $key) { echo $key->TA; }; ?></b> <i>(dilampiri fotokopi SK Kepengurusan)</i>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-bordered center">
                                                <thead class="center">
                                                    <tr>
                                                        <th class="center">Keterangan</th>
                                                        <th class="center">Tanda Tangan Validasi (Ortom)</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr align="left">
                                                        <td width="65%">
                                                            Telah mengikuti Organisasi Muhammadiyah dengan Ortom <strong>
                                                                <?php foreach ($organisasi as $key) { $nama=$key->nama_organisasi; } if(!empty($nama)){ echo $nama;}else{echo '________________';}  ?> </strong> sebagai <strong>
                                                                <?php foreach ($organisasi as $key) { $jab=$key->jabatan; } if(!empty($jab)){ echo $jab;}else{echo '________________';}  ?></strong> dengan nomor SK <strong>
                                                                <?php foreach ($organisasi as $key) { $nomor=$key->nomorSK; } if(!empty($nomor)){ echo $nomor;}else{echo '________________';}  ?></strong>. (<strong><i>
                                                                    <?php foreach ($organisasi as $key) { $sk=$key->file_SK; } if(!empty($sk)){ echo 'SK telah terunggah';}else{echo 'SK belum terunggah';}  ?></i></strong>)
                                                        </td>
                                                        <td width="35%">
                                                            <table align="center">
                                                                <tr>
                                                                    <td>
                                                                        <h2>&nbsp;</h2>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><small><i>
                                                                                <center style='color:grey;'>(nama terang, tanda tangan dan stempel)
                                                                            </i></small></td>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php foreach ($portofolio as $key) { ?>
                                                    <tr align="left">
                                                        <td>
                                                            <table align="left" class="left table">
                                                                <tr>
                                                                    <td>Nama Kegiatan</td>
                                                                    <td>:</td>
                                                                    <td><i>
                                                                            <?php $nama=$key->nama_keg; if(!empty($nama)){ echo $nama;}else{echo 'empty';}  ?></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Kegiatan</td>
                                                                    <td>:</td>
                                                                    <td><i>
                                                                            <?php $tgl=$key->tgl_keg; if(!empty($tgl)){ echo date('d F Y',strtotime($tgl));}else{echo 'empty';}  ?></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ortom Penyelenggara</td>
                                                                    <td>:</td>
                                                                    <td><i>
                                                                            <?php $ortom=$key->ortom_peny; if(!empty($ortom)){ echo $ortom;}else{echo 'empty';}  ?></i></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <table align="center">
                                                                <tr>
                                                                    <td>
                                                                        <h1>&nbsp;</h1>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><br><small><i>
                                                                                <center style='color:grey;'>(nama terang, tanda tangan dan stempel)
                                                                            </i></small></td>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr height="100px">
                                                        <td align="left" colspan="2">
                                                            <table align="left">
                                                                <tr>
                                                                    <td>Deskripsi Kegiatan:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i>
                                                                            <?php $des=$key->deskripsi_keg; if(!empty($des)){ echo $des;}else{echo 'empty';}  ?></i></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php }  ?>
                                                    <tr align="left">
                                                        <td colspan='2'>
                                                            <strong>Catatan dari Reviewer:</strong>
                                                            <p><i><?php foreach($score as $show){echo $show->keterangan;} ?></i></p>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 pull-right">
                                                <p align="right">Surakarta,
                                                    <?php echo date("d F Y");?>
                                                </p>
                                            </div>
                                            <div class="col-sm-12 col-xs-12 center">
                                                <div class="col-sm-4 col-xs-4">
                                                    <div class="col-sm-12 col-xs-12">Mengetahui,<br>Kaur Monev LPPIK UMS<br><br><br><br><br><strong>Yayuli, S.Ag.,M.PI</strong></div>
                                                </div>
                                                <div class="col-sm-4 col-xs-4">
                                                    <div class="col-sm-12"><br>Reviewer<br><br><br><br><br><strong>Tri Santoso, S.Pd.,M.Pd</strong></div>
                                                </div>
                                                <div class="col-sm-4 col-xs-4">
                                                    <div class="col-sm-12"><br>Mahasiswa bersangkutan<br><br><br><br><br><strong>
                                                            <?php foreach ($s as $key) { echo $key->nama; }; ?></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

    <!-- ace scripts -->
    <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
</body>

</html>
