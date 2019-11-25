<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="content-block">
                <div class="block-title">
                    <h4>EDIT LEVEL</h4>
                </div>
                <?= $this->session->flashdata('notif'); ?>
                <?= form_open('level-edit/' . $data->id_level, 'class="form-vertical"') ?>
                <div class="block-content">
                    <div class="form-group">
                        <label for="kodelevel">Kode Level</label>
                        <input type="text" class="form-control" id="kodelevel" name="kodelevel" placeholder="Masukan kode level" value="<?= $data->kode_level; ?>" readonly>
                        <i> <?= form_error('kodelevel', '<small class="text-danger pl-3">', '</small>'); ?></i>
                    </div>
                    <div class=" form-group">
                        <label for="namalevel">Nama Level</label>
                        <input type="text" class="form-control" id="namalevel" name="namalevel" placeholder="Masukan nama level" value="<?= $data->nama_level; ?>">
                        <i> <?= form_error('namalevel', '<small class="text-danger pl-3">', '</small>'); ?></i>
                    </div>

                    <div class=" form-group">
                        <label for="datecreated">Date Created</label>
                        <input type="text" class="form-control" id="datecreated" value="<?= date('d-M-Y h:i:s'); ?>" readonly>
                    </div>

                    <!-- User -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="userview">User View</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="userview" id="userview" value="Y" <?php if ($data->user_view == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="userview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="userview" id="userview" value="N" <?php if ($data->user_view == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="userview">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="userinsert">User Insert</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="userinsert" id="userinsert" value="Y" <?php if ($data->user_view == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="userinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="userinsert" id="userinsert" value="N" <?php if (($data->user_view == 'N')) echo 'checked' ?> />
                                        <label class="form-check-label" for="userinsert">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="useredit">User Edit</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="useredit" id="useredit" value="Y" <?php if (set_value('useredit') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="useredit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="useredit" id="useredit" value="N" checked <?php if (set_value('useredit') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="useredit">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="userdelete">User Delete</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="userdelete" id="userdelete" value="Y" <?php if (set_value('userdelete') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="userdelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="userdelete" id="userdelete" value="N" checked <?php if (set_value('userdelete') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="userdelete">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Request-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="requestview">Request View</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requestview" id="requestview" value="Y" <?php if (set_value('requestview') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestview" id="requestview" value="N" checked <?php if (set_value('requestview') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestview">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="requestinsert">Request Insert</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requestinsert" id="requestinsert" value="Y" <?php if (set_value('requestinsert') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestinsert" id="requestinsert" value="N" checked <?php if (set_value('requestinsert') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestinsert">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="requestedit">Request Edit</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requestedit" id="requestedit" value="Y" <?php if (set_value('requestedit') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestedit" id="requestedit" value="N" checked <?php if (set_value('requestedit') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestedit">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="requestdelete">Request Delete</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requestdelete" id="requestdelete" value="Y" <?php if (set_value('requestdelete') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestdelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestdelete" id="requestdelete" value="N" checked <?php if (set_value('requestdelete') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestdelete">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Level -->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="levelview">Level View</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="levelview" id="levelview" value="Y" <?php if (set_value('levelview') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="levelview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="levelview" id="levelview" value="N" checked <?php if (set_value('levelview') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="levelview">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="levelinsert">Level Insert</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="levelinsert" id="levelinsert" value="Y" <?php if (set_value('levelinsert') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="levelinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="levelinsert" id="levelinsert" value="N" checked <?php if (set_value('levelinsert') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="levelinsert">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="leveledit">Level Edit</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="leveledit" id="leveledit" value="Y" <?php if (set_value('leveledit') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="leveledit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="leveledit" id="leveledit" value="N" checked <?php if (set_value('leveledit') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="leveledit">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="leveldelete">Level Delete</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="leveldelete" id="leveldelete" value="Y" <?php if (set_value('leveldelete') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="leveldelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="leveldelete" id="leveldelete" value="N" checked <?php if (set_value('leveldelete') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="leveldelete">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Diskusi -->

                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="diskusiview">Diskusi View</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diskusiview" id="diskusiview" value="Y" <?php if (set_value('diskusiview') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusiview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusiview" id="diskusiview" value="N" checked <?php if (set_value('diskusiview') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusiview">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="diskusiinsert">Diskusi Insert</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diskusiinsert" id="diskusiinsert" value="Y" <?php if (set_value('diskusiinsert') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusiinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusiinsert" id="diskusiinsert" value="N" checked <?php if (set_value('diskusiinsert') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusiinsert">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="diskusiedit">Diskusi Edit</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diskusiedit" id="diskusiedit" value="Y" <?php if (set_value('diskusiedit') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusiedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusiedit" id="diskusiedit" value="N" checked <?php if (set_value('diskusiedit') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusiedit">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="diskusidelete">Diskusi Delete</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diskusidelete" id="diskusidelete" value="Y" <?php if (set_value('diskusidelete') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusidelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusidelete" id="diskusidelete" value="N" checked <?php if (set_value('diskusidelete') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusidelete">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Diskusi CHILD-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="diskusichildview">Diskusi Child View</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diskusichildview" id="diskusichildview" value="Y" <?php if (set_value('diskusichildview') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichildview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusichildview" id="diskusichildview" value="N" checked <?php if (set_value('diskusichildview') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichildview">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="diskusichildinsert">Diskusi Child Insert</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diskusichildinsert" id="diskusichildinsert" value="Y" <?php if (set_value('diskusichildinsert') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichildinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusichildinsert" id="diskusichildinsert" value="N" checked <?php if (set_value('diskusichildinsert') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichildinsert">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="diskusichildedit">Diskusi Child Edit</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diskusichildedit" id="diskusichildedit" value="Y" <?php if (set_value('diskusichildedit') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichildedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusichildedit" id="diskusichildedit" value="N" checked <?php if (set_value('diskusichildedit') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichildedit">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="diskusichilddelete">Diskusi Child Delete</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diskusichilddelete" id="diskusichilddelete" value="Y" <?php if (set_value('diskusichilddelete') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichilddelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusichilddelete" id="diskusichilddelete" value="N" checked <?php if (set_value('diskusichilddelete') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichilddelete">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Request CHILD-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="requestchildview">Request Child View</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requestchildview" id="requestchildview" value="Y" <?php if (set_value('diskusichildview') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchildview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestchildview" id="requestchildview" value="N" checked <?php if (set_value('diskusichildview') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchildview">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="requestchildinsert">Request Child Insert</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requestchildinsert" id="requestchildinsert" value="Y" <?php if (set_value('requestchildinsert') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchildinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestchildinsert" id="requestchildinsert" value="N" checked <?php if (set_value('requestchildinsert') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchildinsert">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="requestchildedit">Request Child Edit</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requestchildedit" id="requestchildedit" value="Y" <?php if (set_value('requestchildedit') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchildedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestchildedit" id="requestchildedit" value="N" checked <?php if (set_value('requestchildedit') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchildedit">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="requestchilddelete">Request Child Delete</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="requestchilddelete" id="requestchilddelete" value="Y" <?php if (set_value('requestchilddelete') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchilddelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestchilddelete" id="requestchilddelete" value="N" checked <?php if (set_value('requestchilddelete') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchilddelete">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Produk-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="produkview">Produk View</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="produkview" id="produkview" value="Y" <?php if (set_value('produkview') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="produkview" id="produkview" value="N" checked <?php if (set_value('produkview') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkview">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="produkinsert">Produk Insert</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="produkinsert" id="produkinsert" value="Y" <?php if (set_value('produkinsert') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="produkinsert" id="produkinsert" value="N" checked <?php if (set_value('produkinsert') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkinsert">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="produkedit">Produk Edit</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="produkedit" id="produkedit" value="Y" <?php if (set_value('produkedit') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="produkedit" id="produkedit" value="N" checked <?php if (set_value('produkedit') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkedit">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="produkdelete">Produk Delete</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="produkdelete" id="produkdelete" value="Y" <?php if (set_value('produkdelete') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkdelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="produkdelete" id="produkdelete" value="N" checked <?php if (set_value('produkdelete') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkdelete">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Event-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="eventview">Event View</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="eventview" id="eventview" value="Y" <?php if (set_value('eventview') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="eventview" id="eventview" value="N" checked <?php if (set_value('eventview') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventview">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="eventinsert">Event Insert</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="eventinsert" id="eventinsert" value="Y" <?php if (set_value('eventinsert') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="eventinsert" id="eventinsert" value="N" checked <?php if (set_value('eventinsert') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventinsert">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="eventedit">Event Edit</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="eventedit" id="eventedit" value="Y" <?php if (set_value('eventedit') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="eventedit" id="eventedit" value="N" checked <?php if (set_value('eventedit') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventedit">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label for="eventdelete">Event Delete</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="eventdelete" id="eventdelete" value="Y" <?php if (set_value('eventdelete') == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventdelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="eventdelete" id="eventdelete" value="N" checked <?php if (set_value('eventdelete') == 'N') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventdelete">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pull-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= site_url('level'); ?>" type="submit" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>