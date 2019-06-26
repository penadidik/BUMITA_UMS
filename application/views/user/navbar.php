<div id="navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="<?php echo base_url('index.php/dashboard/');?>" class="navbar-brand">
                <small>
                    BUMITA UMSurakarta
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" width='40px' height='40px' src="<?php echo base_url(); ?>assets/images/avatars/<?php foreach ($s as $key) { $foto=$key->foto; } if(!empty($foto)){ echo $foto; }else{ echo 'user.png';} ?>" alt="<?php foreach ($s as $key) {
                                echo $key->nama;
                            }; ?>" />
                        <span class="user-info">
                            <small>Welcome, </small>
                            <?php foreach ($s as $key) {
                                echo $key->nama;
                            }; ?>
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="<?php echo base_url('index.php/dashboard/profil');?>">
                                <i class="ace-icon fa fa-user"></i>
                                Profil
                            </a>
                        </li>

                        <li class="hidden">
                            <a href="#">
                                <i class="ace-icon fa fa-inbox"></i>
                                Pesan
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo base_url('index.php/auth/logout'); ?>">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
