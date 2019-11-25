<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>

            <i class="ace-icon fa fa-check green"></i>

            Hello
            <strong class="green">
                <?= loginAs($_SESSION['userId'])->username ?>
                <small>(<?= loginAs($_SESSION['userId'])->nama_lengkap ?>)</small>
            </strong>,
            Welcome to AMS Production!
        </div>
    </div>
</div>