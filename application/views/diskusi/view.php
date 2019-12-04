<div class="container-fluid">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>FORUM DISKUSI<a href="<?= site_url('diskusi'); ?>"></h4></a>
                </div>
                <div class="block-content">
                    <table id="example" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>

                                <th class="text-center">ID REQ</th>
                                <th class="text-center">Nama Produk</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Last Update</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = '';
                            foreach ($data as $dt) :
                                $i++; ?>
                                <tr>

                                    <td class="text-center"><?= $dt->id_request_child; ?></td>
                                    <td class="text-center"><?= $dt->nama_produk; ?></td>
                                    <td class="text-center"><?= $dt->status_diskusi; ?></td>
                                    <td class="text-center"><?= $dt->date_update_diskusi; ?></td>
                                    <td>
                                        <a href="<?= site_url('diskusi-show/' . $dt->id_diskusi); ?>" class="btn btn-xs btn-warning">Lihat</a>
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