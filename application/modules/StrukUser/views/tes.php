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
                    <!-- bank penerima -->
                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:107px;top:239px;width:342px;height:50px'><?php echo $data->bank ?></span>
                    <![endif]>
                    <!-- selesai bank penerima -->
                    <table border="0" width="981" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="957">
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1034" style='position:absolute;left:308.25pt;top:55.5pt;width:1in;
 height:12.75pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:288px;top:12px;width:98px;height:
15px'><?php echo date_format(date_create($data->tanggal), 'd-m-Y'); ?></span>
                                <![endif]>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1079" style='position:absolute;left:501pt;top:59.25pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:485px;top:18px;width:21px;height:22px'>
                                        <?= $data->pengirim == "nasabah" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1080" style='position:absolute;left:579pt;top:60pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <!-- pengirim (non nasabah) -->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:565px;top:18px;width:21px;height:22px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- pengirim (non nasabah) -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1027" style='position:absolute;left:192.75pt;top:82.5pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <!-- sknbi -->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:167px;top:40px;width:19px;height:18px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1029" style='position:absolute;left:119.25pt;top:82.5pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <!-- TT -->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:85px;top:40px;width:19px;height:18px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- selesaiTT -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1028" style='position:absolute;left:151.5pt;top:83.25pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <!-- rtgs -->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:124px;top:40px;width:19px;height:18px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- selesairtgs -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1025" style='position:absolute;left:65.25pt;top:84pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <!-- setoran -->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:35px;top:40px;width:19px;height:18px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- setoranselesai -->
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1030" style='position:absolute;left:237.75pt;top:81.75pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <!-- kliring -->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:214px;top:40px;width:19px;height:18px'><?php echo "&#10004;"  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1031" style='position:absolute;left:324pt;top:81.75pt;width:12.75pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <!-- bank -->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:300px;top:40px;width:19px;height:18px'><?php echo "&#10004;"  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1036" style='position:absolute;left:552pt;top:78pt;width:186pt;
 height:15.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:550px;top:40px;width:250px;
height:23px'><?php echo $data->nik ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1081" style='position:absolute;left:502.5pt;top:105.75pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <!-- informasi(perorangan) -->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:2;left:485px;top:62px;width:21px;height:22px'><?= $data->informasi == "perorangan" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                    <!-- informasi(perorangan) -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1082" style='position:absolute;left:579pt;top:104.25pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <!-- informasi(perusahaan) -->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:565px;top:62px;width:21px;height:22px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- informasi(perusahaan) -->
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1083" style='position:absolute;left:669.75pt;top:103.5pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                    <!-- informasi(pemerintahan) -->
                                    <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:657px;top:62px;width:21px;height:22px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- informasi(pemerintahan) -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1094" style='position:absolute;left:394.5pt;top:209.25pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <!-- metode(tunai) -->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:370px;top:175px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- selesai tunai -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1087" style='position:absolute;left:502.5pt;top:126.75pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->

                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:485px;top:88px;width:19px;
height:19px'><?= $data->status_penduduk2 == "penduduk" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1086" style='position:absolute;left:580.5pt;top:126pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <!-- status_penduduk2(bukan) -->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:565px;top:88px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- status_penduduk2(bukan) -->
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
vglayout;position:absolute;z-index:1;left:500px;top:110px;width:322px;
height:21px'><?php echo $data->nama2 ?></span>
                                    <![endif]>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1091" style='position:absolute;left:7in;top:161.25pt;width:240pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:500px;top:125px;width:322px;
height:21px'><?php echo $data->alamat2 ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1046" style='position:absolute;left:213pt;top:207.75pt;width:13.5pt;
 height:13.5pt;z-index:2'/><![endif]-->
                                    <!-- penerima -->
                                    <!-- perusahaan -->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:187px;top:165px;width:20px;
height:20px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- selesaiperusahaan -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1045" style='position:absolute;left:299.25pt;top:207pt;width:13.5pt;
 height:13.5pt;z-index:2'/><![endif]-->
                                    <!-- pemerintahan -->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:272px;top:165px;width:20px;
height:20px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- selesaipemerintahan -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1095" style='position:absolute;left:431.25pt;top:210pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:410px;top:175px;width:19px;
height:19px'><?= $data->metode == "debet" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1131" style='position:absolute;left:397.5pt;top:5in;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:373px;top:330px;width:19px;
height:19px'><?= $data->sumber == "gaji" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1108" style='position:absolute;left:681pt;top:208.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                    <!-- metode (cek) -->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:670px;top:175px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- selesai metode cek -->
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1105" style='position:absolute;left:507pt;top:208.5pt;width:166.5pt;
 height:13.5pt;z-index:1'/><![endif]-->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:488px;top:175px;width:224px;
height:20px'><?php echo $data->isi_debet ?></span>
                                    <![endif]>
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1047" style='position:absolute;left:135.75pt;top:225.75pt;width:15pt;
 height:12pt;z-index:1'/><![endif]-->
                                    <!-- status penduduk (penduduk) -->
                                    <![if !vml]><span
                                        style='mso-ignore:vglayout;
