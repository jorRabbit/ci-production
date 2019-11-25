<div class="container-fluid">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>DATA LEVEL<a href="<?= site_url('level-add'); ?>" class=" btn btn-xs btn-info pull-right">Tambah Data</a></h4>
                </div>
                <div class="block-content">
                    <table id="example" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Level Kode</th>
                                <th>Level</th>
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
                                    <td><?= $dt->kode_level ?></td>
                                    <td><?= $dt->nama_level; ?></td>
                                    <td><?= $dt->date_created_level; ?></td>
                                    <td>
                                        <a href="<?= site_url('level-edit/' . $dt->id_level) ?> " class="btn btn-xs btn-warning">edit</a>
                                        <a href="<?= site_url('level-delete/' . $dt->id_level) ?> " class="btn btn-xs btn-danger">delete</a>
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