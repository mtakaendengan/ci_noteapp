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

                 <div class="card-mb-12">

                     <div class=" row no-gutters">

                         <div class="col-md-2 ">

                             <div class=" card-body" style="max-width: 250px">

                                 <img src="<?= base_url('assets/img/profile/'), $user['im_user']; ?>" class="card-img">

                             </div>

                         </div>

                         <div class="col-md-2">

                             <div class=" card-body">

                                 <h5 class="card-title">Nama</h5>

                                 <h6 class="card-title">NIK</h6>

                                 <h6 class="card-title">Username</h6>

                                 <h6 class="card-title">Jabatan</h6>

                                 <h6 class="card-title">Status Akun</h6>

                                 <h6 class="card-title">Tanggal Daftar</h6>

                             </div>

                         </div>

                         <div class="col-md-4">

                             <div class=" card-body">

                                 <h5 class="card-title"><?= $user['nm_user']; ?></h5>

                                 <h6 class="card-title"><?= $user['id_nik']; ?></h6>

                                 <h6 class="card-title"><?= $user['username']; ?></h6>

                                 <h6 class="card-title"><?= $role['ty_role']; ?> <?= $sub['id_sub_role']; ?></h6>

                                 <h6 class="card-title">

                                     <?php if ($act['st_active'] == 2) : ?>

                                         <td>

                                             <span class="badge badge-danger">

                                                 <?= $act['st_active']; ?>

                                             </span>

                                         </td>

                                     <?php else : ?>

                                         <td>

                                             <span class="badge badge-success">

                                                 <?= $act['st_active']; ?>

                                             </span>

                                         </td>

                                     <?php endif  ?></h6>

                                 <h6 class="card-title"><?= $user['dt_user']; ?></h6>

                             </div>

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