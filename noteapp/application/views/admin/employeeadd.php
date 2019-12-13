 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title  ?></h1>
     <div class="row">
         <div class="col-lg-12">

             <!-- Content -->
             <div class="card shadow mb-4">

                 <!-- Header Content -->
                 <div class="card-header py-3">
                     <?= $this->session->flashdata('message'); ?>
                     <h6 class="m-0 font-weight-bold text-primary"><?= $title  ?> Table</h6>
                 </div>
                 <!-- End Header Content -->

                 <!-- Body Content -->
                 <div class="card-body border-left-primary">
                     <div class="text-left">
                         <form action="<?php echo site_url('admin/employeeadd') ?>" method="post" enctype="multipart/form-data">
                             <div class="form-group row">
                                 <label for="nm_user" class="col-sm-2 col-form-label">Full Name</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="nm_user" name="nm_user">
                                     <?= form_error('nm_user', '<small class="text-danger pl-3">', '</small>'); ?>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="username" class="col-sm-2 col-form-label">Username</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="username" name="username">
                                     <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="password" class="col-sm-2 col-form-label">Password</label>
                                 <div class="col-sm-10">
                                     <input type="password" class="form-control" id="password" name="password">
                                     <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="lv_user" class="col-sm-2 col-form-label">Access Type</label>
                                 <div class="col-sm-10">
                                     <select name="lv_user" id="lv_user" class="form-control">
                                         <option value="">Select Role</option>
                                         <?php foreach ($tyrole as $a) : ?>
                                             <option value="<?= $a['id_role']; ?>"><?= $a['ty_role']; ?></option>
                                         <?php endforeach;  ?>
                                     </select>
                                     <?= form_error('lv_user', '<small class="text-danger pl-3">', '</small>'); ?>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="sb_user" class="col-sm-2 col-form-label">Access Type</label>
                                 <div class="col-sm-10">
                                     <select name="sb_user" id="sb_user" class="form-control">
                                         <option value="">Select Role</option>
                                         <?php foreach ($sbrole as $a) : ?>
                                             <option value="<?= $a['id_sub_role']; ?>"><?= $a['sb_role']; ?></option>
                                         <?php endforeach;  ?>
                                     </select>
                                     <?= form_error('lv_user', '<small class="text-danger pl-3">', '</small>'); ?>
                                 </div>
                             </div>
                             <div class="text-center">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                             </div>
                         </form>
                         </hr>
                     </div>
                 </div>
                 <!-- End Body Content -->

                 <!-- Footer Content -->
                 <div class="card-footer">
                 </div>
                 <!-- End Footer Content -->

             </div>
             <!-- End Content -->

         </div>
     </div>
     <!-- End Page Heading -->

 </div>
 <!-- End Page Content -->

 <!-- Page level custom scripts -->