position:absolute;z-index:1;left:107px;top:190px;width:22px;height:18px'><?= $data->status_penduduk == "penduduk" ? "&#10004;" : ""  ?></span>
                                    <![endif]>
                                    <!-- status penduduk -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1048" style='position:absolute;left:213pt;top:225pt;width:13.5pt;
 height:13.5pt;z-index:1'/><![endif]-->
                                    <!-- status penduduk (bukan) -->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:190px;top:190px;width:20px;
height:20px'><?= "&#10004;"  ?></span>
                                    <![endif]>
                                    <!-- selesai -->
                                </p>
                                <p>
                                    <!--[if gte vml 1]><v:rect
 id="_x0000_s1049" style='position:absolute;left:134.25pt;top:242.25pt;width:245.25pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                    <!-- nama penerima -->
                                    <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:107px;top:210px;width:329px;
height:21px'><?= $data->nama ?>
                            </td></span>
                            <![endif]>
                            <!-- selesai nama penerima -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1050" style='position:absolute;left:134.25pt;top:257.25pt;width:245.25pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                <!-- no rek penerima -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:107px;top:225px;width:329px;
height:21px'><?= $data->no_rek ?></span>
                                <![endif]>
                                <!-- selesai no rek penerima -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1039" style='position:absolute;left:136.5pt;top:209.25pt;width:15pt;
 height:12pt;z-index:1'/><![endif]-->
                                <!-- perorangan -->
                                <![if !vml]><span
                                    style='mso-ignore:vglayout;
position:absolute;z-index:1;left:107px;top:165px;width:22px;height:18px'><?= $data->penerima == "perorangan" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!-- selesaiperorangan -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1161" style='position:absolute;left:681pt;top:262.5pt;width:62.25pt;
 height:10.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:690px;top:230px;width:85px;
height:16px'><?php echo $data->nominal2 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1160" style='position:absolute;left:681pt;top:248.25pt;width:62.25pt;
 height:12.75pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:690px;top:215px;width:85px;
height:19px'><?php echo $data->nominal ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1159" style='position:absolute;left:615.75pt;top:262.5pt;width:63pt;
 height:12.75pt;z-index:5'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:5;left:610px;top:230px;width:86px;
height:19px'><?php echo $data->valuta2 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1158" style='position:absolute;left:615pt;top:247.5pt;width:63pt;
 height:12.75pt;z-index:5'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:5;left:610px;top:215px;width:86px;
height:19px'><?php echo $data->valuta ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1157" style='position:absolute;left:497.25pt;top:262.5pt;width:117.75pt;
 height:13.5pt;z-index:4'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:4;left:500px;top:230px;width:159px;
height:20px'><?php echo $data->no_cek2 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1156" style='position:absolute;left:496.5pt;top:248.25pt;width:117.75pt;
 height:13.5pt;z-index:4'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:4;left:500px;top:215px;width:159px;
height:20px'><?php echo $data->no_cek ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1155" style='position:absolute;left:399pt;top:265.5pt;width:96.75pt;
 height:12.75pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:3;left:400px;top:230px;width:131px;
height:19px'><?php echo $data->bank_tertarik2 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1119" style='position:absolute;left:437.25pt;top:297.75pt;width:306.75pt;
 height:23.25pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:425px;top:263px;width:411px;
height:33px'><?php echo $data->terbilang ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1112" style='position:absolute;left:557.25pt;top:277.5pt;width:184.5pt;
 height:13.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:537px;top:248px;width:248px;
height:20px'><?php echo $data->stor ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1052" style='position:absolute;left:133.5pt;top:4in;width:245.25pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                <!-- alamat penerima -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:107px;top:252px;width:329px;
height:21px'><?php echo $data->alamat ?></span>
                                <![endif]>
                                <!-- selesai alamat penerima -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1053" style='position:absolute;left:134.25pt;top:303.75pt;width:245.25pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                <!-- jn_identitas penerima -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:107px;top:267px;width:329px;
height:21px'><?php echo $data->jn_identitas ?></span>
                                <![endif]>
                                <!-- selesai jn_identitas penerima -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1055" style='position:absolute;left:115.5pt;top:328.5pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <!-- tujuan transaksi tabungan -->
                                <![if !vml]><span
                                    style='mso-ignore:vglayout;
