<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export 01</title>
    <style>
        @page {
            margin: 20px 20px;
        }

        body {
            font-family: arial, sans-serif;
            color: #222;
            font-size: 14px;
        }

        .page1-outer {
            padding: 100px 50px;
        }

        .page2-outer {
            padding: 100px 50px;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        h2 {
            font-size: 25px;
            line-height: 35px;
            margin: 0px 0px 50px 0px;
            padding: 0px;
            color: #000;
        }

        h3 {
            font-size: 15px;
            line-height: 20px;
            margin: 0px 0px 50px 0px;
            padding: 0px;
            color: #000;
        }

        .cover-image {
            text-align: center;
            margin-bottom: 150px;
        }

        .cover-image img {
            width: 90%;
        }

        .peserta-didik {
            line-height: 30px;
            margin-bottom: 30px;
            font-size: 17px;
        }

        .peserta-didik .big {
            font-size: 25px;
        }

        .detail-siswa {
            margin: 0px auto 60px auto;
        }

        .detail-siswa td {
            padding: 3px 10px;
            font-size: 16px;
        }

        .space-x-sm {
            /* display: inline-block; */
            /* margin: 0px 2px; */
        }


        .page-break {
            page-break-after: always;
        }

        .table-type1 {
            width: 100%;
            margin-bottom: 50px;
        }

        .table-type1 tr td {
            padding: 3px;
        }

        .table-type1 tr td:first-child {
            width: 250px;
        }

        .table-type1 tr td:last-child {
            text-align: right;
            width: 250px;
        }

        .photo-signature {
            margin: auto;
            display: block;
        }

        .foto-siswa {
            width: 120px;
            height: 150px;
            border: 1px solid #000;
            display: block;
            margin-right: 280px;
        }

        .signature-kepsek {
            height: 80px;
            margin: 12px 35px 0px 12px;
            display: block;
        }

        .cap-kepsek {
            height: 120px;
            display: block;
            left: 0px;
            top: 40px;
        }

        .image-peserta-didik {
            width: 120px;
            height: auto;
            position: absolute;
            left: -50px;
            top: 50%;
            transform: translate(-30%, -85%)
        }

        .l-cap-kepsek {
            right: -10%;
            top: 0;
        }

        .kop-surat {
            width: 95%;
            margin: 0px auto 10px;
            font-size: 12px;
            border-bottom: 4px solid #000;
            padding-bottom: 10px;
        }

        .kop-surat td {
            line-height: 19px;
        }

        .kop-surat td small {
            line-height: 16px;
        }

        .kop-surat .highlight {
            color: rgb(43, 140, 179);
            font-size: 16px;
            font-weight: bold;
            margin: 5px 0px;
        }


        .mb-0 {
            margin-bottom: 0px;
        }

        .mt-0 {
            margin-top: 0px;
        }

        .mx-auto {
            margin: 0px auto;
        }

        .ml-20 {
            margin-left: 20px;
        }

        .mt-40 {
            margin-top: 40px;
        }

        .mt-100 {
            margin-top: 100px;
        }

        .mx-20 {
            margin: 0px 20px;
        }

        .w-100 {
            width: 100%;
        }

        .mb-40 {
            margin-bottom: 40px;
        }

        .p-relative {
            position: relative;
        }

        .p-absolute {
            position: absolute;
        }

        .date-border {
            border-bottom: 1px dotted #000;
        }

        .border-b {
            border-bottom: 1px solid #000;
        }

        .w-75 {
            width: 75%;
        }

    </style>
</head>
<body>
    <table class="kop-surat">
        <tr>
            <td width="">
                <img src="assets/img/logo tutwuri.jpg" height="90" width="auto" alt="">
            </td>
            <td class="text-center ">
                <b>
                    YAYASAN XANOV BAHTERA MULIA
                    <br>PUSAT KEGIATAN BELAJAR MASYARAKAT
                </b>

                <div class="highlight">PIWULANG BECIK</div>
                <small>NPSN P9970512 - SK Operasional No. 421.9/3385/401
                </small> <br>
                <small>
                    Jl Kaplingrejo I/7 Rt/Rw 09/03, Gendongan, Salatiga, Jawa Tengah<br />
                    Telp. 0298 3433143 – <a href="mailto:cs@piwulangbecik.sch.id">cs@piwulangbecik.sch.id</a> – <a href="https://piwulangbecik.sch.id">https://piwulangbecik.sch.id</a><br />
                </small>
            </td>
            <td>
                <img src="assets/img/logo piwulang becik.png" height="90" width="auto" alt="">
            </td>
        </tr>
    </table>

    <h3 class="text-center mb-0">
        SURAT KETERANGAN INDENTITAS PESERTA DIDIK
    </h3>
    <p class="text-center mt-0">
        PBx/SKI/2024/XII/2108039
    </p>

    {{--  <p class="ml-20 mt-40">Yang bertanda tangan di bawah ini kepala sekolah PKBM PIWULANG BECIK menerangkan bahwa :</p>  --}}


    <table class="table-type-1 mx-20 w-100 mb-40">
        <tr>
            <td width="5%">1.</td>

            <td width="28%">Nama Lengkap Peserta Didik</td>
            <td width="1%">:</td>
            <td>&nbsp;&nbsp;&nbsp; Kaizen Hanif</td>

        </tr>
        <tr>
            <td>2.</td>
            <td >NISN/NIS</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; 0112960684/2108039</td>

        </tr>
        <tr>
            <td>3.</td>
            <td >Tempat, Tgl Lahir</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Sibolga, 24/10/2011</td>
        </tr>
        <tr>
            <td>4.</td>
            <td >Jenis Kelamin</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Laki-laki</td>
        </tr>
        <tr>
            <td>5.</td>
            <td >Agama</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Islam</td>
        </tr>
        <tr>
            <td>6.</td>
            <td >Pendidikan Sebelumnya</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Kelas 7</td>
        </tr>
        <tr>
            <td>7.</td>
            <td >Alamat Peserta Didik</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; JL. S. Parman Gg. Bagan No.5</td>

        </tr>
        <tr>
            <td>8.</td>
            <td>Nama Orang Tua</td>
        </tr>
        <tr>
            <td></td>
            <td >Ayah</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Andri Yanto</td>
        </tr>
        <tr>
            <td></td>
            <td >Ibu</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Selly Maryati</td>
        </tr>
        <tr>
            <td>9.</td>
            <td>Pekerjaan Orang Tua</td>
        </tr>
        <tr>
            <td></td>
            <td >Ayah</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; PNS/TNI/Polri</td>
        </tr>
        <tr>
            <td></td>
            <td >Ibu</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Wiraswasta</td>
        </tr>
        
        <tr>
            <td>10.</td>
            <td>Alamat Orang Tua</td>
        </tr>
        <tr>
            <td></td>
            <td >Jalan</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Jl. Kuda Laut No 08</td>
        </tr>
        <tr>
            <td></td>
            <td >Kelurahan/Desa</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Pasar Belakang</td>
        </tr>
        <tr>
            <td></td>
            <td >Kecamatan</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Kec. Sibolga Kota</td>
        </tr>
        <tr>
            <td></td>
            <td >Kabupaten</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Kota Sibolga</td>
        </tr>
        <tr>
            <td></td>
            <td >Provinsi</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; Sumatera Utara</td>
        </tr>
        <tr>
            <td>11.</td>
            <td>Wali Peserta Didik</td>
        </tr>
        <tr>
            <td></td>
            <td>a. Nama Wali</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; </td>
        </tr>
        <tr>
            <td></td>
            <td >b. Pekerjaan</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; </td>
        </tr>
        <tr>
            <td></td>
            <td >c. Alamat</td>
            <td>:</td>
            <td>&nbsp;&nbsp;&nbsp; </td>
        </tr>

    </table>
    <p class="ml-20 mt-40">Demikian surat keterangan ini dibuat, untuk diketahui dan dipergunakan sebagaimana mestinya.</p>
    <div class="photo-signature mt-40">
        <table width="100%">
            <tbody>
                <tr>
                    <td>

                    </td>
                    <td class="text-center p-relative" width="200">
                        <div>
                            Salatiga, 3 September 2024<br />
                            Kepala PKBM Piwulang Becik
                        </div>
                        <img src="assets/img/peserta-didik.png" alt="" class="image-peserta-didik">
                        <img class="cap-kepsek p-absolute" src="assets/img/cap.png" alt="">
                        <img class="signature-kepsek p-relative l-cap-kepsek" src="assets/img/ttd kepala sekolah.png" />
                        <div>
                            <p class="mb-0"><b><u>Aris Prasetya, S.Si.</u></b></p>
                            <span>NUPTK. 2360748649130103</span>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



</body>
</html>
