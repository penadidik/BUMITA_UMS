<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {}

    </script>



    <ul class="nav nav-list">
        <li class="">
            <a href="<?php echo base_url('control'); ?>">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Beranda </span>
            </a>

            <b class="arrow"></b>
        </li>



        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Data Mahasiswa </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="<?php echo base_url('control/data_mahasiswa'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Semua Angkatan
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php foreach($angkatan as $show){ ?>
                <li class="">
                    <a href="<?php echo base_url(); ?>control/data_mahasiswa_angkatan/<?php echo $show->tahun; ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <?php echo $show->keterangan; ?>
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php } ?>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Data Akademik </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="<?php echo base_url('control/data_akademik'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Semua Angkatan
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php foreach($angkatan as $show){ ?>
                <li class="">
                    <a href="<?php echo base_url(); ?>control/data_akademik_angkatan/<?php echo $show->tahun; ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <?php echo $show->keterangan; ?>
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php } ?>
            </ul>
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
                    <a href="<?php echo base_url('control/data_organisasi'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Semua Angkatan
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php foreach($angkatan as $show){ ?>
                <li class="">
                    <a href="<?php echo base_url(); ?>control/data_organisasi_angkatan/<?php echo $show->tahun; ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <?php echo $show->keterangan; ?>
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php } ?>
            </ul>
        </li>
        
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Data Portofolio </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="<?php echo base_url('control/data_kegiatan'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Semua Angkatan
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php foreach($angkatan as $show){ ?>
                <li class="">
                    <a href="<?php echo base_url(); ?>control/data_kegiatan_angkatan/<?php echo $show->tahun; ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <?php echo $show->keterangan; ?>
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php } ?>
            </ul>
        </li>

        <li class="hidden">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text">Catatan Reviewer </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <li class="">
                    <a href="<?php echo base_url('control/catatan'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Semua Angkatan
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php foreach($angkatan as $show){ ?>
                <li class="">
                    <a href="<?php echo base_url(); ?>control/data_catatan_angkatan/<?php echo $show->tahun; ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        <?php echo $show->keterangan; ?>
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php } ?>
            </ul>
        </li>
        <li class="hidden">
            <a href="#" class="">
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text">Dokumentasi </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="<?php echo base_url('control/informasi'); ?>" class="">
                <i class="menu-icon fa  fa-exclamation-circle"></i>
                <span class="menu-text">Informasi </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-book"></i>
                <span class="menu-text">Laporan </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <li class="">
                    <a href="<?php echo base_url('control/laporanmhs'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Laporan Data Mahasiswa
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="<?php echo base_url('control/laporanakademik'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Laporan Akademik
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="<?php echo base_url('control/laporanorganisasi'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Laporan Organisasi
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="<?php echo base_url('control/laporannilai'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Laporan Nilai
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-cogs"></i>
                <span class="menu-text">Pengaturan </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <!-- <li class="">
                    <a href="<?php echo base_url('control/halaman'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Halaman
                    </a>

                    <b class="arrow"></b>
                </li> -->
                <li class="">
                    <a href="<?php echo base_url('control/angkatan'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Data Angkatan
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="<?php echo base_url('control/usercontrol'); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Administrator
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