position:absolute;z-index:2;left:80px;top:290px;width:21px;height:22px'><?= $data->tujuan_transaksi == "tabungan" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!-- tujuan transaksi tabungan -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1057" style='position:absolute;left:205.5pt;top:327pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <!-- tujuan transaksi pembayaran -->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:175px;top:290px;width:21px;height:22px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- tujuan transaksi pembayaran -->
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1062" style='position:absolute;left:309pt;top:345pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <!-- tujuan transaksi donasi -->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:280px;top:313px;width:21px;height:22px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- tujuan transaksi donasi -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1059" style='position:absolute;left:308.25pt;top:325.5pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <!-- tujuan transaksi biaya -->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:280px;top:290px;width:21px;height:22px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- tujuan transaksi biaya -->
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1060" style='position:absolute;left:115.5pt;top:346.5pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <!-- tujuan transaksi bisnis -->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:80px;top:313px;width:21px;height:22px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- tujuan transaksi bisnis -->
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1061" style='position:absolute;left:207pt;top:345.75pt;width:14.25pt;
 height:15pt;z-index:2'/><![endif]-->
                                <!-- tujuan transaksi pembelian barang -->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:2;left:175px;top:313px;width:21px;height:22px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- tujuan transaksi pembelian barang -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1132" style='position:absolute;left:482.25pt;top:359.25pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- sumber(tabungan) -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:465px;top:330px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- selesai -->
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
                                <!-- sumber(warisan) -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:570px;top:330px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- selesao -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1135" style='position:absolute;left:673.5pt;top:358.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- sumber(dana) -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:660px;top:330px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- selesai -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1162" style='position:absolute;left:114.75pt;top:364.5pt;width:261pt;
 height:17.25pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:90px;top:330px;width:350px;
height:25px'><?php echo $data->berita_transaksi ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1139" style='position:absolute;left:674.25pt;top:377.25pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- sumber(sumbangan) -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:660px;top:350px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- selesai -->
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1138" style='position:absolute;left:592.5pt;top:378.75pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- sumber(hasil) -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:570px;top:350px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- selesai -->
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1137" style='position:absolute;left:480.75pt;top:379.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- sumber(penjual) -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:465px;top:350px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- selesai -->
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1136" style='position:absolute;left:397.5pt;top:380.25pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- sumber(hibah) -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:373px;top:350px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!-- selesai -->
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1074" style='position:absolute;left:209.25pt;top:437.25pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:200px;top:405px;width:230px;height:18px'><?php echo $data->biaya_kores ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1073" style='position:absolute;left:210pt;top:424.5pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:200px;top:393px;width:230px;height:18px'><?php echo $data->biaya_pengiriman ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1072" style='position:absolute;left:209.25pt;top:411.75pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:200px;top:378px;width:230px;height:18px'><?php echo $data->komisi ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1071" style='position:absolute;left:209.25pt;top:399pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:200px;top:365px;width:230px;height:18px'><?php echo $data->jml_transfer ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1075" style='position:absolute;left:210pt;top:450.75pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:200px;top:418px;width:230px;height:18px'><?php echo $data->sub_total ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1076" style='position:absolute;left:210pt;top:464.25pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:200px;top:433px;width:230px;height:18px'><?php echo $data->kurs ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1077" style='position:absolute;left:209.25pt;top:475.5pt;width:171pt;
 height:12pt;z-index:3'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:3;left:200px;top:448px;width:230px;height:18px'><?php echo $data->total ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1140" style='position:absolute;left:398.25pt;top:427.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- biaya_trans(tunai) -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:370px;top:395px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1141" style='position:absolute;left:462.75pt;top:427.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:445px;top:395px;width:19px;
height:19px'><?= $data->biaya_trans == "Debet rekening" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1144" style='position:absolute;left:546.75pt;top:426pt;width:192.75pt;
 height:14.25pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:530px;top:400px;width:259px;
height:21px'><?php echo $data->isi_rek ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1148" style='position:absolute;left:625.5pt;top:453.75pt;width:90pt;
 height:13.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:620px;top:430px;width:122px;
height:20px'><?php echo $data->lain ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1147" style='position:absolute;left:568.5pt;top:457.5pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:545px;top:430px;width:19px;
height:19px'><?= $data->biaya_bank == "lainnya" ? "&#10004;" : ""  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1145" style='position:absolute;left:399pt;top:459pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- biaya bank pengirim -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:370px;top:430px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1146" style='position:absolute;left:486.75pt;top:459pt;width:12.75pt;
 height:12.75pt;z-index:2'/><![endif]-->
                                <!-- biaya bank penerima -->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:2;left:467px;top:430px;width:19px;
height:19px'><?= "&#10004;"  ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1152" style='position:absolute;left:507.75pt;top:513pt;width:228pt;
 height:16.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:490px;top:490px;width:306px;
height:24px'><?php echo $data->alamat3 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1151" style='position:absolute;left:507pt;top:495pt;width:228pt;
 height:16.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:490px;top:470px;width:306px;
height:24px'><?php echo $data->nama3 ?></span>
                                <![endif]>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1153" style='position:absolute;left:507.75pt;top:531pt;width:228pt;
 height:16.5pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:
vglayout;position:absolute;z-index:1;left:490px;top:510px;width:306px;
height:24px'><?php echo $data->nik_paspor ?></span>
                                <![endif]>
                            </p>
                            <p>
                                <!--[if gte vml 1]><v:rect
 id="_x0000_s1078" style='position:absolute;left:256.5pt;top:537pt;width:119.25pt;
 height:12pt;z-index:1'/><![endif]-->
                                <![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:1;left:230px;top:500px;width:161px;height:18px'><?php echo $data->ttd ?></span>
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
vglayout;position:absolute;z-index:3;left:400px;top:215px;width:131px;
height:19px'><?php echo $data->bank_tertarik ?></span>
            <![endif]>
            </td>
            </tr>
            </table>
            <?php endforeach; ?>
    </div>
</body>

</html>