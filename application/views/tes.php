<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    * {
        box-sizing: border-box;
    }

    .header {
        overflow: hidden;
        background-color: #02004B;
        padding: 8px 4px;
    }

    .header-text {
        color: white;
    }

    .span_text {
        color: #000000;
    }

    .text-man {
        font-size: 12px;
    }

    .text {
        font-size: 10px;
    }

    .up_mar {
        margin-bottom: 0px;
    }

    input[type=checkbox] {
        /* Double-sized Checkboxes */
        -ms-transform: scale(1.0);
        /* IE */
        -moz-transform: scale(1.0);
        /* FF */
        -webkit-transform: scale(1.0);
        /* Safari and Chrome */
        -o-transform: scale(1.0);
        /* Opera */
        transform: scale(1.0);
        padding: 2px;
    }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="header">
                    <div class="header-text">
                        <h5 style="margin-bottom:-3px; margin-top: 10px"><b>aplikasi setoran/transfer/kliring/inkaso</b>
                        </h5><i>
                            deposit/transfer/clearing/collection form</i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div style="margin-bottom:-2px;"><b class="span_text text-man">kepada</b> to <b
                        class="span_text text-man"> PT Bank Mandiri (Persero) Tbk</b>&nbsp;&nbsp;&nbsp;&nbsp;<span
                        style="text-align: center;" class="text-man"><b>tanggal</b> <i>date</i><input type="date"
                            class="" name="" id="tgl"></span>
                </div>
                <span class="text-man">harap dilakukan transaksi berikut <i>please do this transaction:</i></span>

                <div class="up_mar">
                    <table width="20%" border="0" cellspacing="0" cellpadding="3">
                        <tr>
                            <td class="text-man up_mar span_text" style="vertical-align: text-top;"><b>
                                    transaksi</b><br>
                                <div style="margin-top: -7px;"><i>transaction</i></div>
                            </td>
                            <td class="text up_mar"><input type="checkbox" id="deposit" name="cb_1">&nbsp;
                            </td>
                            <td class="text up_mar span_text" style="vertical-align: text-top;"><b>setoran</b><br>
                                <div style="margin-top: -3px;"><i>deposit</i></div>
                            </td>
                            <td class="text up_mar"><input type="checkbox" id="tt" name="cb_1">&nbsp;
                            </td>
                            <td class="text up_mar span_text" style="vertical-align: text-top;"><b> TT</b><br>
                                <div style="margin-top: -3px;"><i>tt</i></div>
                            </td>
                            <td class="text up_mar"><input type="checkbox" id="rtgs" name="cb_1">&nbsp;
                            </td>
                            <td class="text up_mar span_text" style="vertical-align: text-top;"><b>RTGS</b><br>
                                <div style="margin-top: -5px;"><i>rtgs</i></div>
                            </td>
                            <td class="text up_mar"><input type="checkbox" id="kliring" name="cb_1">&nbsp;
                            </td>
                            <td class="text span_text" style="vertical-align: text-top;">
                                <b>Kliring-inkaso</b><br>
                                <div style="margin-top: -5px;"><i>clearing-collection</i></div>
                            </td>
                            <td class="text up_mar"><input type="checkbox" id="deposit" name="cb_1">&nbsp;
                            </td>
                            <td class="text up_mar span_text" style="vertical-align: text-top;"><b> setoran</b><br>
                                <div style="margin-top: -5px;"><i>deposit</i></div>
                            </td>
                            <td class="text up_mar"><input type="checkbox" id="deposit" name="cb_1">&nbsp;
                            </td>
                            <td class="text up_mar span_text" style="vertical-align: text-top;"><b> setoran</b><br>
                                <div style="margin-top: -5px;"><i>deposit</i></div>
                            </td>
                            <!-- <td class="text-man up_mar"><input type="checkbox" id="tt" name="cb_1" />
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
                            </td> -->
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>

</html>