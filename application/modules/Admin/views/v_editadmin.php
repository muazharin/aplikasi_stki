<section class="content">
    <?php echo $this->session->flashdata('pesan'); ?>
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($admin as $data) : ?>
                <div class="col-md-3">
                    <!-- <input type="hidden" value="<?= $data->id_admin ?>"> -->
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url() ?>assets/dist/img/avatar5.png" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $data->nama ?></h3>

                            <!-- <p class="text-muted text-center">Software Engineer</p> -->

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Nama</b> <a class="float-right"><?= $data->nama ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Username</b> <a class="float-right"><?= $data->username ?></a>
                                </li>

                            </ul>

                            <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>

                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ubah Password</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <form class="form-horizontal" action="<?php echo base_url('Admin/edit_post') ?>" id="form" method="post">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" class="form-control" name="id" value="<?= $data->id_admin ?>">
                                                <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="usr" value="<?= $data->username ?>">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->

                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Password Baru</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" class="form-control" name="id" value="<?= $data->id_admin ?>">
                                                <input type="password" class="form-control" id="inputName" name="pw1" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="inputEmail" name="pw2" placeholder="Konfirmasi Password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            <?php endforeach; ?>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>