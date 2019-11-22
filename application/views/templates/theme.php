<!DOCTYPE html>
<html>

<head>
    <title>Flat Admin - Bootstrap Themes</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/theme.css">

    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/main.js"></script>

</head>

<body class="flat-blue sidebar-collapse">
    <?php $this->load->view('templates/sidebar'); ?>
    <div class="content-container">

        <?php $this->load->view('templates/navbar'); ?>
        <?php $this->load->view($content); ?>
    </div>

    <footer class="footer">
        <span><i class="fa fa-copyright"></i> Tui2Tone Labs, 2015</span>
    </footer>
    <script type="text/javascript">
        $(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>