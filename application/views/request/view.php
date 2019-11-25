<div class="container-fluid">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>DATA REQUEST<a href="<?= site_url('request-add'); ?>" class=" btn btn-xs btn-info pull-right">Tambah Data</a></h4>
                </div>
                <div class="block-content">
                    <table id="example" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Event</th>
                                <th>Dateline</th>
                                <th>Tanggal Dibuat</th>
                                <th>Keterangan</th>
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
                                    <td><?= $dt->nama_event ?></td>
                                    <td><?= date('d-m-Y', strtotime($dt->date_dateline)) ?></td>
                                    <td><?= $dt->date_created_request; ?></td>
                                    <td><?= $dt->keterangan; ?></td>
                                    <td>
                                        <a href="<?= site_url('request-edit/' . $dt->id_request) ?> " class="btn btn-xs btn-warning">edit</a>
                                        <a href="<?= site_url('request-delete/' . $dt->id_request) ?> " class="btn btn-xs btn-danger">delete</a>
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