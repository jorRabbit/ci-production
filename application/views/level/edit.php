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
                                        <input class="form-check-input" type="radio" name="userinsert" id="userinsert" value="Y" <?php if ($data->user_insert == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="userinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="userinsert" id="userinsert" value="N" <?php if ($data->user_insert == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="useredit" id="useredit" value="Y" <?php if ($data->user_edit == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="useredit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="useredit" id="useredit" value="N" <?php if ($data->user_edit == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="userdelete" id="userdelete" value="Y" <?php if ($data->user_delete == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="userdelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="userdelete" id="userdelete" value="N" <?php if ($data->user_delete == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="requestview" id="requestview" value="Y" <?php if ($data->request_view == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestview" id="requestview" value="N" <?php if ($data->request_view == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="requestinsert" id="requestinsert" value="Y" <?php if ($data->request_insert == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestinsert" id="requestinsert" value="N" <?php if ($data->request_insert == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="requestedit" id="requestedit" value="Y" <?php if ($data->request_edit == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestedit" id="requestedit" value="N" <?php if ($data->request_edit == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="requestdelete" id="requestdelete" value="Y" <?php if ($data->request_delete == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestdelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestdelete" id="requestdelete" value="N" <?php if ($data->request_delete == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="levelview" id="levelview" value="Y" <?php if ($data->level_view == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="levelview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="levelview" id="levelview" value="N" <?php if ($data->level_view == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="levelinsert" id="levelinsert" value="Y" <?php if ($data->level_insert == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="levelinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="levelinsert" id="levelinsert" value="N" <?php if ($data->level_insert == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="leveledit" id="leveledit" value="Y" <?php if ($data->level_edit == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="leveledit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="leveledit" id="leveledit" value="N" <?php if ($data->level_edit == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="leveldelete" id="leveldelete" value="Y" <?php if ($data->level_delete == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="leveldelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="leveldelete" id="leveldelete" value="N" <?php if ($data->level_delete == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="diskusiview" id="diskusiview" value="Y" <?php if ($data->diskusi_view == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusiview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusiview" id="diskusiview" value="N" <?php if ($data->diskusi_view == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="diskusiinsert" id="diskusiinsert" value="Y" <?php if ($data->diskusi_insert == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusiinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusiinsert" id="diskusiinsert" value="N" <?php if ($data->diskusi_insert == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="diskusiedit" id="diskusiedit" value="Y" <?php if ($data->diskusi_edit == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusiedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusiedit" id="diskusiedit" value="N" <?php if ($data->diskusi_edit == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="diskusidelete" id="diskusidelete" value="Y" <?php if ($data->diskusi_delete == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusidelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusidelete" id="diskusidelete" value="N" <?php if ($data->diskusi_delete == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="diskusichildview" id="diskusichildview" value="Y" <?php if ($data->diskusi_child_view == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichildview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusichildview" id="diskusichildview" value="N" <?php if ($data->diskusi_child_view == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="diskusichildinsert" id="diskusichildinsert" value="Y" <?php if ($data->diskusi_child_insert == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichildinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusichildinsert" id="diskusichildinsert" value="N" <?php if ($data->diskusi_child_insert == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="diskusichildedit" id="diskusichildedit" value="Y" <?php if ($data->diskusi_child_edit == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichildedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusichildedit" id="diskusichildedit" value="N" <?php if ($data->diskusi_child_edit == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="diskusichilddelete" id="diskusichilddelete" value="Y" <?php if ($data->diskusi_child_delete == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="diskusichilddelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="diskusichilddelete" id="diskusichilddelete" value="N" <?php if ($data->diskusi_child_delete == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="requestchildview" id="requestchildview" value="Y" <?php if ($data->request_child_view == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchildview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestchildview" id="requestchildview" value="N" <?php if ($data->request_child_view == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="requestchildinsert" id="requestchildinsert" value="Y" <?php if ($data->request_child_insert == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchildinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestchildinsert" id="requestchildinsert" value="N" <?php if ($data->request_child_insert == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="requestchildedit" id="requestchildedit" value="Y" <?php if ($data->request_child_edit == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchildedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestchildedit" id="requestchildedit" value="N" <?php if ($data->request_child_edit == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="requestchilddelete" id="requestchilddelete" value="Y" <?php if ($data->request_child_delete == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="requestchilddelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="requestchilddelete" id="requestchilddelete" value="N" <?php if ($data->request_child_delete == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="produkview" id="produkview" value="Y" <?php if ($data->produk_view == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="produkview" id="produkview" value="N" <?php if ($data->produk_view == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="produkinsert" id="produkinsert" value="Y" <?php if ($data->produk_insert == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="produkinsert" id="produkinsert" value="N" <?php if ($data->produk_insert == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="produkedit" id="produkedit" value="Y" <?php if ($data->produk_edit == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="produkedit" id="produkedit" value="N" <?php if ($data->produk_edit == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="produkdelete" id="produkdelete" value="Y" <?php if ($data->produk_delete == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="produkdelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="produkdelete" id="produkdelete" value="N" <?php if ($data->produk_delete == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="eventview" id="eventview" value="Y" <?php if ($data->event_view == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventview">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="eventview" id="eventview" value="N" <?php if ($data->event_view == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="eventinsert" id="eventinsert" value="Y" <?php if ($data->event_insert == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventinsert">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="eventinsert" id="eventinsert" value="N" <?php if ($data->event_insert == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="eventedit" id="eventedit" value="Y" <?php if ($data->event_edit == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventedit">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="eventedit" id="eventedit" value="N" <?php if ($data->event_edit == 'N') echo 'checked' ?> />
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
                                        <input class="form-check-input" type="radio" name="eventdelete" id="eventdelete" value="Y" <?php if ($data->event_delete == 'Y') echo 'checked' ?> />
                                        <label class="form-check-label" for="eventdelete">
                                            Yes
                                        </label>
                                        <input class="form-check-input" type="radio" name="eventdelete" id="eventdelete" value="N" <?php if ($data->event_delete == 'N') echo 'checked' ?> />
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