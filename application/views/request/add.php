<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>REQUEST</h4>
                </div>
                <?= $this->session->flashdata('notif'); ?>
                <?= form_open('request-add', 'class="form-vertical"') ?>
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="level">EVEN ID</label>
                                <select class="form-control" name="idevent" id="idevent">
                                    <?php
                                    foreach ($idevent as $idevent) {
                                        if ($idevent->id_event == set_value('idevent')) {
                                            ?>
                                            <option value="<?php echo $idevent->id_event; ?>" selected>
                                                <?php echo $idevent->kode_event; ?>
                                            </option>
                                        <?php
                                            } else {
                                                ?>
                                            <option value="<?php echo $idevent->id_event; ?>">
                                                <?php echo $idevent->kode_event; ?>
                                            </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <i> <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?></i>
                            </div>
                            <div class="form-group">
                                <label for="dcrequest">Tanggal Dibuat :</label>
                                <input type="text" class="form-control" id="dcrequest" name="dcrequest" value="<?= date('d-M-Y h:i:s'); ?>" readonly>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Dateline</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control datepicker" name="ddateline" data-date-format="dd-mm-yyyy" required="required" value="<?= set_value('ddateline') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= set_value('keterangan') ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table id="example" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = '';
                                    foreach ($kdproduk as $kdproduk) :
                                        $i++; ?>
                                        <tr>
                                            <td class="text-center">
                                                <label>
                                                    <input name="kdproduk[]" value="1" class="ace ace-checkbox-2" type="checkbox" <?php if (set_value('kdproduk[]')) echo 'checked' ?> />
                                                </label>
                                            </td>
                                            <td><?= $kdproduk->kode_produk ?></td>
                                            <td><?= $kdproduk->nama_produk; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="block-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="<?= site_url('request'); ?>" type="submit" class="btn btn-warning">Back</a>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>

    </div>

</div>


<script>
    jQuery(function($) {

        $('.datepicker').datepicker({
            daysOfWeekHighlighted: "6,0",
            startDate: "-3m",
            daysOfWeekDisabled: "6,0",
            daysOfWeekHighlighted: "6,0",
            orientation: "bottom auto",
            autoclose: true
        });
    })
</script>