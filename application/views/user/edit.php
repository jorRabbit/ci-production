<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <span class="page-title red">
                <h3>User</h3>
            </span>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">Tambah User</div>
                <?= $this->session->flashdata('notif'); ?>
                <?= form_open('user-edit/' . $data->id_user, 'class="form-vertical"') ?>
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="namalengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap" value="<?= $data->nama_lengkap; ?>">
                                <div class="col-sm-6 text-danger">
                                    <i> <?= form_error('namalengkap'); ?></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= $data->username; ?>" readonly>
                                <div class="col-sm-3 text-danger">
                                    <i> <?= form_error('username'); ?></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" value="<?= $data->email; ?>" readonly>
                                <div class="col-sm-6 text-danger">
                                    <i> <?= form_error('email'); ?></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">

                                    <?php if ($data->status_aktif == 'Y') : ?>
                                        <option value="Y" selected>Aktif</option>
                                    <?php else : ?>
                                        <option value="Y">Aktif</option>
                                    <?php endif; ?>


                                    <?php if ($data->status_aktif == 'N') : ?>
                                        <option value="N" selected>Non Aktif</option>
                                    <?php else : ?>
                                        <option value="N">Non Aktif</option>
                                    <?php endif; ?>

                                </select>
                                <div class="col-sm-6 text-danger">
                                    <i> <?= form_error('status'); ?></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="level">level</label>
                                <select class="form-control" name="level" id="level">
                                    <?php
                                    foreach ($level as $level) {
                                        if ($level->kode_level == $data->kode_level) {
                                            ?>
                                            <option value="<?php echo $level->kode_level; ?>" selected>
                                                <?php echo $level->nama_level; ?>
                                            </option>
                                        <?php
                                            } else {
                                                ?>
                                            <option value="<?php echo $level->kode_level; ?>">
                                                <?php echo $level->nama_level; ?>
                                            </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="col-sm-6 text-danger">
                                    <i> <?= form_error('level'); ?></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datecreated">Date Created</label>
                                <input type="text" class="form-control" id="datecreated" name="datecreated" value="<?= date('d-M-Y h:i:s'); ?>" readonly>
                            </div>
                            <br>
                            <div class="form-group pull-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="submit" class="btn btn-warning">Back</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>

    </div>

</div>