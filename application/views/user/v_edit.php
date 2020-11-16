 <!-- Main content -->
 <section class="content">
 <?php $no=0; foreach($user as $data): $no++; ?>
      <div class="container-fluid">
      <div class="card card-primary">
     
              <div class="card-header">
                <h3 class="card-title">Edit Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('User/tambah_post')?>" id="form"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="hidden"  name="id" value="<?=$data->user_id?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?=$data->user_nama?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="usr" value="<?=$data->username?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pw" value="<?=$data->user_pass?>">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
        
        
      </div><!--/. container-fluid -->
      <?php endforeach; ?>
    </section>