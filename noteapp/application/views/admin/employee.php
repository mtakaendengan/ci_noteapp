<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header  py-3">
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
                <a href="<?= base_url('admin/employeeadd/'); ?>" class="btn btn-primary mb-3"> Add New User</a>
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Level</th>
                            <th scope="col">Sub Level</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($getuser as $e) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $e['nm_user']; ?></td>
                                <td><?= $e['ty_role']; ?></td>
                                <td><?= $e['sb_role']; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('admin/employeeviw/') . $e['id_user']; ?>" class="btn btn-warning btn-circle btn-sm"> <i class="fas fa-info"></i></a>
                                    <a href="<?= base_url('admin/employeedit/') . $e['id_user']; ?>" class="btn btn-success btn-circle btn-sm"> <i class="fas fa-pen"></i></a>
                                    <a href="<?= site_url("admin/employeedel/" . $e['id_user']); ?>" onclick="return confirm('Delete this user?');" class="btn btn-danger btn-circle btn-sm"> <i class="fas fa-trash"></i></a>
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