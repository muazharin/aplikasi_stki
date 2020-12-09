 <!-- Main content -->
 <section class="content">
     <?php echo $this->session->flashdata('pesan'); ?>
     <div class="container-fluid">
         <div class="card">
             <div class="card-header">
                 <!-- <a href="<?= base_url("User/tambah") ?>" class="btn btn-success">Tambah</a> -->
                 <div class="card-title">
                     <h4>Data Histori</h4>
                 </div>
             </div>
             <!-- /.card-header -->
             <div class="card-body">


                 <div class="row">
                     <div class="col-sm-12">
                         <table class="table table-bordered table-striped dataTable dtr-inline" id="table1" role="grid" aria-describedby="example1_info">
                             <thead>
                                 <tr>
                                     <th style="text-align:center">No</th>
                                     <th style="text-align:center">Nama User</th>
                                     <th style="text-align:center">Tanggal</th>
                                     <th style="text-align:center">Jumlah Cetak</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    if (isset($cetak)) {
                                        foreach ($cetak as $data) { ?>
                                         <tr>
                                             <td style="text-align:center"><?= $no++ ?></td>
                                             <td style="text-align:center"><?= $data->user_nama ?></td>
                                             <td style="text-align:center">
                                                 <?= date_format(date_create($data->tanggal_cetak), 'd-m-Y'); ?></td>
                                             <td style="text-align:center"><?= $data->jml_cetak ?></td>
                                         </tr>
                                 <?php }
                                    } ?>
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