<div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
            <span class="bigger-120">
                <span class="blue bolder"> <?php foreach($halaman as $tampil){ echo $tampil->copyright." ".$tampil->instansi; } ?></span>
                Application &copy; <?php foreach($halaman as $tampil){ echo $tampil->tahun; } ?>
            </span>

            &nbsp; &nbsp;
            <span class="action-buttons">
                <a href="#">
                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                </a>

                <a href="#">
                    <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                </a>

                <a href="#">
                    <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                </a>
            </span>
        </div>
    </div>
</div>
