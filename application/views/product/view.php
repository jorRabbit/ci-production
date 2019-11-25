<div class="container-fluid">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>DATA PRODUK<a href="<?= site_url('product-add'); ?>" class=" btn btn-xs btn-info pull-right">Tambah Data</h4></a>
                </div>
                <div class="block-content">
                    <table id="example" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = '';
                            foreach ($data as $dt) :
                                $i++; ?>
                                <tr>
                                    <td class="text-center"><?= $i; ?> </td>
                                    <td><?= $dt->kode_produk ?></td>
                                    <td><?= $dt->nama_produk; ?></td>
                                    <td>
                                        <a href="<?= site_url('product-edit/' . $dt->id_produk) ?> " class="btn btn-xs btn-warning">edit</a>
                                        <a href="<?= site_url('product-delete/' . $dt->id_produk) ?> " class="btn btn-xs btn-danger">delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>