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
                        
                        <h1>
                            Laporan Akhir
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                 Mahasiswa a.n. <?php foreach ($s as $key) { echo $key->nama; }; ?>
                            </small>
                        </h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="widget-box transparent">
                                <div class="widget-header widget-header-large">
                                    <h3 class="widget-title grey lighter">
                                        <img src="<?php echo base_url(); ?>assets/images/laman/logo-ums.png" width="3%">
                                        BUMITA UMSurakarta
                                    </h3>

                                    <div class="widget-toolbar no-border invoice-info">
                                        <span class="invoice-info-label">Online Report:</span>
                                        <span class="red">#<?php echo date('djy'); ?></span>

                                        <br />
                                        <span class="invoice-info-label">Date:</span>
                                        <span class="blue">
                                            <?php echo date("d F Y"); ?></span>
                                    </div>

                                    <div class="widget-toolbar hidden-480">
                                        <a href="#">
                                            <i class="ace-icon fa fa-print"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main padding-24">
                                        <form class="form-horizontal" action="<?php echo base_url().'index.php/dashboard/laporan_akhir'?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Semester</label>
                                                    <div class="col-xs-8">
                                                        <select name="semester" class="form-control" placeholder='Semester'>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-xs-3">Tahun Ajaran</label>
                                                    <div class="col-xs-8">
                                                        <select name="tahun" class="form-control" placeholder='Tahun Ajaran'>
                                                            <option value="2018/2019">2018/2019</option>
                                                            <option value="2018/2019">2019/2020</option>
                                                            <option value="2018/2019">2020/2021</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-4 pull-right">
                                                        <input type="reset" name="reset" value="Reset" class="btn btn-danger">
                                                        <button class="btn btn-primary">Tampilkan</button>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
