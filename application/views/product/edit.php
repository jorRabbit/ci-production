<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>EDIT PRODUK</h4>
                </div>
                <?= $this->session->flashdata('notif'); ?>
                <?= form_open('product-edit', 'class="form-vertical"') ?>
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="form-group">
                                <label for="kdproduk">Kode Produk :</label>
                                <input type="text" class="form-control" id="kdproduk" name="kdproduk" value="<?= $data->kode_produk; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="namaproduk">Nama Produk :</label>
                                <input type="text" class="form-control" id="namaproduk" name="namaproduk" value="<?= $data->nama_produk; ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="<?= site_url('product'); ?>" type="submit" class="btn btn-warning">Back</a>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>

    </div>

</div>