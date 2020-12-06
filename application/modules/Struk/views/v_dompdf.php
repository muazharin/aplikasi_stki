<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="File-List" href="<?php echo base_url() ?>assets/slip_files/filelist.xml">
    <title>Slip Mandiri</title>
    <style>
    body {
        font-family: "DejaVu Sans", sans-serif;

        font-size: 12px;
        color: black;
    }
    </style>
</head>

<body>
    <div class="container">
        <?php
        foreach ($struk as $data) : ?>
        <input type="hidden" value="<?= $data->id_struk ?>">
        <p>&nbsp;</p>
        <table border="0" width="83%">
            <tr>
                <td>
                    <!--[if gte vml 1]><v:rect id="_x0000_s1051"
 style='position:absolute;left:133.5pt;top:272.25pt;width:245.25pt;height:14.25pt;
 z-index:1'/><![endif]-->
                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:300px;top:378px;width:342px;height:50px'><?php echo $data->bank ?></span>
                    <![endif]>
                    <table border="0" width="981" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="957">
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1034" style='position:absolute;left:308.25pt;top:55.5pt;width:1in;
 height:12.75pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:330px;top:12px;width:98px;height:
15px'><?php echo date_format(date_create($data->tanggal), 'd-m-Y'); ?></span>
                                <![endif]>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1079" style='position:absolute;left:501pt;top:59.25pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:767px;top:40px;width:21px;height:22px'>
                                        <?= $data->pengirim == "nasabah" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1080" style='position:absolute;left:579pt;top:60pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:2;left:771px;top:40px;width:21px;height:22px'><?= $data->pengirim == "non nasabah" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1027" style='position:absolute;left:192.75pt;top:82.5pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:1;left:256px;top:43px;width:19px;height:18px'><?= $data->transaksi == "sknbi" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1029" style='position:absolute;left:119.25pt;top:82.5pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:1;left:158px;top:43px;width:19px;height:18px'><?= $data->transaksi == "tt" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1028" style='position:absolute;left:151.5pt;top:83.25pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:1;left:201px;top:43px;width:19px;height:18px'><?= $data->transaksi == "rtgs" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1025" style='position:absolute;left:65.25pt;top:84pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:1;left:86px;top:43px;width:19px;height:18px'><?= $data->transaksi == "setoran" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1030" style='position:absolute;left:237.75pt;top:81.75pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:1;left:300px;top:43px;width:19px;height:18px'><?= $data->transaksi == "kliring" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1031" style='position:absolute;left:324pt;top:81.75pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:1;left:431px;top:43px;width:19px;height:18px'><?= $data->transaksi == "bank" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1036" style='position:absolute;left:552pt;top:78pt;width:186pt;
 height:15.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:890px;top:80px;width:250px;
height:23px'><?php echo $data->nik ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1081" style='position:absolute;left:502.5pt;top:105.75pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:2;left:669px;top:140px;width:21px;height:22px'><?= $data->informasi == "perorangan" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1082" style='position:absolute;left:579pt;top:104.25pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:2;left:771px;top:138px;width:21px;height:22px'><?= $data->informasi == "perusahaan" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1083" style='position:absolute;left:669.75pt;top:103.5pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:2;left:892px;top:137px;width:21px;height:22px'><?= $data->informasi == "pemerintah" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1094" style='position:absolute;left:394.5pt;top:209.25pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:525px;top:278px;width:19px;
height:19px'><?= $data->metode == "tunai" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1087" style='position:absolute;left:502.5pt;top:126.75pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:669px;top:168px;width:19px;
height:19px'><?= $data->status_penduduk2 == "penduduk" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1086" style='position:absolute;left:580.5pt;top:126pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:773px;top:167px;width:19px;
height:19px'><?= $data->status_penduduk2 == "bukan penduduk" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1038" style='position:absolute;left:29.25pt;top:141pt;width:276pt;
 height:58.5pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:90px;top:95px;width:370px;
height:80px'><?php echo $data->validasi ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1090" style='position:absolute;left:7in;top:142.5pt;width:240pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:671px;top:189px;width:322px;
height:21px'><?php echo $data->nama2 ?></span>
                                    <![endif]>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1091" style='position:absolute;left:7in;top:161.25pt;width:240pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:671px;top:214px;width:322px;
height:21px'><?php echo $data->alamat2 ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1046" style='position:absolute;left:213pt;top:207.75pt;width:13.5pt;
 height:13.5pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:283px;top:220px;width:20px;
height:20px'><?= $data->penerima == "perusahaan" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1045" style='position:absolute;left:299.25pt;top:207pt;width:13.5pt;
 height:13.5pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:398px;top:275px;width:20px;
height:20px'><?= $data->penerima == "pemerintahan" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1095" style='position:absolute;left:431.25pt;top:210pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:574px;top:279px;width:19px;
height:19px'><?= $data->metode == "debet rekening" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1131" style='position:absolute;left:397.5pt;top:5in;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:529px;top:479px;width:19px;
height:19px'><?= $data->sumber == "gaji" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1108" style='position:absolute;left:681pt;top:208.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:907px;top:277px;width:19px;
height:19px'><?= $data->metode == "cek" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1105" style='position:absolute;left:507pt;top:208.5pt;width:166.5pt;
 height:13.5pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:675px;top:277px;width:224px;
