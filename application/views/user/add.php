<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>TAMBAH USER</h4>
                </div>
                <?= $this->session->flashdata('notif'); ?>
                <?= form_open('user-add', 'class="form-vertical"') ?>
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="namalengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap" value="<?= set_value('namalengkap'); ?>">
                                <i> <?= form_error('namalengkap', '<small class="text-danger pl-3">', '</small>'); ?></i>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username'); ?>">
                                <i> <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?></i>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" value="<?= set_value('email'); ?>">
                                <i> <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></i>
                            </div>
                            <div class="form-group">
                                <label for="datecreated">Date Created</label>
                                <input type="text" class="form-control" id="datecreated" name="datecreated" value="<?= date('d-M-Y h:i:s'); ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="Y">Aktif</option>
                                    <option value="N">Non Aktif</option>
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
                                        if ($level->kode_level == set_value('level')) {
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
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
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