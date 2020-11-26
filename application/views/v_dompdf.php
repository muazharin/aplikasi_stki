<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
        .kotak4 {
            width: 500px;
        }

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
    <title>Hello, world!</title>
</head>

<body class="body-man">
    <div class="kotak4">
        <div class="row bk_color text-light">
            <div class="col-10">
                <h5 style="margin-bottom:-3px; margin-top: 10px"><b>aplikasi setoran/transfer/kliring/inkaso</b></h5><i>
                    deposit/transfer/clearing/collection form</i>
            </div>
            <div class="col-2"><img src="mandiri.png" class="img-fluid" alt="Responsive image"></div>
        </div>
        <div class="row">
            <div class="col-6 ">
                <div style="margin-bottom:-7px;"><b class="span_text text-man">kepada</b> to <b class="span_text text-man"> PT Bank Mandiri (Persero) Tbk</b><span style="float: right;" class="text-man"><b>tanggal</b> <i>date</i><input type="date" class="" name="" id="tgl"></span>
                </div>
                <span class="text-man ">harap dilakukan transaksi berikut <i>please do this transaction:</i></span>
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
                <div class="bk_color text-light text-man" width="100%"> <b>&nbsp;harap ditulis dengan huruf
                        cetak</b><i>&nbsp;please fill in with block letters</i> </div>
                <div class="text-man">VALIDASI</div>
                <div class="text-man" style="margin-top: -7px;"> <i>validation</i><br>
                    <textarea class="ta" name="" id="validasi" cols="82%" rows="3"></textarea>
                </div>
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
                <div style="text-align: left; font-size: 10px; margin-left: 3px;"><b>Pemohon dengan ini menyetujui
                        syuarat-syarat dan ketentuan yang tercantum di balik formulir aplikasi ini</b><br>
                    <i>the applicant hereby accepts all terms and conditions stated on the reverse side of this
                        transaction form</i></div>
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
                <br><br><br>
            </div>
            <div class="col-6">
                <div class="text-man">
                    <table border="0" width="100%">
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>PENGIRIM</b>(wajib
                                diisi)<br>
                                <div style="margin-top: -7px;"><i>applicant</i></div>
                            </td>

                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="nasabah" name="cb_1" /></td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    nasabah</b><br>
                                <div style="margin-top: -7px;"><i>customer</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="nonnasabah" name="cb_1" /></td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    non nasabah</b><br>
                                <div style="margin-top: -7px;"><i>walk in customer (WIC)</i></div>
                            </td>
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
                            <td colspan="6"><input size="62" type="text" name="" id="nik"></td>
                        </tr>
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>Informasi pengirim</b><br>
                                <div style="margin-top: -7px;"><i>applicant information</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="individu" name="cb_1" /></td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    perorangan</b><br>
                                <div style="margin-top: -7px;"><i>individual</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="company" name="cb_1" /></td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    perusahaan</b><br>
                                <div style="margin-top: -7px;"><i>company</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="gover" name="cb_1" /></td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    pemerintah</b><br>
                                <div style="margin-top: -7px;"><i>government</i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>Status kependudukan</b><br>
                                <div style="margin-top: -7px;"><i>resident status</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="resident" name="cb_1" /></td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    penduduk</b><br>
                                <div style="margin-top: -7px;"><i>resident</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="bkn_penduduk" name="cb_1" /></td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    bukan penduduk</b><br>
                                <div style="margin-top: -7px;"><i>non-resident</i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>Nama</b><br>
                                <div style="margin-top: -7px;"><i>name</i></div>
                            </td>
                            <td colspan="6"><input size="62" type="text" name="" id="name"></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>Alamat & nomor telepon </b><br>
                                <div style="margin-top: -7px;"><i>address & telephone number&nbsp;</i></div>
                            </td>
                            <td colspan=""><input size="57" type="text" name="" id="alamat"></td>
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
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="cash" name="cb_1" /></td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    &nbsp; tunai</b><br>
                                <div style="margin-top: -7px;"><i>&nbsp;&nbsp;cash</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="debit" name="cb_1" /></td>
                            &nbsp;
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    &nbsp;debet rekening:</b><br>
                                <div style="margin-top: -7px;"><i>&nbsp;debit account:</i></div>
                            </td>
                            <td>
                                <input size="30" type="text" name="" id="isi_debit">
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="cek_bil" name="cb_1" /></td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    &nbsp;cek/bilyet giro</b><br>
                                <div style="margin-top: -7px;"><i>&nbsp;cheque</i></div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="text-man">
                    <table border="1" width="100%">
                        <tr>
                            <td width="30%" style="text-align: center;"><b>Bank Tertarik</b><i> drawee bank</i></td>
                            <td width="34%" style="text-align: center;"><b>Nomor cek/BG</b><i> cheque number</i></td>
                            <td width="18%" style="text-align: center;"><b>Valuta</b><i> currency</i></td>
                            <td width="18%" style="text-align: center;"><b>Nominal</b><i> amount</i></td>
                        </tr>
                        <tr>
                            <td><input size="20" type="text" name="" id="bank1"></td>
                            <td><input size="23" type="text" name="" id="no_cek1"></td>
                            <td><input size="12" type="text" name="" id="valuta1"></td>
                            <td><input size="12" type="text" name="" id="nominal1"></td>
                        </tr>
                        <tr>
                            <td><input size="20" type="text" name="" id="bank2"></td>
                            <td><input size="23" type="text" name="" id="no_cek2"></td>
                            <td><input size="12" type="text" name="" id="valuta2"></td>
                            <td><input size="12" type="text" name="" id="nominal2"></td>
                        </tr>
                    </table>
                </div>
                <div class="text-man">
                    <table border="0" width="100%">
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>Jumlah
                                    setoran/transfer/kliring/inkaso</b><br>
                                <div style="margin-top: -7px;"><i>deposit/transfer/clearing/collection amount</i></div>
                            </td>
                            <td colspan=""><input size="46" type="text" name="" id="jml"></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>Terbilang&nbsp;</b><br>
                                <div style="margin-top: -7px;"><i>in words</i></div>
                            </td>
                            <td colspan=""><input size="75" type="text" name="" id="terbilang"></td>
                        </tr>
                    </table>
                </div>
                <hr style="margin-top: 1px; margin-bottom: 1px;">
                <br>
                <div class="text-man">
                    <b>SUMBER DANA TRANSAKSI (wajib diisi)</b><br>
                    <i>source of fund</i>
                    <table width="100%" border="0">
                        <tr>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="gaji" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Gaji / penghasilan</b><br>
                                <div style="margin-top: -7px;"><i>salary / income</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="tabungan" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Tabungan/hasil investasi</b><br>
                                <div style="margin-top: -7px;"><i>saving / investment</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="warisan" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Warisan</b><br>
                                <div style="margin-top: -7px;"><i>inheritance</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="dana" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Dana pemerintah</b><br>
                                <div style="margin-top: -7px;"><i>inheritance</i></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="hadiah" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Hibah / hadiah</b><br>
                                <div style="margin-top: -7px;"><i>Grants / gifts</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="aset" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Penjualan aset</b><br>
                                <div style="margin-top: -7px;"><i>sale of assets</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="hasil_usaha" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Hasil usaha</b><br>
                                <div style="margin-top: -7px;"><i>business proceed</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="sumbangan" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Sumbangan</b><br>
                                <div style="margin-top: -7px;"><i>contribution</i></div>
                            </td>
                        </tr>
                    </table>
                </div>
                <hr style="margin-top: 1px; margin-bottom: 1px;">
                <br>
                <div class="text-man">
                    <b>BIAYA TRANSAKSI (wajib diisi)<br>
                        <i>Transaction fee</i></b>
                    <table width="100%" border="0">
                        <tr>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="tunai" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Tunai &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                <div style="margin-top: -7px;"><i>cash</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="deb_rek" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Debet rekening : &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                <div style="margin-top: -7px;"><i>debit account : </i></div>
                            </td>
                            <td colspan=""><input size="50" type="text" name="" id="isi_deb"></td>
                        </tr>
                    </table>
                    <b>Biaya bank koresponden</b> <i>correspondent charge</i>
                    <table width="100%" border="0">
                        <tr>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="pengirim" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Pengirim &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                <div style="margin-top: -7px;"><i>applicant</i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="penerima" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Penerima &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                <div style="margin-top: -7px;"><i>beneficiery </i></div>
                            </td>
                            <td class="text-man" style="margin-top: 2px;"><input type="checkbox" id="others" name="cb_1" />&nbsp;
                            </td>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    Lainnya &nbsp;&nbsp;&nbsp;&nbsp;</b><br>
                                <div style="margin-top: -7px;"><i>others </i></div>
                            </td>
                            <td colspan=""><input size="25" type="text" name="" id="isi_others"></td>
                        </tr>
                    </table>
                </div>
                <hr style="margin-top: 1px; margin-bottom: 1px;">
                <br>
                <div class="bk_color text-light text-man" width="100%">
                    <b>&nbsp;diisi apabila pembawa formulir bukan pengirim</b><i> filled out if the bearer of this form
                        is not applicant</i>
                </div>
                <div class="text-man">
                    <table border="0" width="100%">
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>Nama</b><br>
                                <div style="margin-top: -7px;"><i>name</i></div>
                            </td>
                            <td colspan=""><input size="55" type="text" name="" id="nama_nonpengirim"></td>
                        </tr>
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>Alamat & nomor telepon</b><br>
                                <div style="margin-top: -7px;"><i>Address & telephone number</i></div>
                            </td>
                            <td colspan=""><input size="55" type="text" name="" id="alamat_nonpengirim"></td>
                        </tr>
                        <tr>
                            <td class="text-man" style="vertical-align: text-top;"><b>NIK / paspor (WNA)</b><br>
                                <div style="margin-top: -7px;"><i>ID number</i></div>
                            </td>
                            <td colspan=""><input size="55" type="text" name="" id="nik_nonpengirim"></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
<!-- #313e4f -->