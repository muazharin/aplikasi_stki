<section class="content">
    <?php
    $query1 = $this->db->query("SELECT * FROM tbuser ");
    $query2 = $this->db->query("SELECT * FROM tb_struk");
    $query3 = $this->db->query("SELECT * FROM tb_histori");
    $query4 = $this->db->query("SELECT * FROM tb_cetak");

    $jmluser = $query1->num_rows($query1);
    $jmlslip = $query2->num_rows($query2);
    $jmlhistori = $query3->num_rows($query3);
    $jmlcetak = $query4->num_rows($query4);
    ?>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo number_format($jmluser, 0, ",", "."); ?></h3>

                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= base_url('User') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php echo number_format($jmlslip, 0, ",", "."); ?></h3>

                        <p>Slip Bank</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= base_url('Struk') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo number_format($jmlhistori, 0, ",", "."); ?></h3>

                        <p>Histori</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url('Histori') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php echo number_format($jmlcetak, 0, ",", "."); ?></h3>

                        <p>Cetak</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="<?= base_url('Histori/cetak') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>