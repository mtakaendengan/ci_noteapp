<?php

function tanggal_indo($tanggal, $cetak_hari = false)

{

    $hari = array(

        1 =>    'Senin',

        'Selasa',

        'Rabu',

        'Kamis',

        'Jumat',

        'Sabtu',

        'Minggu'

    );



    $bulan = array(

        1 =>   'Januari',

        'Februari',

        'Maret',

        'April',

        'Mei',

        'Juni',

        'Juli',

        'Agustus',

        'September',

        'Oktober',

        'November',

        'Desember'

    );

    $split       = explode('-', $tanggal);

    $tgl_indo = $split[2] . ' ' . $bulan[(int) $split[1]] . ' ' . $split[0];



    if ($cetak_hari) {

        $num = date('N', strtotime($tanggal));

        return $hari[$num] . ', ' . $tgl_indo;

    }

    return $tgl_indo;

}



?>



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

            <div class="card border-left-warning shadow h-100 py-2">

                <div class="card-body">

                    <div class="text-center">

                        <img src="<?= base_url('assets/img/taspen_top.jpg') ?> " width="100" height="100">

                        <div class="text-left">

                            <hr>

                            <form action="<?php echo site_url('meeting/archive') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group row">

                                    <label for="no_report" class="col-sm-2 col-form-label">Nomor Surat:</label>

                                    <div class="col-sm-4">

                                        <label for="" class="col-form-label"><?= $idrep['no_report']  ?></label>

                                    </div>

                                    <label for="id_user" class="col-sm-2 col-form-label">Notulis:</label>

                                    <div class="col-sm-4">

                                        <label for="" class="col-form-label"><?= $idrep['nm_user']  ?></label>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="dy_report" class="col-sm-2 col-form-label">Hari</label>

                                    <div class="col-sm-4">

                                        <label for="" class="col-form-label"><?= $idrep['nm_day']  ?></label>

                                    </div>

                                    <label for="dy_report" class="col-sm-2 col-form-label">Tanggal</label>

                                    <div class="col-sm-4">

                                        <label for="" class="col-form-label"><?= tanggal_indo($idrep['dt_report'])  ?></label>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="pl_report" class="col-sm-2 col-form-label">Tempat</label>

                                    <div class="col-sm-10">

                                        <label for="" class="col-form-label"><?= $idrep['pl_report']  ?></label>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="st_report" class="col-sm-2 col-form-label">Waktu Mulai</label>

                                    <div class="col-sm-4">

                                        <label for="" class="col-form-label"><?= $idrep['st_report']  ?></label>

                                    </div>

                                    <label for="fi_report" class="col-sm-2 col-form-label">Waktu Selesai</label>

                                    <div class="col-sm-4">

                                        <label for="" class="col-form-label"><?= $idrep['fi_report']  ?></label>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="mm_report" class="col-sm-2 col-form-label">Anggota Rapat</label>

                                    <div class="col-sm-4">

                                        <label for="" class="col-form-label">

                                            <?php

                                            $str = $idrep['mm_report'];

                                            $exploded = preg_split('/[0-9]+\./', $str);

                                            foreach ($exploded as $index => $answer) {

                                                if (!empty($answer)) {

                                                    echo $index . ". " . $answer . "<br />";

                                                }

                                            }

                                            ?>

                                        </label>

                                    </div>

                                    <label for="mm_report" class="col-sm-2 col-form-label">Jabatan Anggota</label>

                                    <div class="col-sm-4">

                                        <label for="" class="col-form-label">

                                            <?php

                                            $str = $idrep['mt_report'];

                                            $exploded = preg_split('/[0-9]+\./', $str);

                                            foreach ($exploded as $index => $answer) {

                                                if (!empty($answer)) {

                                                    echo   "(" . $answer . ")" . "<br />";

                                                }

                                            }

                                            ?>

                                        </label>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="ty_report" class="col-sm-2 col-form-label">Jenis Rapat</label>

                                    <div class="col-sm-10">

                                        <label for="" class="col-form-label"><?= $idrep['ty_report']  ?></label>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="nm_report" class="col-sm-2 col-form-label">Judul Rapat</label>

                                    <div class="col-sm-10">

                                        <label for="" class="col-form-label"><?= $idrep['nm_report']  ?></label>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="ag_report" class="col-sm-2 col-form-label">Agenda Rapat</label>

                                    <div class="col-sm-10">

                                        <label for="" class="col-form-label"><?= $idrep['ag_report']  ?></label>

                                    </div>

                                </div>

                                 <div class="form-group row">

                                    <label for="rd_report" class="col-sm-2 col-form-label">Jalannya Rapat</label>

                                    <div class="col-sm-10">

                                        <label for="" class="col-form-label"><?= $idrep['rd_report']  ?></label>

                                    </div>

                                </div>

                                 <div class="form-group row">

                                    <label for="cn_report" class="col-sm-2 col-form-label">Kesimpulan Rapat</label>

                                    <div class="col-sm-10">

                                         <label for="" class="col-form-label">

                                            <?php

                                            $str = $idrep['cn_report'];

                                            $exploded = preg_split('/[0-9]+\./', $str);

                                            foreach ($exploded as $index => $answer) {

                                                if (!empty($answer)) {

                                                    echo   "(" . $answer . ")" . "<br />";

                                                }

                                            }

                                            ?>

                                        </label>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="dc_report" class="col-sm-2 col-form-label">Unduh Dokumen PDF</label>

                                    <div class="col-sm-1">

                                        <a href="<?= site_url("meeting/downloaddc/" . $idrep['id_report']); ?>" class="btn btn-primary btn-circle btn-sm "> <i class="fas fa-download"></i></a>

                                    </div>

                                    <div class="col-sm-2">

                                        <label for="" class="col-form-label"><?= $idrep['dc_report']  ?></label>

                                    </div>                                  

                                </div>

                                <div class="form-group row">

                                    <label for="sn_report" class="col-sm-2 col-form-label">Unduh Dokumen Suara</label>
                                     
                                     <div class="col-sm-1">

                                        <a href="<?= site_url("meeting/downloadsn/" . $idrep['id_report']); ?>" class="btn btn-primary btn-circle btn-sm "> <i class="fas fa-download"></i></a>

                                    </div>

                                    <div class="col-sm-2">

                                        <label for="" class="col-form-label"><?= $idrep['sn_report']  ?></label>

                                    </div>
                                                 
                                </div>

                                <hr>

                                <?php if ($user['cd_rv'] == 1 and $user['cd_av'] == 1) : ?>

                                    <div class="form-group row">

                                        <label for="id_rv" class="col-sm-2 col-form-label">Status Review:</label>

                                        <div class="col-sm-1">

                                            <?php if ($idrep['rv_report'] == 2) : ?>

                                                <td>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_review']; ?>

                                                    </span>

                                                </td>

                                            <?php else : ?>

                                                <td>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_review']; ?>

                                                    </span>

                                                </td>

                                            <?php endif  ?>

                                        </div>

                                        <div class="col-sm-4">

                                            <?php if ($idrep['rv_report'] == 2) : ?>

                                                <span>

                                                    <a href="<?= site_url("meeting/updateReview/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Review?');" class="btn btn-warning btn-circle btn-sm"> <i class="fas fa-check"></i></a>

                                                </span>

                                            <?php else : ?>

                                                <span>

                                                    <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                </span>

                                            <?php endif  ?>

                                        </div>

                                    </div>

                                    <?php if ($idrep['rv_report'] == 1) : ?>

                                        <div class="form-group row">

                                            <label for="accapv" class="col-sm-2 col-form-label">Status Approve:</label>

                                            <div class="col-sm-1">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php else : ?>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                            <div class="col-sm-4">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span>

                                                        <a href="<?= site_url("meeting/updateApprove/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Approve?');" class="btn btn-warning btn-circle btn-sm"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php else : ?>

                                                    <span>

                                                        <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                        </div>

                                    <?php else : ?>

                                        <div class="form-group row">

                                            <label for="accapv" class="col-sm-2 col-form-label">Status Approve:</label>

                                            <div class="col-sm-1">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php else : ?>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                            <div class="col-sm-4">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span>

                                                        <a href="<?= site_url("meeting/updateApprove/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Approve?');" class="btn btn-warning btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php else : ?>

                                                    <span>

                                                        <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                        </div>

                                    <?php endif ?>

                                <?php elseif ($user['cd_rv'] == 0 and $user['cd_av'] == 1) : ?>

                                    <?php if ($idrep['rv_report'] == 1) : ?>

                                        <div class="form-group row">

                                            <label for="accapv" class="col-sm-2 col-form-label">Status Review:</label>

                                            <div class="col-sm-1">

                                                <?php if ($idrep['rv_report'] == 2) : ?>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_review']; ?>

                                                    </span>

                                                <?php else : ?>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_review']; ?>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                            <div class="col-sm-4">

                                                <?php if ($idrep['rv_report'] == 2) : ?>

                                                    <span>

                                                        <a href="<?= site_url("meeting/updateApprove/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Approve?');" class="btn btn-warning btn-circle btn-sm"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php else : ?>

                                                    <span>

                                                        <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="accapv" class="col-sm-2 col-form-label">Status Approve:</label>

                                            <div class="col-sm-1">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php else : ?>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                            <div class="col-sm-4">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span>

                                                        <a href="<?= site_url("meeting/updateApprove/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Approve?');" class="btn btn-warning btn-circle btn-sm"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php else : ?>

                                                    <span>

                                                        <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                        </div>

                                    <?php else :  ?>

                                        <div class="form-group row">

                                            <label for="accapv" class="col-sm-2 col-form-label">Status Review:</label>

                                            <div class="col-sm-1">

                                                <?php if ($idrep['rv_report'] == 2) : ?>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php else : ?>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                            <div class="col-sm-4">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span>

                                                        <a href="<?= site_url("meeting/updateApprove/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Approve?');" class="btn btn-warning btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php else : ?>

                                                    <span>

                                                        <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="accapv" class="col-sm-2 col-form-label">Status Approve:</label>

                                            <div class="col-sm-1">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php else : ?>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                            <div class="col-sm-4">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span>

                                                        <a href="<?= site_url("meeting/updateApprove/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Approve?');" class="btn btn-warning btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php else : ?>

                                                    <span>

                                                        <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                        </div>

                                    <?php endif  ?>

                                <?php elseif ($user['cd_rv'] == 0 and $user['cd_av'] == 0) : ?>

                                    <?php if ($idrep['rv_report'] == 1) : ?>

                                        <div class="form-group row">

                                            <label for="accapv" class="col-sm-2 col-form-label">Status Approve:</label>

                                            <div class="col-sm-1">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php else : ?>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                            <div class="col-sm-4">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span>

                                                        <a href="<?= site_url("meeting/updateApprove/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Approve?');" class="btn btn-warning btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php else : ?>

                                                    <span>

                                                        <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                        </div>

                                    <?php else :  ?>

                                        <div class="form-group row">

                                            <label for="accapv" class="col-sm-2 col-form-label">Status Review:</label>

                                            <div class="col-sm-1">

                                                <?php if ($idrep['rv_report'] == 2) : ?>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php else : ?>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                            <div class="col-sm-4">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span>

                                                        <a href="<?= site_url("meeting/updateApprove/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Approve?');" class="btn btn-warning btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php else : ?>

                                                    <span>

                                                        <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                        </div>

                                        <div class="form-group row">

                                            <label for="accapv" class="col-sm-2 col-form-label">Status Approve:</label>

                                            <div class="col-sm-1">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span class="badge badge-danger">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php else : ?>

                                                    <span class="badge badge-success">

                                                        <?= $idrep['st_approve']; ?>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                            <div class="col-sm-4">

                                                <?php if ($idrep['av_report'] == 2) : ?>

                                                    <span>

                                                        <a href="<?= site_url("meeting/updateApprove/" . $idrep['id_report']); ?>" onclick="return confirm('Confirm Approve?');" class="btn btn-warning btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php else : ?>

                                                    <span>

                                                        <a class="btn btn-success btn-circle btn-sm disabled"> <i class="fas fa-check"></i></a>

                                                    </span>

                                                <?php endif  ?>

                                            </div>

                                        </div>

                                    <?php endif  ?>

                                <?php endif  ?>

                                </hr>

                                <hr>

                                <!-- <div class="form-group row">

                                    <label for="id_rv" class="col-sm-2 col-form-label">Reviewer:</label>

                                    <div class="col-sm-1">

                                        <?= $id1 = $user['cd_rv'] ?>

                                        <?= $id1 = $user['nm_user'] ?>

                                        <?= $id2 = $user['cd_av'] ?>



                                    </div>

                                </div> -->

                                <div class="form-group row">

                                    <label for="id_rv" class="col-sm-2 col-form-label">Cetak Report:</label>

                                    <div class="col-sm-1">

                                        <?php if ($idrep['rv_report'] == 1 and $idrep['av_report'] == 1) : ?>

                                            <a href="<?= site_url("meeting/printreport/" . $idrep['id_report']); ?>" class="btn btn-primary btn-circle btn-sm " target="_blank"> <i class="fas fa-print"></i></a>

                                        <?php else : ?>

                                            <a href="<?= site_url("meeting/printreport/" . $idrep['id_report']); ?>" class="btn btn-primary btn-circle btn-sm disabled" target="_blank"> <i class="fas fa-print"></i></a>

                                        <?php endif ?>

                                    </div>

                                </div>

                                </hr>

                                <hr>

                                <div class="text-center">

                                    <button type="submit" class="btn btn-warning">Back</button>

                                </div>

                                </hr>

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



<!-- onclick="return confirm('Confirm Review?');" -->