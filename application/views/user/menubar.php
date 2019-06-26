<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {}

    </script>



    <ul class="nav nav-list">
        <li class="">
            <a href="<?php echo base_url('index.php/dashboard/');?>">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Beranda </span>
            </a>

            <b class="arrow"></b>
        </li>


        <li class="">
            <a href="<?php echo base_url('index.php/dashboard/akademik/');?>">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Data Akademik </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Data Organisasi </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="<?php echo base_url('index.php/dashboard/kepengurusan/');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        SK Kepengurusan 
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
            <!--<ul class="submenu">
                <li class="">
                    <a href="<?php echo base_url('index.php/dashboard/keaktifan/');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Surat Keterangan Aktif
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>-->
            <ul class="submenu">
                <li class="">
                    <a href="<?php echo base_url('index.php/dashboard/portofolio/');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Portofolio Kegiatan
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        
        <!--<li class="">
            <a href="<?php echo base_url('index.php/dashboard/dokumentasi');?>" >
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text">Dokumentasi </span>
            </a>
        </li>-->

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-print"></i>
                <span class="menu-text">Print </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <!--<li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Data Diri
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Laporan Akademik
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Laporan Organisasi
                    </a>

                    <b class="arrow"></b>
                </li>-->
                <li class="">
                    <a href="<?php echo base_url('index.php/dashboard/laporan');?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Laporan Akhir
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
