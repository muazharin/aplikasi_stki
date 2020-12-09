 <!-- Main content -->
 <section class="content">
     <?php echo $this->session->flashdata('pesan'); ?>
     <div class="container-fluid">
         <div class="card">
             <div class="card-header">
                 <a href="<?= base_url("StrukUser/tambah") ?>" class="btn btn-success">Tambah</a>
             </div>
             <!-- /.card-header -->
             <div class="card-body">


                 <div class="row">
                     <div class="col-sm-12">
                         <table class="table table-bordered table-striped dataTable dtr-inline" id="user" role="grid" aria-describedby="example1_info">
                             <thead>
                                 <tr>
                                     <th style="text-align:center">No</th>
                                     <th style="text-align:center">Tanggal Slip</th>
                                     <th style="text-align:center">Rupiah</th>
                                     <th style="text-align:center">Nama Penerima</th>
                                     <th style="text-align:center">Berita Transaksi</th>
                                     <th style="text-align:center">#</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <!-- <?php $no = 1;
                                        if (isset($struk)) {
                                            foreach ($struk as $data) { ?>
                                         <tr>
                                             <td style="text-align:center"><?= $no++ ?></td>
                                             <td style="text-align:center"><?= date_format(date_create($data->tanggal), 'd-m-Y'); ?></td>
                                             <td style="text-align:center"><?= $data->stor ?></td>
                                             <td style="text-align:center"><?= $data->nama ?></td>
                                             <td style="text-align:center"><?= $data->berita_transaksi ?></td>

                                             <td style="text-align:center">
                                                 <form action="<?= base_url() ?>StrukUser/delete/<?= $data->id_struk ?>" method="post">
                                                     <a href="<?= base_url() ?>StrukUser/edit/<?= $data->id_struk ?>" class="btn btn-primary " title="Edit">
                                                         <i class="fa fa-edit"></i>
                                                     </a>
                                                     <a href="<?= base_url() ?>StrukUser/tes/<?= $data->id_struk; ?>/<?= $data->user_id; ?>" class="btn btn-primary " target="_blank" title="Edit">
                                                         <i class="fa fa-print"></i>
                                                     </a>
                                                     <button type="submit" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah Anda Yakin?')">
                                                         <i class="fa fa-trash"></i>
                                                     </button>
                                                 </form>
                                             </td>
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
         $('#user').DataTable({
             "processing": true,
             "serverSide": true,
             "order": [],
             "ajax": {
                 "url": "<?php echo site_url('StrukUser/get_ajax') ?>",
                 "type": "POST"
             },
             "columnDefs ": [{
                 "targets": [0],
                 "orderable": false,
             }, ],
         });
     })
 </script>