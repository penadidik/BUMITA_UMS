<!DOCTYPE html>
<html>

<head>
    <title><?php foreach($halaman as $tampil){ echo $tampil->judul_halaman; } ?></title>
    <!-- for-mobile-apps -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Website Monitoring dan Evaluasi Mahasiswa Penerima Beasiswa Universitas Muhammadiyah Surakarta">
<meta name="keywords" content="UMS, Monev UMS, BUMITA, Beasiswa Unggulan, Muhammadiyah, Internasional, Tahfidz">
<meta name="author" content="Universitas MUhammadiyah Surakarta">
    <!-- //for-mobile-apps -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


    <link href="<?php echo base_url();?>assets/landing/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="icon" href="<?php echo base_url();?>assets/landing/images/<?php foreach($halaman as $tampil){ echo $tampil->logo; } ?>" type="image/x-icon" />

</head>

<body>
    <div class="content">
        <div class="main agile">
            <div class="w3-heading-top">
                <img src="<?php echo base_url();?>assets/images/laman/logo-ums.png" width="15%">
                <h3>Welcome to BUMITA UMSurakarta!</h3>
                <p class='label label-danger'>Untuk melewati halaman ini, silahkan klik <a href="<?php echo base_url();?>index.php/auth/login">Lewati</a></p>
            </div>
            <div class="clock w3agile">
                <div class="column days">
                    <div class="timer" id="days"></div>
                    <div class="text">DAYS</div>
                </div>

                <div class="column">
                    <div class="timer" id="hours"></div>
                    <div class="text">HOURS</div>
                </div>

                <div class="column">
                    <div class="timer" id="minutes"></div>
                    <div class="text">MINUTES</div>
                </div>

                <div class="column">
                    <div class="timer" id="seconds"></div>
                    <div class="text">SECONDS</div>
                </div>
            </div>
            <div class='clearfix'><h1>&nbsp;</h1></div>

            <!-- Custom-JavaScript-File-Links -->
            <script src="<?php echo base_url();?>assets/landing/js/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
            <script type="text/javascript" src="<?php echo base_url();?>assets/landing/js/moment.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>assets/landing/js/moment-timezone-with-data.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>assets/landing/js/timer.js"></script>
            <!-- //Custom-JavaScript-File-Links -->

        </div>

    </div>
    <p class="copy_rights">&copy; 2018 BUMITA <a href="http://ums.ac.id" target="_blank">UMSurakarta</a>. All Rights Reserved | Develop by <a href="http://lintaspena.net/" target="_blank" alt="Didik Maryono"> Lintaspena</a></p>
    </div>

</body>

</html>
