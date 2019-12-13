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
                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal"> Add New Submenu</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Menu</th>
                            <th scope="col">URL</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($subMenu as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sm['tl_sub']; ?></td>
                                <td><?= $sm['nm_menu']; ?></td>
                                <td><?= $sm['ur_sub']; ?></td>
                                <td><?= $sm['ic_sub']; ?></td>
                                <td><?= $sm['ac_sub']; ?></td>
                                <td>
                                    <a href="#" class="badge badge-success">Edit</a>
                                    <a href="<?= base_url('menu/deleteSubMenu/') . $sm['id_sub']; ?>" class="badge badge-danger" onclick="return confirm('Yakin');">Delete</a>
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
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="tl_sub" name="tl_sub" placeholder="Submenu Title">
                    </div>
                    <div class="form-group">
                        <select name="id_menu" id="id_menu" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id_menu']; ?>"><?= $m['nm_menu']; ?></option>
                            <?php endforeach;  ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="ur_sub" name="ur_sub" placeholder="Submenu URL">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="ic_sub" name="ic_sub" placeholder="Submenu Icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="ac_sub" id="ac_sub" checked>
                            <label class="form-check-label" for="ac_sub">
                                Active?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>