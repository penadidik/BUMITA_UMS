<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>BUMTIA - UMSurakarta</title>

    <meta name="description" content="Website Monitoring dan Evaluasi Mahasiswa Penerima Beasiswa Universitas Muhammadiyah Surakarta">
    <meta name="keywords" content="UMS, Monev UMS, BUMITA, Beasiswa Unggulan, Muhammadiyah, Internasional, Tahfidz">
    <meta name="author" content="Universitas Muhammadiyah Surakarta">
    <link rel="icon" href="<?php echo base_url();?>assets/images/laman/logo-ums.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-part2.min.css" />
		<![endif]-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <img src="<?php echo base_url();?>assets/images/laman/logo-ums.png" width="20%">
                            <h1>
                                <span class="red">BUMITA</span>
                                <span class="" id="id-text2">UMSurakarta</span>
                            </h1>
                        </div>
                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                            Please Enter Your Information
                                        </h4>

                                        <div class="space-6"></div>

                                            
                                            <fieldset>
                                                <form action="<?php echo base_url('index.php/auth/aksi_login'); ?>" method="post">
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" name="username" class="form-control" placeholder="Username" />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" name="password" class="form-control" placeholder="Password" />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <div class="space"></div>

                                                <div class="clearfix">
                                                    <label class="inline">
                                                        <!--<input type="checkbox" class="ace" />
                                                        <span class="lbl"> Remember Me</span>-->
                                                        <?php if(isset($error_log)) { echo $error_log; }; ?>
                                                    </label>

                                                    <input type="submit" name="btn-login" id="btn-login" value="Login" class="width-35 pull-right btn btn-sm btn-primary">
                                                </div>

                                                <div class="space-4"></div>
                                                </form>
                                            </fieldset>
                                        

                                        <div class="social-or-login center">
                                            <span class="bigger-110">Support by</span>
                                        </div>

                                        <div class="space-6"></div>

                                        <div class="center">
                                            <a href="http://ums.ac.id" target="_blank" class="text text-primary label label-primary">Universitas Muhammadiyah Surakarta</a>
                                        </div>
                                    </div><!-- /.widget-main -->
                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->

                        </div><!-- /.position-relative -->
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
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

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible'); //hide others
                $(target).addClass('visible'); //show target
            });
        });



        //you don't need this, just used for changing background
        jQuery(function($) {
            $('#btn-login-dark').on('click', function(e) {
                $('body').attr('class', 'login-layout');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'blue');

                e.preventDefault();
            });
            $('#btn-login-light').on('click', function(e) {
                $('body').attr('class', 'login-layout light-login');
                $('#id-text2').attr('class', 'grey');
                $('#id-company-text').attr('class', 'blue');

                e.preventDefault();
            });
            $('#btn-login-blur').on('click', function(e) {
                $('body').attr('class', 'login-layout blur-login');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'light-blue');

                e.preventDefault();
            });

        });

    </script>
</body>

</html>
