<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Slip Bank | <?= $tittle; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


</head>

<body class="sidebar-mini layout-fixed sidebar-collapse" style="height: auto;">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->



            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-mini elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('Home') ?>" class="brand-link">
                <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Slip Bank</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url() ?>assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $this->session->userdata('userlog'); ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url("Home") ?>" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("Struk") ?>" class="nav-link ">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Slip
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url("Histori") ?>" class="nav-link">
                                <i class="nav-icon fa fa-history"></i>
                                <p>
                                    Histori
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("Admin/data") ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Admin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("User") ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("Admin/logout") ?>" class="nav-link">
                                <i class="nav-icon fas fa-power-off "></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>




                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $tittle; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('Home') ?>">Home</a></li>
                                <li class="breadcrumb-item active"><?= $tittle; ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


            <!-- /.content -->
            <?php echo $contents ?>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="#">MSAL GROUP</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard2.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table1').DataTable();
        })
    </script>
    <!-- <script type="text/javascript">
    $('#btn_simpan').on('click', function() {
        var tgl = $('#tgl').val();
        var deposit = $('#deposit').val();
        var tt = $('#tt').val();
        var rtgs = $('#rtgs').val();
        var kliring = $('#kliring').val();
        var bank_draft = $('#bank_draft').val();
        var validasi = $('#validasi').val();
        var perorang = $('#perorang').val();
        var perusahaan = $('#perusahaan').val();
        var pemerintah = $('#pemerintah').val();
        var penduduk = $('#penduduk').val();
        var nonpenduduk = $('#nonpenduduk').val();
        var nama = $('#nama').val();
        // var nonpenduduk = $('#nonpenduduk').val();
        var no_rek = $('#no_rek').val();
        var bank = $('#bank').val();
        var address = $('#address').val();
        var no_identitas = $('#no_identitas').val();
        var tabungan = $('#tabungan').val();
        var pay = $('#pay').val();
        var biaya_hidup = $('#biaya_hidup').val();
        var bisnis = $('#bisnis').val();
        var pembeli_brg = $('#pembeli_brg').val();
        var donasi = $('#donasi').val();
        var brita_transaksi = $('#brita_transaksi').val();
        var jml_transfer = $('#jml_transfer').val();
        var komisi = $('#komisi').val();
        var biaya_pengirim = $('#biaya_pengirim').val();
        var biaya_kores = $('#biaya_kores').val();
        var sub_total = $('#sub_total').val();
        var rate = $('#rate').val();
        var total = $('#total').val();
        var nama_pemohon = $('#nama_pemohon').val();
        var nasabah = $('#nasabah').val();
        var nonnasabah = $('#nonnasabah').val();
        var nik = $('#nik').val();
        var individu = $('#individu').val();
        var company = $('#company').val();
        var gover = $('#gover').val();
        var resident = $('#resident').val();
        var bkn_penduduk = $('#bkn_penduduk').val();
        var name = $('#name').val();
        var alamat = $('#alamat').val();
        var cash = $('#cash').val();
        var debit = $('#debit').val();
        var isi_debit = $('#isi_debit').val();
        var cek_bil = $('#cek_bil').val();
        var bank1 = $('#bank1').val();
        var no_cek1 = $('#no_cek1').val();
        var valuta1 = $('#valuta1').val();
        var nominal1 = $('#nominal1').val();
        var bank2 = $('#bank2').val();
        var no_cek2 = $('#no_cek2').val();
        var valuta2 = $('#valuta2').val();
        var nominal2 = $('#nominal2').val();
        var jml = $('#jml').val();
        var terbilang = $('#terbilang').val();
        var gaji = $('#gaji').val();
        var tabungan = $('#tabungan').val();
        var warisan = $('#warisan').val();
        var dana = $('#dana').val();
        var hadiah = $('#hadiah').val();
        var aset = $('#aset').val();
        var hasil_usaha = $('#hasil_usaha').val();
        var sumbangan = $('#sumbangan').val();
        var tunai = $('#tunai').val();
        var deb_rek = $('#deb_rek').val();
        var isi_deb = $('#isi_deb').val();
        var pengirim = $('#pengirim').val();
        var penerima = $('#penerima').val();
        var others = $('#others').val();
        var isi_others = $('#isi_others').val();
        var nama_nonpengirim = $('#nama_nonpengirim').val();
        var alamat_nonpengirim = $('#alamat_nonpengirim').val();
        var nik_nonpengirim = $('#nik_nonpengirim').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Struk/simpan_struk') ?>",
            dataType: "JSON",
            data: {
                "tgl": tgl,
                "deposit": deposit,
                "tt": tt,
                "rtgs": rtgs,
                "kliring": kliring,
                "bank_draft": bank_draft,
                "validasi": validasi,
                "perorang": perorang,
                "perusahaan": perusahaan,
                "pemerintah": pemerintah,
                "penduduk": penduduk,
                "nonpenduduk": nonpenduduk,
                "nama": nama,
                "no_rek": no_rek,
                "bank": bank,
                "address": address,
                "no_identitas": no_identitas,
                "tabungan": tabungan,
                "pay": pay,
                "biaya_hidup": biaya_hidup,
                "bisnis": bisnis,
                "pembeli_brg": pembeli_brg,
                "donasi": donasi,
                "brita_transaksi": brita_transaksi,
                "jml_transfer": jml_transfer,
                "komisi": komisi,
                "biaya_pengirim": biaya_pengirim,
                "biaya_kores": biaya_kores,
                "sub_total": sub_total,
                "rate": rate,
                "total": total,
                "nama_pemohon": nama_pemohon,
                "nasabah": nasabah,
                "nonnasabah": nonnasabah,
                "nik": nik,
                "individu": individu,
                "company": company,
                "gover": gover,
                "resident": resident,
                "bkn_penduduk": bkn_penduduk,
                "name": name,
                "alamat": alamat,
                "cash": cash,
                "isi_debit": isi_debit,
                "cek_bil": cek_bil,
                "bank1": bank1,
                "no_cek1": no_cek1,
                "valuta1": valuta1,
                "nominal1": nominal1,
                "bank2": bank2,
                "no_cek2": no_cek2,
                "valuta2": valuta2,
                "jml": jml,
                "terbilang": terbilang,
                "gaji": gaji,
                "tabungan": tabungan,
                "warisan": warisan,
                "dana": dana,
                "hadiah": hadiah,
                "aset": aset,
                "hasil_usaha": hasil_usaha,
                "sumbangan": sumbangan,
                "tunai": tunai,
                "deb_rek": deb_rek,
                "isi_deb": isi_deb,
                "pengirim": pengirim,
                "penerima": penerima,
                "others": others,
                "isi_others": isi_others,
                "nama_nonpengirim": nama_nonpengirim,
                "alamat_nonpengirim": alamat_nonpengirim,
                "nik_nonpengirim": nik_nonpengirim
            },
            success: function(data) {
                $('[name="tgl"]').val("");
                $('[name="deposit"]').val("");
                $('[name="tt"]').val("");
                $('[name="rtgs"]').val("");
                $('[name="kliring"]').val("");
                $('[name="bank_draft"]').val("");
                // $('[name="kliring"]').val("");
                $('[name="perorang"]').val("");
                $('[name="perusahaan"]').val("");
                $('[name="pemerintah"]').val("");
                $('[name="penduduk"]').val("");
                $('[name="nonpenduduk"]').val("");
                $('[name="nama"]').val("");
                $('[name="no_rek"]').val("");
                $('[name="bank"]').val("");
                $('[name="address"]').val("");
                $('[name="no_identitas"]').val("");
                $('[name="tabungan"]').val("");
                $('[name="pay"]').val("");
                $('[name="biaya_hidup"]').val("");
                $('[name="bisnis"]').val("");
                $('[name="pembeli_brg"]').val("");
                $('[name="donasi"]').val("");
                $('[name="brita_transaksi"]').val("");
                $('[name="jml_transfer"]').val("");
                $('[name="komisi"]').val("");
                $('[name="biaya_pengirim"]').val("");
                $('[name="biaya_kores"]').val("");
                $('[name="sub_total"]').val("");
                $('[name="rate"]').val("");
                $('[name="total"]').val("");
                $('[name="nama_pemohon"]').val("");
                $('[name="nasabah"]').val("");
                $('[name="nonnasabah"]').val("");
                $('[name="nik"]').val("");
                $('[name="individu"]').val("");
                $('[name="company"]').val("");
                $('[name="gover"]').val("");
                $('[name="resident"]').val("");
                $('[name="bkn_penduduk"]').val("");
                $('[name="name"]').val("");
                $('[name="alamat"]').val("");
                $('[name="cash"]').val("");
                $('[name="isi_debit"]').val("");
                $('[name="cek_bil"]').val("");
                $('[name="bank1"]').val("");
                $('[name="no_cek1"]').val("");
                $('[name="valuta1"]').val("");
                $('[name="nominal1"]').val("");
                $('[name="bank2"]').val("");
                $('[name="no_cek2"]').val("");
                $('[name="valuta2"]').val("");
                $('[name="jml"]').val("");
                $('[name="terbilang"]').val("");
                $('[name="gaji"]').val("");
                $('[name="tabungan"]').val("");
                $('[name="warisan"]').val("");
                $('[name="dana"]').val("");
                $('[name="hadiah"]').val("");
                $('[name="aset"]').val("");
                $('[name="hasil_usaha"]').val("");
                $('[name="sumbangan"]').val("");
                $('[name="tunai"]').val("");
                $('[name="deb_rek"]').val("");
                $('[name="isi_deb"]').val("");
                $('[name="pengirim"]').val("");
                $('[name="penerima"]').val("");
                $('[name="others"]').val("");
                $('[name="isi_others"]').val("");
                $('[name="nama_nonpengirim"]').val("");
                $('[name="alamat_nonpengirim"]').val("");
                $('[name="nik_nonpengirim"]').val("");
                $('#ModalaAdd').modal('hide');
                tampil_data_barang();
            }
        });
        return false;
    });
    </script> -->
</body>

</html>