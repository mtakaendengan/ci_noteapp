 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title  ?></h1>
     <div class="row">
         <div class="col-lg-12">

             <!-- Content -->
             <div class="card shadow mb-4">

                 <!-- Header Content -->
                 <div class="card-header py-3"> <?php if (validation_errors()) : ?>
                         <div class="alert alert-danger" role="alert">
                             <?= validation_errors(); ?>
                         </div>
                     <?php endif; ?>
                     <?= $this->session->flashdata('message'); ?>
                     <h6 class="m-0 font-weight-bold text-primary"><?= $title  ?> Table</h6>
                 </div>
                 <!-- End Header Content -->

                 <!-- Body Content -->
                 <div class="card-body">
                     <?= form_open_multipart('admin/employee'); ?>
                     <div class="form-group row">
                         <label for="username" class="col-sm-2 col-form-label">Username</label>
                         <div class="col-sm-7">
                             <input type="text" class="form-control" id="username" name="username" value="<?= $empviw['username']; ?>" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                         <div class="col-sm-7">
                             <input type="text" class="form-control" id="name" name="name" value="<?= $empviw['nm_user']; ?>">
                             <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-sm-2"> Picture</div>
                         <div class="col-sm-7">
                             <div class="row">
                                 <div class="col-sm-3">
                                     <img src="<?= base_url('assets/img/profile/') . $empviw['im_user']; ?>" class="img-thumbnail">
                                 </div>
                                 <div class="col-sm-9">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="image" name="image">
                                         <label class="custom-file-label" for="image">Choose file</label>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="form-group row justify-content-end">
                         <div class="col-sm-10">
                             <button type="submit" class="btn btn-primary">Edit</button>
                         </div>
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