height:20px'><?php echo $data->isi_debet ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1047" style='position:absolute;left:135.75pt;top:225.75pt;width:15pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:1;left:150px;top:310px;width:22px;height:18px'><?= $data->status_penduduk == "penduduk" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1048" style='position:absolute;left:213pt;top:225pt;width:13.5pt;
 height:13.5pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:365px;top:270px;width:20px;
height:20px'><?= $data->status_penduduk == "bukan penduduk" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1049" style='position:absolute;left:134.25pt;top:242.25pt;width:245.25pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:300px;top:340px;width:329px;
height:21px'><?= $data->nama ?>
                            </td></span>
                            <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1050" style='position:absolute;left:134.25pt;top:257.25pt;width:245.25pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:300px;top:360px;width:329px;
height:21px'><?= $data->no_rek ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1039" style='position:absolute;left:136.5pt;top:209.25pt;width:15pt;
 height:12pt;z-index:1'/><![endif]-->
                                <![if !vml]><span
                                    style='mso-ignore:vglayout;
position:absolute;z-index:1;left:255px;top:240px;width:22px;height:18px'><?= $data->penerima == "perorangan" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1161" style='position:absolute;left:681pt;top:262.5pt;width:62.25pt;
 height:10.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:1100px;top:349px;width:85px;
height:16px'><?php echo $data->nominal2 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1160" style='position:absolute;left:681pt;top:248.25pt;width:62.25pt;
 height:12.75pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:1100px;top:330px;width:85px;
height:19px'><?php echo $data->nominal ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1159" style='position:absolute;left:615.75pt;top:262.5pt;width:63pt;
 height:12.75pt;z-index:5'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:5;left:1010px;top:349px;width:86px;
height:19px'><?php echo $data->valuta2 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1158" style='position:absolute;left:615pt;top:247.5pt;width:63pt;
 height:12.75pt;z-index:5'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:5;left:1010px;top:329px;width:86px;
height:19px'><?php echo $data->valuta ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1157" style='position:absolute;left:497.25pt;top:262.5pt;width:117.75pt;
 height:13.5pt;z-index:4'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:4;left:862px;top:349px;width:159px;
height:20px'><?php echo $data->no_cek2 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1156" style='position:absolute;left:496.5pt;top:248.25pt;width:117.75pt;
 height:13.5pt;z-index:4'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:4;left:862px;top:330px;width:159px;
height:20px'><?php echo $data->no_cek ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1155" style='position:absolute;left:399pt;top:265.5pt;width:96.75pt;
 height:12.75pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:3;left:731px;top:353px;width:131px;
height:19px'><?php echo $data->bank_tertarik2 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1119" style='position:absolute;left:437.25pt;top:297.75pt;width:306.75pt;
 height:23.25pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:880px;top:430px;width:411px;
height:33px'><?php echo $data->terbilang ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1112" style='position:absolute;left:557.25pt;top:277.5pt;width:184.5pt;
 height:13.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:942px;top:400px;width:248px;
height:20px'><?php echo $data->stor ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1052" style='position:absolute;left:133.5pt;top:4in;width:245.25pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:300px;top:400px;width:329px;
height:21px'><?php echo $data->alamat ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1053" style='position:absolute;left:134.25pt;top:303.75pt;width:245.25pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:300px;top:425px;width:329px;
height:21px'><?php echo $data->jn_identitas ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1055" style='position:absolute;left:115.5pt;top:328.5pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <![if !vml]><span
                                    style='mso-ignore:vglayout;
position:absolute;z-index:2;left:153px;top:437px;width:21px;height:22px'><?= $data->tujuan_transaksi == "tabungan" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1057" style='position:absolute;left:205.5pt;top:327pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <![if !vml]><span
                                    style='mso-ignore:vglayout;
position:absolute;z-index:2;left:360px;top:460px;width:21px;height:22px'><?= $data->tujuan_transaksi == "pembayaran" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1062" style='position:absolute;left:309pt;top:345pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <![if !vml]><span
                                    style='mso-ignore:vglayout;
position:absolute;z-index:2;left:411px;top:459px;width:21px;height:22px'><?= $data->tujuan_transaksi == "donasi" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1059" style='position:absolute;left:308.25pt;top:325.5pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <![if !vml]><span
                                    style='mso-ignore:vglayout;
position:absolute;z-index:2;left:410px;top:433px;width:21px;height:22px'><?= $data->tujuan_transaksi == "biaya hidup" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1060" style='position:absolute;left:115.5pt;top:346.5pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <![if !vml]><span
                                    style='mso-ignore:vglayout;
position:absolute;z-index:2;left:153px;top:461px;width:21px;height:22px'><?= $data->tujuan_transaksi == "bisnis" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1061" style='position:absolute;left:207pt;top:345.75pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <![if !vml]><span
                                    style='mso-ignore:vglayout;
