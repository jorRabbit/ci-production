<div class="container-fluid">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>DATA EVENT<a href="<?= site_url('event-add'); ?>" class=" btn btn-xs btn-info pull-right">Tambah Data</a></h4>
                </div>
                <div class="block-content">
                    <table id="example" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Event Kode</th>
                                <th>Nama Event</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>PIC</th>
                                <th>Date Created</th>
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
                                    <td><?= $dt->kode_event ?></td>
                                    <td><?= $dt->nama_event; ?></td>
                                    <td><?= $dt->date_start_event; ?></td>
                                    <td><?= $dt->date_end_event; ?></td>
                                    <td><?= $dt->pic_event; ?></td>
                                    <td><?= $dt->date_created; ?></td>
                                    <td>
                                        <a href="<?= site_url('event-edit/' . $dt->id_event) ?> " class="btn btn-xs btn-warning">edit</a>
                                        <a href="<?= site_url('event-delete/' . $dt->id_event) ?> " class="btn btn-xs btn-danger">delete</a>
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