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
                 <div class="card-body">
                     <form action="<?= base_url('user/changepassword'); ?>" method="post">
                         <div class="form-group col-sm-3">
                             <label for="currentpassword">Current Password</label>
                             <input type="password" class="form-control" id="currentpassword" name="currentpassword">
                             <?= form_error('currentpassword', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm-3">
                             <label for="newpassword1">New Password</label>
                             <input type="password" class="form-control" id="newpassword1" name="newpassword1">
                             <?= form_error('newpassword1', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm-3">
                             <label for="newpassword2">Repeat Password</label>
                             <input type="password" class="form-control" id="newpassword2" name="newpassword2">
                             <?= form_error('newpassword2', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm-3">
                             <button type="submit" class="btn btn-primary">Change Password</button>
                         </div>
                     </form>
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