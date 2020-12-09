 <!-- Main content -->
 <style type="text/css">
     .bk_color {
         background-color: #384355;
     }

     .span_text {
         color: #384355;
     }

     .text-man {
         font-size: 12px;
     }

     .up_mar {
         margin-bottom: 0px;
     }

     input[type=checkbox] {
         /* Double-sized Checkboxes */
         -ms-transform: scale(1.5);
         /* IE */
         -moz-transform: scale(1.5);
         /* FF */
         -webkit-transform: scale(1.5);
         /* Safari and Chrome */
         -o-transform: scale(1.5);
         /* Opera */
         transform: scale(1.5);
         padding: 5px;
     }

     .ta {
         /* border-style: none; */
         border-right: none;
         border-top: none;
     }

     .body-man {
         font-size: 13px;
     }
 </style>
 <section class="content">

     <div class="container-fluid">
         <div class="card">
             <div class="card-header bk_color text-light">
                 <div class="row">

                     <div class="col-10">
                         <h5 style="margin-bottom:-3px; margin-top: 10px"><b>aplikasi
                                 setoran/transfer/kliring/inkaso</b></h5><i>
                             deposit/transfer/clearing/collection form</i>
                     </div>
                     <div class="col-2"><img src="<?= base_url() ?>assets/dist/img/mandiri.png" class="img-fluid" alt="Responsive image"></div>
                 </div>
             </div>
             <form action="<?php echo base_url('Struk/simpan_struk') ?>" id="form" method="post">
                 <!-- /.card-header -->
                 <div class="card-body">
                     <div class="row">
                         <div class="col-6">
                             <div class="form-group">
                                 <input type="hidden" name="iduser" value="<?= $this->session->userdata('idlogin'); ?>">
                                 <div style="margin-bottom:-7px;"><b class="span_text text-man">kepada</b> to <b class="span_text text-man"> PT Bank Mandiri (Persero) Tbk</b><span style="float: right;" class="text-man"><b>tanggal</b> <i>date</i><input type="date" class="" name="tgl" id="tgl" required></span>
                                 </div>
                             </div>
                             <span class="text-man ">harap dilakukan transaksi berikut <i>please do this
                                     transaction:</i></span>
                             <div class="up_mar">
                                 <table id="transaksi" width="100%" border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                                         <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                 transaksi</b><br>
                                             <div style="margin-top: -7px;"><i>transaction</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td class="text-man up_mar"><input type="checkbox" id="deposit" name="transaksi[]" value="1">
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     setoran</b><br>
                                                 <div style="margin-top: -7px;"><i>deposit</i></div>
                                             </td>
                                             <td class="text-man up_mar"><input type="checkbox" id="tt" name="transaksi[]" value="2">
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     TT</b><br>
                                                 <div style="margin-top: -7px;"><i>tt</i></div>
                                             </td>
                                             <td class="text-man up_mar"><input type="checkbox" id="rtgs" name="transaksi[]" value="3">
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     RTGS</b><br>
                                                 <div style="margin-top: -7px;"><i>rtgs</i></div>
                                             </td>
                                             <td class="text-man up_mar"><input type="checkbox" id="" name="transaksi[]" value="4">
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     SKNBI</b><br>
                                                 <div style="margin-top: -7px;"><i>sknbi</i></div>
                                             </td>
                                             <td class="text-man up_mar"><input type="checkbox" id="kliring" name="transaksi[]" value="5">
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Kliring-inkaso</b><br>
                                                 <div style="margin-top: -7px;"><i>clearing-collection</div></i>
                                             </td>
                                             <td class="text-man up_mar"><input type="checkbox" id="bank_draft" name="transaksi[]" value="6">
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Bank
                                                     Draft</b><br>
                                                 <div style="margin-top: -7px;"><i>bank draft</i></div>
                                             </td>
                                         </div>
                                     </tr>
                                 </table>
                             </div>
                             <div class="form-group">

                                 <div class="bk_color text-light text-man" width="100%"> <b>&nbsp;harap ditulis dengan
                                         huruf
                                         cetak</b><i>&nbsp;please fill in with block letters</i> </div>
                                 <div class="text-man">VALIDASI</div>
                                 <div class="text-man" style="margin-top: -7px;"> <i>validation</i><br>
                                     <textarea class="ta" name="validasi" id="validasi" cols="82%" rows="3"></textarea>
                                 </div>
                             </div>
                             <div class="text-man">
                                 <table id="penerima" width="100%" border="0">
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>PENERIMA</b>(wajib
                                             diisi)<br>
                                             <div style="margin-top: -7px;"><i>beneficiery</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="perorang" name="penerima[]" value="perorangan" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     perorangan</b><br>
                                                 <div style="margin-top: -7px;"><i>individual</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="perusahaan" name="penerima[]" value="perusahaan" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     perusahaan</b><br>
                                                 <div style="margin-top: -7px;"><i>company</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="pemerintah" name="penerima[]" value="pemerintah" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     pemerintah</b><br>
                                                 <div style="margin-top: -7px;"><i>government</i></div>
                                             </td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Status
                                                 kependudukan</b><br>
                                             <div style="margin-top: -7px;"><i>resident status</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="penduduk" name="penduduk[]" value="penduduk" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     penduduk</b><br>
                                                 <div style="margin-top: -7px;"><i>resident</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="nonpenduduk" name="penduduk[]" value="bukan penduduk" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     bukan
                                                     penduduk</b><br>
                                                 <div style="margin-top: -7px;"><i>non-resident</i></div>
                                             </td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Nama</b><br>
                                             <div style="margin-top: -7px;"><i>name</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan="6"><input size="55" type="text" name="nama" id="nama" required></td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Nomor
                                                 rekening</b><br>
                                             <div style="margin-top: -7px;"><i>account number</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan="6"><input size="55" type="text" name="no_rek" id="no_rek" required>
                                             </td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Bank</b><br>
                                             <div style="margin-top: -7px;"><i>bank</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan="6"><input size="55" type="text" name="nama_bank" id="bank">
                                             </td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Alamat & telp
                                                 penerima</b><br>
                                             <div style="margin-top: -7px;"><i>beneficiery address & phone no</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan="6"><input size="55" type="text" name="address" id="address">
                                             </td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Jenis & Nomor
                                                 Identitas</b><br>
                                             <div style="margin-top: -7px;"><i>ID type & number</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan="6"><input size="55" type="text" name="jn" id="no_identitas">
                                             </td>
                                         </div>
                                     </tr>
                                 </table>
                             </div>
                             <hr style="margin-top: 1px; margin-bottom: 1px;">
                             <div class="text-man">
                                 <table width="100%" border="0">
                                     <div class="form-group">

                                         <tr>
                                             <td class="text-man" rowspan="" style="vertical-align: text-top; padding-right: 5px;">
                                                 <b>TUJUAN
                                                     TRANSAKSI</b><br>
                                                 <div style="margin-top: -7px;"><i>purpose of transaction</i><br>(wajib
                                                     diisi)</div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="tabungan" name="tujuan[]" value="tabungan" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                                     Tabungan/investasi</b><br>
                                                 <div style="margin-top: -7px;"><i>savings/invesment</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="pay" name="tujuan[]" value="pembayaran" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                                     Pembayaran</b><br>
                                                 <div style="margin-top: -7px;"><i>payment</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="biaya_hidup" name="tujuan[]" value="biaya hidup" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                                     Biaya hidup</b><br>
                                                 <div style="margin-top: -7px;"><i>personal expenses</i></div>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td></td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="bisnis" name="tujuan[]" value="bisnis" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                                     Bisnis</b><br>
                                                 <div style="margin-top: -7px;"><i>business purpose</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="pembeli_brg" name="tujuan[]" value="pembelian barang" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                                     Pembelian barang / jasa</b><br>
                                                 <div style="margin-top: -7px;"><i>purchase of goods/services</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="donasi" name="tujuan[]" value="donasi" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                                     Donasi / amal</b><br>
                                                 <div style="margin-top: -7px;"><i>donation</i></div>
                                             </td>
                                         </tr>
                                     </div>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>BERITA
                                                 TRANSAKSI</b><br>
                                             <div style="margin-top: -7px;"><i>transaction remarks</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan="6"><input size="68" type="text" name="brita" id="brita_transaksi"></td>
                                         </div>
                                     </tr>
                                 </table>
                             </div>
                             <hr style="margin-top: 1px; margin-bottom: 3px;">
                             <div class="bk_color text-light text-man" width="100%"> <b>&nbsp;diisi oleh Bank</b><i>
                                     filled out by
                                     Bank</i> </div>
                             <div class="text-man">
                                 <table border="1" width="100%">
                                     <div class="form-group">

                                         <tr>
                                             <td width="55%"><b>Jumlah transfer</b><i> amount of transfer</i></td>
                                             <td width="45%"><input size="50" type="text" name="jml_trans" id="jml_transfer"></td>
                                         </tr>
                                         <tr>
                                             <td><b>Komisi</b><i> commission</i></td>
                                             <td><input size="50" type="text" name="komisi" id="komisi"></td>
                                         </tr>
                                         <tr>
                                             <td><b>Biaya Pengiriman</b><i> transfer fee</i> <b>(SWIFT/RTGS/SKNBI)</b>
                                             </td>
                                             <td><input size="50" type="text" name="biaya_pengirim" id="biaya_pengirim">
                                             </td>
                                         </tr>
                                         <tr>
                                             <td><b>Biaya Koresponden</b><i> correspondent charge</i></td>
                                             <td><input size="50" type="text" name="biaya_kores" id="biaya_kores"></td>
                                         </tr>
                                         <tr>
                                             <td><b>Sub Total</b></td>
                                             <td><input size="50" type="text" name="sub_total" id="sub_total"></td>
                                         </tr>
                                         <tr>
                                             <td><b>Kurs</b><i> rate</i></td>
                                             <td><input size="50" type="text" name="rate" id="rate"></td>
                                         </tr>
                                         <tr>
                                             <td><b>Total</b></td>
                                             <td><input size="50" type="text" name="total" id="total"></td>
                                         </tr>
                                     </div>
                                 </table>
                             </div>
                             <div style="text-align: left; font-size: 10px; margin-left: 3px;"><b>Pemohon dengan ini
                                     menyetujui
                                     syuarat-syarat dan ketentuan yang tercantum di balik formulir aplikasi ini</b><br>
                                 <i>the applicant hereby accepts all terms and conditions stated on the reverse side of
                                     this
                                     transaction form</i>
                             </div>
                             <div class="text-man">
                                 <table border="1" width="100%">
                                     <tr>
                                         <td width="50%" style="text-align: center;"><b>Pengesahan Bank</b><i> bank's
                                                 authorization</i></td>
                                         <td width="50%" style="text-align: center;"><b>Tanda tangan pemohon</b><i>
                                                 applicant's
                                                 signature</i></td>
                                     </tr>
                                     <div class="form-group">

                                         <tr>
                                             <td></td>
                                             <td style="text-align: center;"><br><br><b>Nama</b><i> name </i><input type="text" size="26" name="ttd" id="nama_pemohon" required></td>
                                         </tr>
                                     </div>
                                 </table>
                             </div>


                         </div>

                         <div class="col-6">
                             <div class="text-man">
                                 <table border="0" width="100%">
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>PENGIRIM</b>(wajib
                                             diisi)<br>
                                             <div style="margin-top: -7px;"><i>applicant</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="nasabah" name="pengirim[]" value="nasabah" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     nasabah</b><br>
                                                 <div style="margin-top: -7px;"><i>customer</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="nonnasabah" name="pengirim[]" value="non nasabah" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     non nasabah</b><br>
                                                 <div style="margin-top: -7px;"><i>walk in customer (WIC)</i></div>
                                             </td>
                                         </div>
                                         <td></td>
                                         <td></td>
                                     </tr>
                                     <tr>
                                         <td colspan="6"><b>NIK/ Paspor (WNA) / NPWP (Perusahaan)</b></td>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: middle;">
                                             <div style="margin-top: -7px;"><i>ID number</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan="6"><input size="62" type="text" name="nik" id="nik"></td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Informasi
                                                 pengirim</b><br>
                                             <div style="margin-top: -7px;"><i>applicant information</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="individu" name="info[]" value="perorangan" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     perorangan</b><br>
                                                 <div style="margin-top: -7px;"><i>individual</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="company" name="info[]" value="perusahaan" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     perusahaan</b><br>
                                                 <div style="margin-top: -7px;"><i>company</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="gover" name="info[]" value="pemerintah" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     pemerintah</b><br>
                                                 <div style="margin-top: -7px;"><i>government</i></div>
                                             </td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Status
                                                 kependudukan</b><br>
                                             <div style="margin-top: -7px;"><i>resident status</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="resident" name="status[]" value="penduduk" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     penduduk</b><br>
                                                 <div style="margin-top: -7px;"><i>resident</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="bkn_penduduk" name="status[]" value="bukan penduduk" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     bukan penduduk</b><br>
                                                 <div style="margin-top: -7px;"><i>non-resident</i></div>
                                             </td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Nama</b><br>
                                             <div style="margin-top: -7px;"><i>name</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan="6"><input size="62" type="text" name="nama2" id="name" required></td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Alamat & nomor
                                                 telepon </b><br>
                                             <div style="margin-top: -7px;"><i>address & telephone number&nbsp;</i>
                                             </div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan="6"><input size="62" type="text" name="alamat2" id="alamat" required>
                                             </td>
                                         </div>
                                     </tr>
                                 </table>

                             </div>
                             <hr style="margin-top: 1px; margin-bottom: 1px;">
                             <br>
                             <div class="text-man">
                                 <b>METODE TRANSAKSI (wajib diisi)</b><br>
                                 <i>method of transaction</i>
                                 <table width="100%" border="0">
                                     <tr>
                                         <div class="form-group">

                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="cash" name="metode[]" value="tunai" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     &nbsp; tunai</b><br>
                                                 <div style="margin-top: -7px;"><i>&nbsp;&nbsp;cash</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="debit" name="metode[]" value="debet" /></td>
                                             &nbsp;
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     &nbsp;debet rekening:</b><br>
                                                 <div style="margin-top: -7px;"><i>&nbsp;debit account:</i></div>
                                             </td>
                                             <td>
                                                 <input size="30" type="text" name="isi" id="isi_debit">
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="cek_bil" name="metode[]" value="cek" /></td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     &nbsp;cek/bilyet giro</b><br>
                                                 <div style="margin-top: -7px;"><i>&nbsp;cheque</i></div>
                                             </td>
                                         </div>
                                     </tr>
                                 </table>
                             </div>
                             <div class="text-man">
                                 <table border="1" width="100%">
                                     <div class="form-group">

                                         <tr>
                                             <td width="30%" style="text-align: center;"><b>Bank Tertarik</b><i> drawee
                                                     bank</i></td>
                                             <td width="30%" style="text-align: center;"><b>Nomor cek/BG</b><i> cheque
                                                     number</i></td>
                                             <td width="15%" style="text-align: center;"><b>Valuta</b><i> currency</i>
                                             </td>
                                             <td width="15%" style="text-align: center;"><b>Nominal</b><i> amount</i>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td><input size="30" type="text" name="bank1" id="bank1"></td>
                                             <td><input size="30" type="text" name="no_cek1" id="no_cek1"></td>
                                             <td><input size="12" type="text" name="valuta1" id="valuta1"></td>
                                             <td><input size="12" type="text" name="nominal1" id="nominal1"></td>
                                         </tr>
                                         <tr>
                                             <td><input size="30" type="text" name="bank2" id="bank2"></td>
                                             <td><input size="30" type="text" name="no_cek2" id="no_cek2"></td>
                                             <td><input size="12" type="text" name="valuta2" id="valuta2"></td>
                                             <td><input size="12" type="text" name="nominal2" id="nominal2"></td>
                                         </tr>
                                     </div>
                                 </table>
                             </div>
                             <div class="text-man">
                                 <table border="0" width="100%">
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Jumlah
                                                 setoran/transfer/kliring/inkaso</b><br>
                                             <div style="margin-top: -7px;"><i>deposit/transfer/clearing/collection
                                                     amount</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan=""><input size="46" type="text" name="stor" id="terbilang-input" class="mata-uang" onkeyup="inputTerbilang();" autocomplete="off" required></td>
                                         </div>

                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;">
                                             <b>Terbilang&nbsp;</b><br>
                                             <div style="margin-top: -7px;"><i>in words</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan=""><input size="75" type="text" name="terbilang" id="terbilang-output" required></td>
                                         </div>
                                     </tr>
                                 </table>
                                 <table>

                                 </table>
                             </div>
                             <hr style="margin-top: 1px; margin-bottom: 1px;">
                             <br>
                             <div class="text-man">
                                 <b>SUMBER DANA TRANSAKSI (wajib diisi)</b><br>
                                 <i>source of fund</i>
                                 <table width="100%" border="0">
                                     <div class="form-group">

                                         <tr>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="gaji" name="sumber[]" value="gaji" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Gaji / penghasilan</b><br>
                                                 <div style="margin-top: -7px;"><i>salary / income</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="tabungan" name="sumber[]" value="tabungan" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Tabungan/hasil investasi</b><br>
                                                 <div style="margin-top: -7px;"><i>saving / investment</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="warisan" name="sumber[]" value="warisan" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Warisan</b><br>
                                                 <div style="margin-top: -7px;"><i>inheritance</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="dana" name="sumber[]" value="dana" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Dana pemerintah</b><br>
                                                 <div style="margin-top: -7px;"><i>inheritance</i></div>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="hadiah" name="sumber[]" value="hibah" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Hibah / hadiah</b><br>
                                                 <div style="margin-top: -7px;"><i>Grants / gifts</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="aset" name="sumber[]" value="penjual" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Penjualan aset</b><br>
                                                 <div style="margin-top: -7px;"><i>sale of assets</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="hasil_usaha" name="sumber[]" value="hasil" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Hasil usaha</b><br>
                                                 <div style="margin-top: -7px;"><i>business proceed</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="sumbangan" name="sumber[]" value="sumbangan" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Sumbangan</b><br>
                                                 <div style="margin-top: -7px;"><i>contribution</i></div>
                                             </td>
                                         </tr>
                                     </div>
                                 </table>
                             </div>
                             <hr style="margin-top: 1px; margin-bottom: 1px;">
                             <br>
                             <div class="text-man">
                                 <b>BIAYA TRANSAKSI (wajib diisi)<br>
                                     <i>Transaction fee</i></b>
                                 <table width="100%" border="0">
                                     <div class="form-group">

                                         <tr>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="tunai" name="biaya_trans[]" value="tunai" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Tunai &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                                 <div style="margin-top: -7px;"><i>cash</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="deb_rek" name="biaya_trans[]" value="Debet rekening" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Debet rekening : &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                                 <div style="margin-top: -7px;"><i>debit account : </i></div>
                                             </td>
                                             <td colspan=""><input size="50" type="text" name="debet" id="isi_deb"></td>
                                         </tr>
                                     </div>
                                 </table>
                                 <b>Biaya bank koresponden</b> <i>correspondent charge</i>
                                 <table width="100%" border="0">
                                     <div class="form-group">

                                         <tr>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="pengirim" name="biaya_bank[]" value="pengirim" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Pengirim &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                                 <div style="margin-top: -7px;"><i>applicant</i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="penerima" name="biaya_bank[]" value="penerima" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Penerima &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                                 <div style="margin-top: -7px;"><i>beneficiery </i></div>
                                             </td>
                                             <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="others" name="biaya_bank[]" value="lainnya" />&nbsp;
                                             </td>
                                             <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                                     Lainnya &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                                 <div style="margin-top: -7px;"><i>others </i></div>
                                             </td>
                                             <td colspan=""><input size="25" type="text" name="lain" id="isi_others">
                                             </td>
                                         </tr>
                                     </div>
                                 </table>
                             </div>
                             <hr style="margin-top: 1px; margin-bottom: 1px;">
                             <br>
                             <div class="bk_color text-light text-man" width="100%">
                                 <b>&nbsp;diisi apabila pembawa formulir bukan pengirim</b><i> filled out if the bearer
                                     of this form
                                     is not applicant</i>
                             </div>
                             <div class="text-man">
                                 <table border="0" width="100%">
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Nama</b><br>
                                             <div style="margin-top: -7px;"><i>name</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan=""><input size="55" type="text" name="nama3" id="nama_nonpengirim"></td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>Alamat & nomor
                                                 telepon</b><br>
                                             <div style="margin-top: -7px;"><i>Address & telephone number</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan=""><input size="55" type="text" name="alamat3" id="alamat_nonpengirim">
                                             </td>
                                         </div>
                                     </tr>
                                     <tr>
                                         <td class="text-man" style="vertical-align: text-top;"><b>NIK / paspor
                                                 (WNA)</b><br>
                                             <div style="margin-top: -7px;"><i>ID number</i></div>
                                         </td>
                                         <div class="form-group">

                                             <td colspan=""><input size="55" type="text" name="nik_paspor" id="nik_tnonpengirim"></td>
                                         </div>
                                     </tr>
                                 </table>
                             </div>
                         </div>
                     </div>


                 </div>
                 <div class="card-footer">
                     <div class="row">
                         <div class="col">
                             <div class="float-right">
                                 <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i>
                                     Simpan</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </form>
         </div>
     </div>
     </div>
     </div>
     <!-- /.card-body -->
     </div>


     </div>
     <!--/. container-fluid -->
 </section>

 <!-- <script type="text/javascript">
     $('#btn_simpan').on('click', function() {
         var transaksi = $('#transaksi').val();

         $.ajax({
             type: "POST",
             url: "<?php echo base_url('barang/simpan_barang') ?>",
             dataType: "JSON",
             data: {
                 transaksi: transaksi,
                 nabar: nabar,
                 harga: harga
             },
             success: function(data) {
                 $('[name="kobar"]').val("");
                 $('[name="nabar"]').val("");
                 $('[name="harga"]').val("");
                 $('#ModalaAdd').modal('hide');
                 tampil_data_barang();
             }
         });
         return false;
     });
 </script> -->