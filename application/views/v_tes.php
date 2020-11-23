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
     <?php echo $this->session->flashdata('pesan'); ?>
     <div class="container-fluid">
         <div class="card">
             <div class="card-header bk_color text-light">
                 <h5 style="margin-bottom:-3px; margin-top: 10px"><b>aplikasi setoran/transfer/kliring/inkaso</b></h5><i>
                     deposit/transfer/clearing/collection form</i>
             </div>

             <!-- /.card-header -->
             <div class="card-body">


                 <div class="row">
                     <div class="col-5">
                         <div style="margin-bottom:-7px;"><b class="span_text text-man">kepada</b> to <b class="span_text text-man"> PT Bank Mandiri (Persero) Tbk</b><span style="float: right;" class="text-man"><b>tanggal</b> <i>date</i><input type="date" class="" name="" id="tgl"></span>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-5">

                         <span class="text-man">harap dilakukan transaksi berikut <i>please do this transaction:</i></span>
                         <div class="up_mar">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                             transaksi</b><br>
                                         <div style="margin-top: -7px;"><i>transaction</i></div>
                                     </td>
                                     <td class="text-man up_mar"><input type="checkbox" id="deposit" name="cb_1">
                                     </td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b> setoran</b><br>
                                         <div style="margin-top: -7px;"><i>deposit</i></div>
                                     </td>
                                     <td class="text-man up_mar"><input type="checkbox" id="tt" name="cb_1" />
                                     </td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b> TT</b><br>
                                         <div style="margin-top: -7px;"><i>tt</i></div>
                                     </td>
                                     <td class="text-man up_mar"><input type="checkbox" id="rtgs" name="cb_1">
                                     </td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b> RTGS</b><br>
                                         <div style="margin-top: -7px;"><i>rtgs</i></div>
                                     </td>
                                     <td class="text-man up_mar"><input type="checkbox" id="kliring" name="cb_1">
                                     </td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                             Kliring-inkaso</b><br>
                                         <div style="margin-top: -7px;"><i>clearing-collection</div></i>
                                     </td>
                                     <td class="text-man up_mar"><input type="checkbox" id="bank_draft" name="cb_1">
                                     </td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b> Bank
                                             Draft</b><br>
                                         <div style="margin-top: -7px;"><i>bank draft</i></div>
                                     </td>
                                 </tr>
                             </table>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-5">
                         <div class="bk_color text-light text-man" width="40%"> <b>&nbsp;harap ditulis dengan huruf
                                 cetak</b><i>&nbsp;please fill in with block letters</i> </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-5">
                         <div class="text-man">VALIDASI</div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-5">
                         <div class="text-man" style="margin-top: -7px;"> <i>validation</i><br>
                             <textarea class="ta" name="" id="validasi" cols="82%" rows="3"></textarea>
                         </div>
                     </div>

                 </div>

                 <div class="row">
                     <div class="col-5">
                         <div class="text-man">
                             <table width="100%" border="0">
                                 <tr>
                                     <td class="text-man" style="vertical-align: text-top;"><b>PENERIMA</b>(wajib diisi)<br>
                                         <div style="margin-top: -7px;"><i>beneficiery</i></div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="perorang" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                             perorangan</b><br>
                                         <div style="margin-top: -7px;"><i>individual</i></div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="perusahaan" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                             perusahaan</b><br>
                                         <div style="margin-top: -7px;"><i>company</i></div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="pemerintah" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                             pemerintah</b><br>
                                         <div style="margin-top: -7px;"><i>government</i></div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="text-man" style="vertical-align: text-top;"><b>Status kependudukan</b><br>
                                         <div style="margin-top: -7px;"><i>resident status</i></div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="penduduk" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b> penduduk</b><br>
                                         <div style="margin-top: -7px;"><i>resident</i></div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="nonpenduduk" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b> bukan
                                             penduduk</b><br>
                                         <div style="margin-top: -7px;"><i>non-resident</i></div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="text-man" style="vertical-align: text-top;"><b>Nama</b><br>
                                         <div style="margin-top: -7px;"><i>name</i></div>
                                     </td>
                                     <td colspan="6"><input size="55" type="text" name="" id="nama"></td>
                                 </tr>
                                 <tr>
                                     <td class="text-man" style="vertical-align: text-top;"><b>Nomor rekening</b><br>
                                         <div style="margin-top: -7px;"><i>account number</i></div>
                                     </td>
                                     <td colspan="6"><input size="55" type="text" name="" id="no_rek"></td>
                                 </tr>
                                 <tr>
                                     <td class="text-man" style="vertical-align: text-top;"><b>Bank</b><br>
                                         <div style="margin-top: -7px;"><i>bank</i></div>
                                     </td>
                                     <td colspan="6"><input size="55" type="text" name="" id="bank"></td>
                                 </tr>
                                 <tr>
                                     <td class="text-man" style="vertical-align: text-top;"><b>Alamat & telp penerima</b><br>
                                         <div style="margin-top: -7px;"><i>beneficiery address & phone no</i></div>
                                     </td>
                                     <td colspan="6"><input size="55" type="text" name="" id="address"></td>
                                 </tr>
                                 <tr>
                                     <td class="text-man" style="vertical-align: text-top;"><b>Jenis & Nomor Identitas</b><br>
                                         <div style="margin-top: -7px;"><i>ID type & number</i></div>
                                     </td>
                                     <td colspan="6"><input size="55" type="text" name="" id="no_identitas"></td>
                                 </tr>
                             </table>
                         </div>
                     </div>

                 </div>

                 <div class="row">
                     <div class="col-5">
                         <hr style="margin-top: 1px; margin-bottom: 1px;">
                         <div class="text-man">
                             <table width="100%" border="0">
                                 <tr>
                                     <td class="text-man" rowspan="" style="vertical-align: text-top; padding-right: 5px;">
                                         <b>TUJUAN
                                             TRANSAKSI</b><br>
                                         <div style="margin-top: -7px;"><i>purpose of transaction</i><br>(wajib diisi)</div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="tabungan" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                             Tabungan/investasi</b><br>
                                         <div style="margin-top: -7px;"><i>savings/invesment</i></div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="pay" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                             Pembayaran</b><br>
                                         <div style="margin-top: -7px;"><i>payment</i></div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="biaya_hidup" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                             Biaya hidup</b><br>
                                         <div style="margin-top: -7px;"><i>personal expenses</i></div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td></td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="bisnis" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                             Bisnis</b><br>
                                         <div style="margin-top: -7px;"><i>business purpose</i></div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="pembeli_brg" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                             Pembelian barang / jasa</b><br>
                                         <div style="margin-top: -7px;"><i>purchase of goods/services</i></div>
                                     </td>
                                     <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="donasi" name="cb_1" /></td>
                                     <td class="text-man up_mar span_text" style="vertical-align: middle; padding-left: 3px;"><b>
                                             Donasi / amal</b><br>
                                         <div style="margin-top: -7px;"><i>donation</i></div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td class="text-man" style="vertical-align: text-top;"><b>BERITA TRANSAKSI</b><br>
                                         <div style="margin-top: -7px;"><i>transaction remarks</i></div>
                                     </td>
                                     <td colspan="6"><input size="62" type="text" name="" id="brita_transaksi"></td>
                                 </tr>
                             </table>
                         </div>
                         <hr style="margin-top: 1px; margin-bottom: 3px;">
                     </div>
                 </div>


                 <div class="row">
                     <div class="col-5">
                         <div class="bk_color text-light text-man" width="100%"> <b>&nbsp;diisi oleh Bank</b><i> filled out by
                                 Bank</i> </div>
                         <div class="text-man">
                             <table border="1" width="100%">
                                 <tr>
                                     <td width="55%"><b>Jumlah transfer</b><i> amount of transfer</i></td>
                                     <td width="45%"><input size="35" type="text" name="" id="jml_transfer"></td>
                                 </tr>
                                 <tr>
                                     <td><b>Komisi</b><i> commission</i></td>
                                     <td><input size="35" type="text" name="" id="komisi"></td>
                                 </tr>
                                 <tr>
                                     <td><b>Biaya Pengiriman</b><i> transfer fee</i> <b>(SWIFT/RTGS/SKNBI)</b></td>
                                     <td><input size="35" type="text" name="" id="biaya_pengirim"></td>
                                 </tr>
                                 <tr>
                                     <td><b>Biaya Koresponden</b><i> correspondent charge</i></td>
                                     <td><input size="35" type="text" name="" id="biaya_kores"></td>
                                 </tr>
                                 <tr>
                                     <td><b>Sub Total</b></td>
                                     <td><input size="35" type="text" name="" id="sub_total"></td>
                                 </tr>
                                 <tr>
                                     <td><b>Kurs</b><i> rate</i></td>
                                     <td><input size="35" type="text" name="" id="rate"></td>
                                 </tr>
                                 <tr>
                                     <td><b>Total</b></td>
                                     <td><input size="35" type="text" name="" id="total"></td>
                                 </tr>
                             </table>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-5">
                         <div style="text-align: left; font-size: 10px; margin-left: 3px;"><b>Pemohon dengan ini menyetujui
                                 syuarat-syarat dan ketentuan yang tercantum di balik formulir aplikasi ini</b><br>
                             <i>the applicant hereby accepts all terms and conditions stated on the reverse side of this
                                 transaction form</i></div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-5">
                         <div class="text-man">
                             <table border="1" width="100%">
                                 <tr>
                                     <td width="50%" style="text-align: center;"><b>Pengesahan Bank</b><i> bank's
                                             authorization</i></td>
                                     <td width="50%" style="text-align: center;"><b>Tanda tangan pemohon</b><i> applicant's
                                             signature</i></td>
                                 </tr>
                                 <tr>
                                     <td></td>
                                     <td style="text-align: center;"><br><br><b>Nama</b><i> name </i><input type="text" size="26" name="" id="nama_pemohon"></td>
                                 </tr>
                             </table>
                         </div>
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