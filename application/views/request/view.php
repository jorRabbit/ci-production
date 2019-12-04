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
                                <th class="text-justifly">Nama Event</th>
                                <th class="text-center">Deadline</th>
                                <th class="text-center">Tanggal Dibuat</th>
                                <th class="text-center">Status REQUEST</th>
                                <th class="text-center">Keterangan</th>
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
                                    <td class="text-justifly"><?= $dt->nama_event ?></td>
                                    <td class="text-center"><?= date('d-m-Y', strtotime($dt->date_dateline)) ?></td>
                                    <td class="text-center"><?= $dt->date_created_request; ?></td>
                                    <td class="text-center"><?= $dt->status_request; ?></td>
                                    <td class="text-center"><?= $dt->keterangan; ?></td>
                                    <td class="text-center">
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