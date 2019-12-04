<div class="container-fluid">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
        <div class="col-xs-12">
            <span class="page-title">
                <h4>Panel</h4>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <?= $data->kode_produk; ?>
                    <hr />
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
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <button class="btn btn-info btn-sm">
                                            Tambah
                                            +
                                        </button>
                                    </a>

                                </h3>
                            </div>
                        </div>

                        <div class="panel-collapse collapse" id="collapseOne">
                            <div class="panel-body">
                                <?= form_open('diskusi-add/' . $data->id_request_child . '/' . $data->id_request, 'class="form-vertical"') ?>
                                <div class="block-content">

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="idreqchild" name="idreqchild" placeHolder="Enter Text" value="<?= $data->id_request_child; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeHolder="Enter Text">
                                    </div>
                                    <div class="form-group">
                                        <label for="komentar">Komentar</label>
                                        <textarea class="form-control" id="komentar" name="komentar" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" class="form-control" placeHolder="Enter Text">
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
            </div>
        </div>
    </div>
</div>