<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>EDIT USER</h4>
                </div>
                <?= $this->session->flashdata('notif'); ?>
                <?= form_open('user-edit/' . $data->id_user, 'class="form-vertical"') ?>
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="namalengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap" value="<?= $data->nama_lengkap; ?>">
                                <i> <?= form_error('namalengkap', '<small class="text-danger pl-3">', '</small>'); ?></i>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= $data->username; ?>" readonly>

                                <i> <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?></i>

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" value="<?= $data->email; ?>" readonly>
                                <i> <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></i>
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
                                <i> <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?></i>
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
                                <i> <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?></i>
                            </div>

                            <div class="form-group">
                                <label for="datecreated">Date Created</label>
                                <input type="text" class="form-control" id="datecreated" name="datecreated" value="<?= date('d-M-Y h:i:s'); ?>" readonly>
                            </div>
                            <br>
                            <div class="form-group pull-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= site_url('user'); ?>" type="submit" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>

    </div>

</div>