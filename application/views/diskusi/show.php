<div class="container-fluid">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
        <div class="col-xs-12">
            <span class="page-title">
                <h4>PANEL DISKUSI</h4>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php foreach (showreqchild($data->id_request) as $rqc) : ?>
                        <?php if (validdiskusichild($data->id_request_child)) : ?>
                            <?= $rqc->kode_produk; ?>
                            <hr />
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="text-right">
                                <h3 class="panel-title">

                                    <?php if ($data->status_diskusi == 'W') : ?>
                                        <a class="accordion-toggle" href="<?= site_url('diskusi-done/' . $data->id_diskusi); ?>">
                                            <button class="btn btn-info btn-sm">
                                                Done
                                            </button>
                                        </a>
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <button class="btn btn-success btn-sm">
                                                Tambah
                                                +
                                            </button>
                                        </a>
                                    <?php else : ?>
                                        <i class="fa fa-check"></i>
                                        Done |
                                        <button class="accordion-toggle" href="<?= site_url('diskusi-done/' . $data->id_diskusi); ?>">
                                            <button class="btn btn-warning btn-sm">
                                                Approved
                                            </button>
                                        </button>
                                    <?php endif; ?>

                                </h3>
                            </div>
                        </div>

                        <div class="panel-collapse collapse" id="collapseOne">
                            <div class="panel-body">
                                <?= form_open('diskusi-show/' . $data->id_diskusi, 'enctype="multipart/form-data" , class="form-vertical"') ?>
                                <div class="block-content">

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="idreqchild" name="idreqchild" placeHolder="Enter Text" value="<?= $data->id_request_child; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeHolder="Masukan Subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="komentar">Komentar</label>
                                        <textarea class="form-control" id="komentar" name="komentar" rows="3" placeholder="Masukan Komentar"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Foto</label>
                                        <input type="file" class="form-control" id="gambar" name="gambar" />

                                    </div>
                                </div>

                                <div class="block-footer">
                                    <div class="form-group pull-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($datachild as $datachild) :
                    $code = loginAs($datachild->id_user_create_diskusi_child)->kode_level;
                    if ($code == 'ADM') {
                        $colour = 'info';
                    } elseif ($code == 'PRD') {
                        $colour = 'primary';
                    } else {
                        $colour = 'success';
                    }
                    ?>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="panel panel-<?= $colour; ?>">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?= loginAs($datachild->id_user_create_diskusi_child)->username ?>
                                    <i> as <?= loginAs($datachild->id_user_create_diskusi_child)->nama_level ?></i>
                                    <i class="pull-right"><?= $datachild->date_created_diskusi_child; ?></i>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <i><?= $datachild->subject; ?></i>
                                </p>
                                <p>
                                    <?= $datachild->komentar; ?>
                                </p>
                                <p>
                                    <a href="<?= base_url('assets/images/images-diskusi/' . $datachild->photo_diskusi_child); ?>" target="_blank">
                                        <img src="<?= base_url('assets/images/images-diskusi/' . $datachild->photo_diskusi_child); ?>" width="20px" width="20px">
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


        </div>



    </div>
</div>