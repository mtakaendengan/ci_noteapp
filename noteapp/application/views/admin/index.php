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