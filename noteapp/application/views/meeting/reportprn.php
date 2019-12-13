<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>



</head>

<style>

    table.printreport {

        font-family: "Times New Roman", Times, serif;

        border: 1px solid #000000;

        text-align: left;

        border-collapse: collapse;

    }



    table.printreport td,

    table.printreport th {

        padding: 10px 10px;

    }



    table.printreport tbody td {

        font-size: 12px;

    }



    table.printreport thead {

        background: #DDDDDD;

    }



    table.printreport thead th {

        font-weight: normal;

    }



    table.printreport tfoot {

        font-weight: bold;

    }

    table.printreport h1 {
        font-size: 12px
    }

</style>



<?php

function tanggal_indo($tanggal, $cetak_hari = false)

{

    $hari = array(

        1 =>    'Senin',

        'Selasa',

        'Rabu',

        'Kamis',

        'Jumat',

        'Sabtu',

        'Minggu'

    );



    $bulan = array(

        1 =>   'Januari',

        'Februari',

        'Maret',

        'April',

        'Mei',

        'Juni',

        'Juli',

        'Agustus',

        'September',

        'Oktober',

        'November',

        'Desember'

    );

    $split       = explode('-', $tanggal);

    $tgl_indo = $split[2] . ' ' . $bulan[(int) $split[1]] . ' ' . $split[0];



    if ($cetak_hari) {

        $num = date('N', strtotime($tanggal));

        return $hari[$num] . ', ' . $tgl_indo;

    }

    return $tgl_indo;

}



?>



<body onload="window.print()">

    <table class="printreport" border="0" width="100%" ;>

        <!-- <tr>

            <td colspan="5" align="center" ;>



            </td>

        </tr> -->

        <tr>

            <td colspan="5" align="center" ;>

                <img src="<?= base_url('assets/img/taspen_top.jpg') ?> " width="75" height="75">

                <br>

                <u><b>NOTULEN RAPAT</b></u>

                <br>

                Nomor: <?= $idrep['no_report']; ?>

            </td>

        </tr>

        <tr>

            <td></td>

            <td style="border-bottom: 1px solid black">

                Hari/Tanggal:

                <br>

                Tempat

                <br>

                Waktu

                <br>

            </td>

            <td style="border-bottom: 1px solid black">

                <?php echo $idrep['nm_day']; ?>, <?php echo tanggal_indo($idrep['dt_report']); ?>

                <br>

                <?php echo $idrep['pl_report']; ?>

                <br>

                <?php echo $idrep['st_report']; ?> s.d Selesai

            </td>

            <td style="border-bottom: 1px solid black"></td>

            <td></td>

        </tr>

        <tr>

            <td></td>

            <td>

                <b><i>I. Peserta</i></b>
                <br> <br>

                <?php

                $str = $idrep['mm_report'];

                $exploded = preg_split('/[0-9]+\./', $str);

                foreach ($exploded as $index => $answer) {

                    if (!empty($answer)) {

                        echo "&nbsp;" . "&nbsp;" . "&nbsp;" . $index . "." . "&nbsp;" . "&nbsp;" . $answer . "<br />";

                    }

                }

                ?>

            </td>

            <td>

                &nbsp;

                <br><br>

                <?php

                $str = $idrep['mt_report'];

                $exploded = preg_split('/[0-9]+\./', $str);

                foreach ($exploded as $index => $answer) {

                    if (!empty($answer)) {

                        echo   "(" . $answer . ")" . "<br />";

                    }

                }

                ?>

            </td>

            <td></td>

            <td></td>

        </tr>

        <tr>

            <td></td>

            <td align="justify" colspan="3">

                <b><i>II. Jalannya Rapat</i></b>

                <br> <br>

                    &nbsp; &nbsp; &nbsp; <?= $idrep['rd_report']; ?>

            </td>

            <td></td>

        </tr>

        <tr>

            <td></td>

            <td align="justify" colspan="3">

                <b><i>III. Kesimpulan Rapat</i></b>

                <br><br>

                <?php

                $str = $idrep['cn_report'];

                $exploded = preg_split('/[0-9]+\./', $str);

                foreach ($exploded as $index => $answer) {

                    if (!empty($answer)) {

                        echo "&nbsp;" . "&nbsp;" . "&nbsp;" . $index . "." . "&nbsp;" . "&nbsp;" . $answer . "<br />";

                    }

                }

                ?>

            </td>

            <td></td>

        </tr>

        <tr>

            <td></td>

            <td colspan="3">

                Mengingat tidak ada lagi permasalahan yang perlu dibahas, rapat ditutup oleh pimpinan rapat pada pukul <?php echo $idrep['fi_report']; ?> dengan ucapan terima kasih kepada peserta rapat.

                <br><br><br>

            </td>

            <td></td>

        </tr>

        <tr>

            <td></td>

            <td colspan="2"></td>



            <td> Madiun, <?= tanggal_indo($idrep['dt_report']); ?></td>

            <td></td>

        </tr>

        <tr>

            <td></td>

            <td>

                Mengetahui,

                <br>

                Kepala Cabang

                <br><br><br><br><br>

                <u>YONPIZERA</u>

                <br>

                NIK. 2080

                <br><br><br>

            </td>

            <td>

                &nbsp;

            </td>

            <td>

                &nbsp;

                <br>

                Notulis,

                <br><br><br><br><br>

                <u><?php echo $idrep['nm_user']; ?></u>

                <br>

                NIK. <?php echo $idrep['id_nik']; ?>

                <br><br><br>

            </td>

            <td></td>

        </tr>



    </table>

    <table width="100%">

        <tr>

            <td colspan="5" align="center" ;>

                <img src="<?= base_url('assets/img/taspen_bot.jpg') ?> " width="150" height="25">

            </td>

        </tr>

    </table>

</body>



</html>