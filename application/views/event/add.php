<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>TAMBAH EVENT</h4>
                </div>
                <?= $this->session->flashdata('notif'); ?>
                <?= form_open('event-add', 'class="form-vertical"') ?>
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="kdevent">Kode Event</label>
                                <input type="text" class="form-control" id="kdevent" name="kdevent" placeholder="Masukan Kode Event" value="<?= set_value('kdevent'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="namaevent">Nama Event</label>
                                <input type="text" class="form-control" id="namaevent" name="namaevent" placeholder="Masukan Nama Event" value="<?= set_value('namaevent'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="picevent">PIC Event</label>
                                <input type="text" class="form-control" id="picevent" name="picevent" placeholder="Masukan PIC Event" value="<?= set_value('picevent'); ?>">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- Tanggal Picker -->
                            <div class="form-group">
                                <label>Tanggal Mulai:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control datepicker" name="dstartevent" data-date-format="dd-mm-yyyy" required="required" value="<?= set_value('dstartevent') ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Selesai:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control datepicker" name="dendevent" data-date-format="dd-mm-yyyy" required="required" value="<?= set_value('dendevent') ?>">
                                </div>
                            </div>
                            <!-- Akhir Tanggal Picker -->

                            <div class="form-group">
                                <label for="dcreated">Date Created</label>
                                <input type="text" class="form-control" id="dcreated" name="dcreated" value="<?= date('d-M-Y h:i:s'); ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="<?= site_url('event'); ?>" type="submit" class="btn btn-warning">Back</a>
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