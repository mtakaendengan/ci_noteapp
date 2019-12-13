<!-- Begin Page Content -->

<div class="container-fluid">



    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

    </div>



    <div class="row">



        <?= $this->session->flashdata('message'); ?>

        <!-- Earnings (Monthly) Card Example -->

        <div class=" col-lg-12">

            <div class="card border-left-primary shadow h-100 py-2">

                <div class="card-body">

                    <div class="text-center">

                        <img src="<?= base_url('assets/img/taspen_top.jpg') ?> " width="100" height="100">

                        <div class="text-left">

                            <hr>

                            <form action="<?php echo site_url('meeting/report') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group row">

                                    <label for="no_report" class="col-sm-2 col-form-label">Nomor Surat:</label>

                                    <div class="col-sm-4">

                                        <input type="text" class="form-control" id="no_report" name="no_report">

                                        <?= form_error('no_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                    <label for="id_user" class="col-sm-2 col-form-label">Notulis:</label>

                                    <div class="col-sm-4">

                                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $user['id_user'] ?>">

                                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['nm_user'] ?>" readonly>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="dy_report" class="col-sm-2 col-form-label">Hari</label>

                                    <div class="col-sm-4">

                                        <select name="dy_report" id="dy_report" class="form-control">

                                            <option value="">Select Day</option>

                                            <?php foreach ($reday as $rd) : ?>

                                                <option value="<?= $rd['id_day']; ?>"><?= $rd['nm_day']; ?></option>

                                            <?php endforeach;  ?>

                                        </select>

                                        <?= form_error('dy_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                    <label for="dy_report" class="col-sm-2 col-form-label">Tanggal</label>

                                    <div class="col-sm-4">

                                        <input type="date" class="form-control" id="dt_report" name="dt_report">

                                        <?= form_error('dt_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="pl_report" class="col-sm-2 col-form-label">Tempat</label>

                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" id="pl_report" name="pl_report">

                                        <?= form_error('pl_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="st_report" class="col-sm-2 col-form-label">Waktu Mulai</label>

                                    <div class="col-sm-4">

                                        <input type="time" class="form-control" id="st_report" name="st_report">

                                        <?= form_error('st_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                    <label for="fi_report" class="col-sm-2 col-form-label">Waktu Selesai</label>

                                    <div class="col-sm-4">

                                        <input type="time" class="form-control" id="fi_report" name="fi_report">

                                        <?= form_error('fi_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="mm_report" class="col-sm-2 col-form-label">Anggota Rapat</label>

                                    <div class="col-sm-4">

                                        <textarea class="form-control" id="mm_report" rows="3" name="mm_report" data-role="tagsinput" placeholder="Fill with 1. 2. 3. etc..."></textarea>

                                        <?= form_error('mm_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                    <label for="mt_report" class="col-sm-2 col-form-label">Jabatan</label>

                                    <div class="col-sm-4">

                                        <textarea class="form-control" id="mt_report" rows="3" name="mt_report" data-role="tagsinput" placeholder="Fill with 1. 2. 3. etc..."></textarea>

                                        <?= form_error('mt_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="ty_report" class="col-sm-2 col-form-label">Jenis Rapat</label>

                                    <div class="col-sm-10">

                                        <select name="ty_report" id="ty_report" class="form-control">

                                            <option value="">Select Meeting Type</option>

                                            <?php foreach ($retype as $rt) : ?>

                                                <option value="<?= $rt['id_type']; ?>"><?= $rt['ty_report']; ?></option>

                                            <?php endforeach;  ?>

                                        </select>

                                        <?= form_error('ty_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="nm_report" class="col-sm-2 col-form-label">Judul Rapat</label>

                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" id="nm_report" name="nm_report">

                                        <?= form_error('nm_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="ag_report" class="col-sm-2 col-form-label">Agenda Rapat</label>

                                    <div class="col-sm-10">

                                        <textarea class="form-control" id="ag_report" name="ag_report" rows="3"></textarea>

                                        <?= form_error('ag_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="rd_report" class="col-sm-2 col-form-label">Jalannya Rapat</label>

                                    <div class="col-sm-10">

                                        <textarea class="form-control" id="rd_report" name="rd_report" rows="5"></textarea>

                                        <?= form_error('rd_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="cn_report" class="col-sm-2 col-form-label">Kesimpulan Rapat</label>

                                    <div class="col-sm-10">

                                        <textarea class="form-control" id="cn_report" name="cn_report" rows="5"></textarea>

                                        <?= form_error('cn_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="dc_report" class="col-sm-2 col-form-label">Upload Dokumen</label>

                                    <div class="col-sm-10">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input" id="dc_report" name="dc_report">

                                            <label class="custom-file-label" for="dc_report">.pdf .docx</label>

                                        </div>

                                    </div>

                                    <?= form_error('dc_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>

                                <div class="form-group row">

                                    <label for="sn_report" class="col-sm-2 col-form-label">Upload Dokumen</label>

                                    <div class="col-sm-10">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input" id="sn_report" name="sn_report">

                                            <label class="custom-file-label" for="sn_report">.mp3 .wav</label>

                                        </div>

                                    </div>

                                    <?= form_error('sn_report', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>

                                <hr>

                                <!-- <div class="form-group row">

                                    <label for="id_rv" class="col-sm-2 col-form-label">Pilih Reviewer:</label>

                                    <div class="col-sm-10">

                                        <select name="id_rv" id="id_rv" class="form-control">

                                            <option value="">Select Meeting Type</option>

                                            <?php foreach ($userx as $rv) : ?>

                                                <option value="<?= $rv['id_user']; ?>"><?= $rv['nm_user']; ?></option>

                                            <?php endforeach;  ?>

                                        </select>

                                        <?= form_error('id_rv', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="id_av" class="col-sm-2 col-form-label">Pilih Approver:</label>

                                    <div class="col-sm-4">

                                        <input type="text" class="form-control" id="id_av" name="id_av" value="<?= $user['id_user'] ?>"><?= $user['nm_user'] ?>

                                    </div>

                                </div> -->

                                <div class="text-center">

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>

                            </form>

                            </hr>

                        </div>

                        <hr>

                        <img src="<?= base_url('assets/img/taspen_bot.jpg') ?> " width="250" height="50">

                    </div>

                </div>

            </div>

        </div>

    </div>



</div>

<!-- /.container-fluid -->



</div>

<!-- End of Main Content -->