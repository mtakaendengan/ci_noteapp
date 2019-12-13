 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Buttons</h1>

     <div class="row">

         <div class="col-lg-12">

             <!-- Content -->
             <div class="card shadow mb-4">
                 <!-- Header Content -->
                 <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Circle Buttons</h6>
                 </div>
                 <!-- Body Content -->
                 <div class="card-body shadow border-left-primary">
                     <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal"> Add New Role</a>
                     <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                         <thead class="text-center">
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Role</th>
                                 <th scope="col">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $i = 1; ?>
                             <?php foreach ($role as $r) : ?>
                                 <tr>
                                     <th scope="row"><?= $i; ?></th>
                                     <td><?= $r['ty_role']; ?></td>
                                     <td class="text-center">
                                         <a href="<?= base_url('admin/roleaccess/') . $r['id_role']; ?>" class="btn btn-warning btn-circle btn-sm"> <i class="fas fa-info"></i></a>
                                         <a href="" class="btn btn-success btn-circle btn-sm"> <i class="fas fa-pen"></i></a>
                                         <a href="<?php echo site_url("admin/delete/" . $r['id_role']); ?>" onclick="return confirm('Delete content?');" class="btn btn-danger btn-circle btn-sm"> <i class="fas fa-trash"></i></a>
                                     </td>
                                 </tr>
                                 <?php $i++; ?>
                             <?php endforeach ?>
                         </tbody>
                     </table>
                 </div>
                 <!-- Footer Content -->
                 <div class="card-footer">
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End of Main Content -->

 <!-- Modal -->
 <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('admin/role'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" class="form-control" id="ty_role" name="ty_role" placeholder="Role Access">
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
 <!-- End Modal -->