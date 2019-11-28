<div class="container-fluid">

    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>DATA USER
                        <a href="<?= site_url('user-add'); ?>" class=" btn btn-xs btn-info pull-right">Tambah Data</a></h4>
                </div>

                <div class="block-content">
                    <table id="example" class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-justifly">Nama Lengkap</th>
                                <th class="text-justifly">username</th>
                                <th class="text-center">Level</th>
                                <th class="text-center">Aktif</th>
                                <th class="text-justifly">email</th>
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
                                    <td class="text-justifly"><?= $dt->nama_lengkap; ?></td>
                                    <td class="text-justifly"><?= $dt->username; ?></td>
                                    <td class="text-center"><?= $dt->kode_level; ?></td>
                                    <td class="text-center"><?= $dt->status_aktif; ?></td>
                                    <td class="text-justifly"><?= $dt->email; ?></td>
                                    <td>
                                        <a href="<?= site_url('user-edit/' . $dt->id_user) ?> " class="btn btn-xs btn-warning">edit</a>
                                        <a href="<?= site_url('user-delete/' . $dt->id_user) ?> " class="btn btn-xs btn-danger">delete</a>
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