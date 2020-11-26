<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        /* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font: 12pt "Tahoma";
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {
            padding: 1cm;
            border: 5px red solid;
            height: 257mm;
            outline: 2cm #FFEAEA solid;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
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
    <title>Document</title>
</head>

<body>
    <div class="book">
        <div class="container">
            <div class="row bk_color text-light">
                <div class="col-10">
                    <h5 style="margin-bottom:-3px; margin-top: 10px"><b>aplikasi setoran/transfer/kliring/inkaso</b></h5><i>
                        deposit/transfer/clearing/collection form</i>
                </div>
                <!-- <div class="col-2"><img src="<?= base_url() ?>assets/dist/img/mandiri.png" class="img-fluid" alt="Responsive image"></div> -->
            </div>

            <div class="row">
                <div class="col-6">
                    <div style="margin-bottom:-3px;"><b class="span_text text-man">kepada</b> to <b class="span_text text-man"> PT Bank Mandiri (Persero) Tbk</b><span style="float: right;" class="text-man">&nbsp;<b>tanggal</b> <i>date</i><input type="date" class="" name="" id="tgl"></span>
                    </div>
                    <span class="text-man ">harap dilakukan transaksi berikut <i>please do this transaction:</i></span>


                    <br><br><br>
                </div>
            </div>


        </div>

    </div>
</body>

</html>