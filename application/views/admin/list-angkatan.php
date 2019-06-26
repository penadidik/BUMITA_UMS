<div class="widget-box transparent" id="recent-box">
    <div class="widget-header">
        <h4 class="widget-title lighter smaller">
            <i class="ace-icon fa fa-rss orange"></i>Daftar Angkatan
        </h4>
    </div>

    <div class="widget-body">
        <div class="widget-main">
            <div class="">
                <?php foreach($angkatan as $show){ ?>
                <div class="itemdiv memberdiv col-sm-3 col-xs-12">
                    <div class="user">
                        <img alt="<?php echo $show->keterangan; ?>" src="<?php echo base_url();?>assets/images/avatars/avatar2.png" />
                    </div>

                    <div class="body">
                        <div class="name">
                            <a href="#">
                                <?php echo $show->keterangan; ?></a>
                        </div>

                        <div class="time">
                            <i class="ace-icon fa fa-clock-o"></i>
                            <span class="green">20 mahasiswa</span>
                        </div>

                        <div>
                            <span class="label label-success label-sm">aktif</span>

                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    <li>
                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                            <span class="green">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                            <span class="orange">
                                                <i class="ace-icon fa fa-times bigger-110"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                            <span class="red">
                                                <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div><!-- /.widget-box -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <!-- PAGE CONTENT ENDS -->
</div><!-- /.row -->
