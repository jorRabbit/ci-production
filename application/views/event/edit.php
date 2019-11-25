<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>EDIT EVENT</h4>
                </div>
                <?= $this->session->flashdata('notif'); ?>
                <?= form_open('event-edit', 'class="form-vertical"') ?>
                <div class="block-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="kdevent">Kode Event</label>
                                <input type="text" class="form-control" id="kdevent" name="kdevent" placeholder="Masukan Kode Event" value="<?= $data->kode_event; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="namaevent">Nama Event</label>
                                <input type="text" class="form-control" id="namaevent" name="namaevent" placeholder="Masukan Nama Event" value="<?= $data->nama_event; ?>">
                            </div>
                            <div class="form-group">
                                <label for="picevent">PIC Event</label>
                                <input type="text" class="form-control" id="picevent" name="picevent" placeholder="Masukan PIC Event" value="<?= $data->pic_event; ?>">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                                <label for="ducreated">Date Update</label>
                                <input type="text" class="form-control" id="ducreated" name="ducreated" value="<?= date('d-M-Y h:i:s'); ?>" readonly>
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