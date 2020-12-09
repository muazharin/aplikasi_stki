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
                         <table class="table table-bordered table-striped dataTable dtr-inline" id="histori" role="grid" aria-describedby="example1_info">
                             <thead>
                                 <tr>
                                     <th style="text-align:center">No</th>
                                     <th style="text-align:center">User</th>
                                     <th style="text-align:center">Tanggal</th>
                                     <th style="text-align:center">Rupiah</th>
                                     <th style="text-align:center">Keterangan</th>

                                     <!-- <th style="text-align:center">#</th> -->
                                 </tr>
                             </thead>
                             <tbody>
                                 <!-- <?php $no = 1;
                                        if (isset($histori)) {
                                            foreach ($histori as $data) { ?>
                                 <tr>
                                     <td style="text-align:center"><?= $no++ ?></td>
                                     <td style="text-align:center"><?= $data->user_nama ?></td>
                                     <td style="text-align:center">
                                         <?= date_format(date_create($data->tanggal), 'd-m-Y'); ?></td>
                                     <td style="text-align:center"><?= $data->rupiah ?></td>
                                     <td style="text-align:center"><?= $data->ket ?></td>
                                 </tr>
                                 <?php }
                                        } ?> -->
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

 <script type="text/javascript">
     $(document).ready(function() {
         $('#histori').DataTable({
             "processing": true,
             "serverSide": true,
             "order": [],
             "ajax": {
                 "url": "<?php echo site_url('Histori/get_ajax') ?>",
                 "type": "POST"
             },
             "columnDefs ": [{
                 "targets": [0],
                 "orderable": false,
             }, ],
         });
     })
 </script>