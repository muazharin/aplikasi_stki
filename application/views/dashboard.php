 <!-- Main content -->
 <section class="content">
   <?php echo $this->session->flashdata('pesan'); ?>
   <div class="container-fluid">
     <div class="card">
       <div class="card-header">
         <a href="<?= base_url("Struk") ?>" class="btn btn-success">Tambah</a>
       </div>
       <!-- /.card-header -->
       <div class="card-body">


         <div class="row">
           <div class="col-sm-12">
             <table class="table table-bordered table-striped dataTable dtr-inline" id="table1" role="grid" aria-describedby="example1_info">
               <thead>
                 <tr>
                   <th style="text-align:center">No</th>
                   <th style="text-align:center">Nama</th>
                   <th style="text-align:center">Username</th>

                   <th style="text-align:center">#</th>
                 </tr>
               </thead>
               <tbody>

                 <tr>
                   <td style="text-align:center"></td>
                   <td style="text-align:center"></td>
                   <td style="text-align:center"></td>

                   <td style="text-align:center">
                     <form action="#" method="post">
                       <a href="#" class="btn btn-primary " title="Edit">
                         <i class="fa fa-edit"></i>
                       </a>
                       <button type="submit" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah Anda Yakin?')">
                         <i class="fa fa-trash"></i>
                       </button>
                     </form>
                   </td>
                 </tr>

               </tbody>

             </table>
           </div>
         </div>




       </div>
     </div>
   </div>
   </div>
   </div>
   <!-- /.card-body -->
   </div>


   </div>
   <!--/. container-fluid -->
 </section>