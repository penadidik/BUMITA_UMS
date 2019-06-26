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
                            Data Portofolio Kegiatan
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                Mahasiswa a.n.
                                <?php foreach ($s as $key) { echo $key->nama; }; ?>
                            </small>
                        </h1>

                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class=""><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Tambah Data</a></div>
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
                                                    <th>Kegiatan</th>
                                                    <th>Lokasi dan Waktu</th>
                                                    <th>Ortom</th>
                                                    <th>Deskripsi</th>
                                                    <th>Keterangan</th>

                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($portofolio as $show) {?>
                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <?php echo $show->nama_keg; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $show->tgl_keg; ?><br>
                                                        <?php echo $show->lokasi; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $show->ortom_peny; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $show->deskripsi_keg; ?>
                                                    </td>

                                                    <td>
                                                        Semester:
                                                        <?php echo $show->semester; ?><br>
                                                        Tahun Ajaran:
                                                        <?php echo $show->TA; ?>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a href="" class="green" data-toggle="modal" data-target="#edit_<?php echo $show->kode_keg; ?>">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#" data-toggle="modal" data-target="#hapus_<?php echo $show->kode_keg; ?>">
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
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-toggle="modal" data-target="#edit_<?php echo $show->kode_keg; ?>">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-toggle="modal" data-target="#hapus_<?php echo $show->kode_keg; ?>">
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

        <!-- ============ MODAL INPUT =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Portofolio Mahasiswa a.n. <strong>
                                <?php foreach ($s as $key) { echo $key->nama; }; ?>
                        </h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/dashboard/tambah_portofolio'?>">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Kode Kegiatan</label>
                                <div class="col-xs-8">
                                    <input name="nim" value="<?php foreach ($s as $key) { echo $key->nim; }; ?>" class="hidden" type="text">
                                    <input name="kode_keg" class="form-control" type="text" placeholder="Kode Kegiatan Otomatis" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Kegiatan</label>
                                <div class="col-xs-8">
                                    <input name="nama_keg" class="form-control" type="text" placeholder="Nama Kegiatan..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tanggal Kegiatan</label>
                                <div class="col-xs-8">
                                    <input name="tgl_keg" class="form-control" type="date" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Semester</label>
                                <div class="col-xs-8">
                                    <select name="semester" class="form-control" required>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                        <option value='6'>6</option>
                                        <option value='7'>7</option>
                                        <option value='8'>8</option>
                                        <option value='9'>9</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tahun Akademik</label>
                                <div class="col-xs-8">
                                    <select name="tahun" class="form-control" required>
                                        <?php foreach ($th as $key) { ?>
                                        <option value='<?php echo $key->tahun; ?>'>
                                            <?php echo $key->tahun; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Lokasi</label>
                                <div class="col-xs-8">
                                    <input name="lokasi" class="form-control" type="text" placeholder="Lokasi Kegiatan..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Ortom Penyelenggara</label>
                                <div class="col-xs-8">
                                    <select name="ortom_penye" class="form-control" required>
                                        <option value='Muhammadiyah'>Muhammadiyah</option>
                                        <option value='Aisyiyah'>Aisyiyah</option>
                                        <option value='Pemuda Muhammadiyah'>Pemuda Muhammadiyah</option>
                                        <option value='Nasyiatul Aisyiyah'>Nasyiatul Aisyiyah</option>
                                        <option value='Tapak Suci Putera Muhammadiyah'>Tapak Suci Putera Muhammadiyah</option>
                                        <option value='Hizbul Wathan'>Hizbul Wathan</option>
                                        <option value='Ikatan Mahasiswa Muhammadiyah'>Ikatan Mahasiswa Muhammadiyah</option>
                                        <option value='Ikatan Pelajar Muhammadiyah'>Ikatan Pelajar Muhammadiyah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Deskripsi Kegiatan</label>
                                <div class="col-xs-8">
                                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Kegiatan..." required></textarea>
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
        <!--END MODAL INPUT-->

        <!-- ============ MODAL EDIT =============== -->
        <?php foreach($portofolio as $edit):
            $id=$edit->kode_keg;
            $semester=$edit->semester;
            $TA=$edit->TA;
            $nama_keg=$edit->nama_keg;
            $tgl_keg=$edit->tgl_keg;
            $lokasi=$edit->lokasi;
            $ortom=$edit->ortom_peny;
            $deskripsi=$edit->deskripsi_keg;
        ?>
        <div class="modal fade" id="edit_<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Portofolio Mahasiswa a.n. <strong>
                                <?php foreach ($s as $key) { echo $key->nama; }; ?>
                        </h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/dashboard/edit_portofolio'?>">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Kode Kegiatan</label>
                                <div class="col-xs-8">
                                    <input name="nim" value="<?php foreach ($s as $key) { echo $key->nim; }; ?>" class="hidden" type="text">
                                    <input name="kode_keg" class="form-control" type="text" value="<?php echo $id; ?>" placeholder="Kode Kegiatan Otomatis" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Kegiatan</label>
                                <div class="col-xs-8">
                                    <input name="nama_keg" class="form-control" type="text" value="<?php echo $nama_keg; ?>" placeholder="Nama Kegiatan..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tanggal Kegiatan</label>
                                <div class="col-xs-8">
                                    <input name="tgl_keg" class="form-control" type="date" value="<?php echo $tgl_keg; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Semester</label>
                                <div class="col-xs-8">
                                    <select name="semester" class="form-control" required>
                                        <?php if(!empty($semester)){?>
                                        <option selected class='label label-success' value='<?php echo $semester; ?>'>
                                            <?php echo $semester; ?>
                                        </option>
                                        <?php } ?>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                        <option value='6'>6</option>
                                        <option value='7'>7</option>
                                        <option value='8'>8</option>
                                        <option value='9'>9</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Tahun Akademik</label>
                                <div class="col-xs-8">
                                    <select name="tahun" class="form-control" required>
                                        <?php if(!empty($TA)){?>
                                        <option selected class='label label-success' value='<?php echo $TA; ?>'>
                                            <?php echo $TA; ?>
                                        </option>
                                        <?php } ?>
                                        <?php foreach ($th as $key) { ?>
                                        <option value='<?php echo $key->tahun; ?>'>
                                            <?php echo $key->tahun; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-xs-3">Lokasi</label>
                                <div class="col-xs-8">
                                    <input name="lokasi" class="form-control" type="text" value="<?php echo $lokasi; ?>" placeholder="Lokasi Kegiatan..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Ortom Penyelenggara</label>
                                <div class="col-xs-8">
                                    <select name="ortom_penye" class="form-control" required>
                                        <?php if(!empty($ortom)){ ?>
                                        <option class='label label-success' value='<?php echo $ortom;?>'>
                                            <?php echo $ortom;?>
                                        </option>
                                        <?php } ?>
                                        <option value='Muhammadiyah'>Muhammadiyah</option>
                                        <option value='Aisyiyah'>Aisyiyah</option>
                                        <option value='Pemuda Muhammadiyah'>Pemuda Muhammadiyah</option>
                                        <option value='Nasyiatul Aisyiyah'>Nasyiatul Aisyiyah</option>
                                        <option value='Tapak Suci Putera Muhammadiyah'>Tapak Suci Putera Muhammadiyah</option>
                                        <option value='Hizbul Wathan'>Hizbul Wathan</option>
                                        <option value='Ikatan Mahasiswa Muhammadiyah'>Ikatan Mahasiswa Muhammadiyah</option>
                                        <option value='Ikatan Pelajar Muhammadiyah'>Ikatan Pelajar Muhammadiyah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Deskripsi Kegiatan</label>
                                <div class="col-xs-8">
                                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Kegiatan..." required> <?php echo $deskripsi; ?></textarea>
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
        <?php endforeach;?>
        <!--END MODAL INPUT-->

        <!-- Modal Hapus-->
        <?php foreach($portofolio as $edit):
            $id=$edit->kode_keg;
        ?>
        <div id="hapus_<?php echo $id; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Apakah Anda akan menghapus Data Portofolio Mahasiswa a.n. <strong>
                                <?php foreach ($s as $key) { echo $key->nama; }; ?>?</strong></h4>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/dashboard/hapus_portofolio'?>">
                        <input name="kode_keg" value="<?php echo $id;?>" class="hidden" type="text">
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                            <button class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                    //"sAjaxSource": "http://127.0.0.1/table.php"   ,

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
