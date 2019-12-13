<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <h6 class="m-0 font-weight-bold text-primary"><?= $title  ?> Table</h6>
        </div>
        <div class="card-body border-left-primary shadow h-100 ">
            <div class="table-responsive">
                <a href="<?= base_url('meeting/report'); ?>" class="btn btn-primary mb-3"> Add New Report</a>
                <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">No. Report</th>
                            <th scope="col">Writer Code</th>
                            <th scope="col">Day</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time Begin</th>
                            <th scope="col">Time End</th>
                            <th scope="col">Meeting Place</th>
                            <th scope="col">Board Member</th>
                            <th scope="col">Meeting Type</th>
                            <th scope="col">Meeting Name</th>
                            <th scope="col">Meeting Agenda</th>
                            <th scope="col">File Document</th>
                            <th scope="col">File Sound</th>
                            <th scope="col">Review Status</th>
                            <th scope="col">Approve Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($redel as $rd) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $rd['no_report']; ?></td>
                                <td><?= $rd['nm_user']; ?></td>
                                <td><?= $rd['nm_day']; ?></td>
                                <td><?= $rd['dt_report']; ?></td>
                                <td><?= $rd['st_report']; ?></td>
                                <td><?= $rd['fi_report']; ?></td>
                                <td><?= $rd['pl_report']; ?></td>
                                <td><?php
                                        $str = $rd['mm_report'];
                                        $exploded = preg_split('/[0-9]+\./', $str);
                                        foreach ($exploded as $index => $answer) {
                                            if (!empty($answer)) {
                                                echo $index . ". " . $answer . "<br />";
                                            }
                                        }
                                        ?>
                                </td>
                                <td><?= $rd['ty_report']; ?></td>
                                <td><?= $rd['nm_report']; ?></td>
                                <td><?= $rd['ag_report']; ?></td>
                               <!-- <td><?= $rd['dc_report']; ?></td> -->
                                <!-- <td><?= $rd['sn_report']; ?></td> -->
                                <?php if ($rd['rv_report'] == 2) : ?>
                                    <td>
                                        <span class="badge badge-danger">
                                            <?= $rd['st_review']; ?>
                                        </span>
                                    </td>
                                <?php else : ?>
                                    <td>
                                        <span class="badge badge-success">
                                            <?= $rd['st_review']; ?>
                                        </span>
                                    </td>
                                <?php endif  ?>
                                <?php if ($rd['av_report'] == 2) : ?>
                                    <td>
                                        <span class="badge badge-danger">
                                            <?= $rd['st_approve']; ?>
                                        </span>
                                    </td>
                                <?php else : ?>
                                    <td>
                                        <span class="badge badge-success">
                                            <?= $rd['st_approve']; ?>
                                        </span>
                                    </td>
                                <?php endif  ?>
                                <td>
                                    <a href="<?= base_url('meeting/reportviw/') . $rd['id_report']; ?>" class="badge badge-warning">Detail</a>
                                    <!-- <a href="<?= base_url('admin/employeedit/') . $rd['id_report']; ?>" class="badge badge-success"> Edit </i></a> -->
                                    <a href="<?= site_url("meeting/reportdel/" . $rd['id_report']); ?>" onclick="return confirm('Delete this report?');" class="badge badge-danger"> Delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->