position:absolute;z-index:2;left:275px;top:460px;width:21px;height:22px'><?= $data->tujuan_transaksi == "pembelian barang" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1132" style='position:absolute;left:482.25pt;top:359.25pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:642px;top:478px;width:19px;
height:19px'><?= $data->sumber == "tabungan" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1133" style='position:absolute;left:397.5pt;top:5in;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:529px;top:479px;width:19px;
height:19px'><img width=19 height=19 src="slip_files/image006.gif" v:shapes="_x0000_s1133"></span> -->
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1134" style='position:absolute;left:592.5pt;top:357.75pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:789px;top:476px;width:19px;
height:19px'><?= $data->sumber == "warisan" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1135" style='position:absolute;left:673.5pt;top:358.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:897px;top:477px;width:19px;
height:19px'><?= $data->sumber == "dana" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1162" style='position:absolute;left:114.75pt;top:364.5pt;width:261pt;
 height:17.25pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:230px;top:508px;width:350px;
height:25px'><?php echo $data->berita_transaksi ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1139" style='position:absolute;left:674.25pt;top:377.25pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:898px;top:502px;width:19px;
height:19px'><?= $data->sumber == "sumbangan" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1138" style='position:absolute;left:592.5pt;top:378.75pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:789px;top:504px;width:19px;
height:19px'><?= $data->sumber == "hasil" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1137" style='position:absolute;left:480.75pt;top:379.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:640px;top:505px;width:19px;
height:19px'><?= $data->sumber == "penjual" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1136" style='position:absolute;left:397.5pt;top:380.25pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:529px;top:506px;width:19px;
height:19px'><?= $data->sumber == "hibah" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1074" style='position:absolute;left:209.25pt;top:437.25pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:415px;top:635px;width:230px;height:18px'><?php echo $data->biaya_kores ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1073" style='position:absolute;left:210pt;top:424.5pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:415px;top:620px;width:230px;height:18px'><?php echo $data->biaya_pengiriman ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1072" style='position:absolute;left:209.25pt;top:411.75pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:415px;top:600px;width:230px;height:18px'><?php echo $data->komisi ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1071" style='position:absolute;left:209.25pt;top:399pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:415px;top:573px;width:230px;height:18px'><?php echo $data->jml_transfer ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1075" style='position:absolute;left:210pt;top:450.75pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:415px;top:655px;width:230px;height:18px'><?php echo $data->sub_total ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1076" style='position:absolute;left:210pt;top:464.25pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:415px;top:670px;width:230px;height:18px'><?php echo $data->kurs ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1077" style='position:absolute;left:209.25pt;top:475.5pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:415px;top:697px;width:230px;height:18px'><?php echo $data->total ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1140" style='position:absolute;left:398.25pt;top:427.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:530px;top:569px;width:19px;
height:19px'><?= $data->biaya_trans == "tunai" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1141" style='position:absolute;left:462.75pt;top:427.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:616px;top:569px;width:19px;
height:19px'><?= $data->biaya_trans == "Debet rekening" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1144" style='position:absolute;left:546.75pt;top:426pt;width:192.75pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:728px;top:567px;width:259px;
height:21px'><?php echo $data->isi_rek ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1148" style='position:absolute;left:625.5pt;top:453.75pt;width:90pt;
 height:13.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:833px;top:604px;width:122px;
height:20px'><?php echo $data->lain ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1147" style='position:absolute;left:568.5pt;top:457.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:757px;top:609px;width:19px;
height:19px'><?= $data->biaya_bank == "lainnya" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1145" style='position:absolute;left:399pt;top:459pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:531px;top:611px;width:19px;
height:19px'><?= $data->biaya_bank == "pengirim" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1146" style='position:absolute;left:486.75pt;top:459pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:648px;top:611px;width:19px;
height:19px'><?= $data->biaya_bank == "penerima" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1152" style='position:absolute;left:507.75pt;top:513pt;width:228pt;
 height:16.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:800px;top:750px;width:306px;
height:24px'><?php echo $data->alamat3 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1151" style='position:absolute;left:507pt;top:495pt;width:228pt;
 height:16.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:800px;top:730px;width:306px;
height:24px'><?php echo $data->nama3 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1153" style='position:absolute;left:507.75pt;top:531pt;width:228pt;
 height:16.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:800px;top:775px;width:306px;
height:24px'><?php echo $data->nik_paspor ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1078" style='position:absolute;left:256.5pt;top:537pt;width:119.25pt;
 height:12pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:480px;top:775px;width:161px;height:18px'><?php echo $data->ttd ?></span>
                                <![endif]>
                </td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>
            <!--[if gte vml 1]><v:rect
 id="_x0000_s1154" style='position:absolute;left:398.25pt;top:249.75pt;width:96.75pt;
 height:12.75pt;z-index:3'/><![endif]-->
            <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:3;left:731px;top:332px;width:131px;
height:19px'><?php echo $data->bank_tertarik ?></span>
            <![endif]>
            </td>
            </tr>
            </table>
            <?php endforeach; ?>
    </div>
</body>

</html>