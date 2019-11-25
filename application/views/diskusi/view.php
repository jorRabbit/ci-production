<div class="container-fluid">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>FORUM DISKUSI<a href="<?= site_url('diskusi'); ?>" class=" btn btn-xs btn-info pull-right">Tambah Data</h4></a>
                </div>
                <div class="block-content">
                    <table id="example" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>ID REQ</th>
                                <th>Nama Produk</th>
                                <th>Status</th>
                                <th>Last Update</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = '';
                            foreach ($data as $dt) :
                                $i++; ?>
                                <tr>
                                    <td class="text-center"> </td>
                                    <td><?= $dt->id_request_child; ?></td>
                                    <td><?= $dt->nama_produk; ?></td>
                                    <td><?= $dt->status_diskusi; ?></td>
                                    <td><?= $dt->date_update_diskusi; ?></td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-warning">Lihat</a>
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