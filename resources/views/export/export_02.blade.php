<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export 02</title>
    <style>
        @page {
            margin: 20px 20px;
        }

        body {
            font-family: arial, sans-serif;
            color: #222;
            font-size: 12px;
            padding: 0px 24px;

        }

        .text-center {
            text-align: center;
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
            font-size: 15px;
            font-weight: bold;
            margin: 5px 0px;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        h2 {
            font-size: 18px;
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

        .mb-0 {
            margin-bottom: 0px;
        }

        .font-italic {
            font-style: italic;
        }

        {{--  .font-italic span {
            text-decoration: line-through;
            text-decoration-thickness: 5px;
            -moz-text-decoration-thickness: 5px;
        }  --}} 
        table.type-2 {
            width: 100%;
            border-collapse: collapse;
            
        }

        table.type-2 th,
        table.type-2 td {
            padding: 3px 5px;
            border: 1px solid #000;
            font-size: 13px;
        }

        {{--  table.type3 tr.separator th {
            border: 1 solid #000;
            padding-left: 0px;
            font-weight: bold;
        }  --}} .photo-signature {
            margin: auto;
            display: block;
        }

        .foto-siswa {
            width: 120px;
            height: 150px;
            border: 1px solid #000;
            display: block;
            margin-right: 50px;
        }

        .signature-kepsek {
            height: 110px;
            margin: -7px 35px 0px auto;
            display: block;
            position: relative;
            left: -80px;
        }

        .mb-1 {
            margin-bottom: 4px;
        }

        .mb-2 {
            margin-bottom: 8px;
        }

        .mb-3 {
            margin-bottom: 12px;
        }

        .bottom-side {
            display: table-caption;
            text-align: left;
            caption-side: bottom;
        }
    </style>
</head>

<body>
    <table class="kop-surat text-center">
        <tr>
            <td width="">
                <img src="./images/export_01/LogosuratTutwuriHandayani.jpg" height="90" width="auto" alt="">
            </td>
            <td class="text-center">
                PEMERINTAH REPUBLIK INDONESIA<br />
                KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI<br />
                PUSAT KEGIATAN BELAJAR MASYARAKAT
                <div class="highlight">PIWULANG BECIK</div>
                <small>
                    Jl Kaplingrejo I/7 Rt/Rw 09/03, Gendongan, Salatiga, Jawa Tengah<br />
                    SK Nomor 421.9/3385/401, NPSN P9970512<br />
                    Telp. 0298 3433143, <a href="https://piwulangbecik.sch.id">https://piwulangbecik.sch.id</a><br />
                </small>
            </td>
            <td>
                <img src="./images/export_01/LogosuratPBx.png" height="90" width="auto" alt="">
            </td>
        </tr>
    </table>
    <h3 class="text-center mb-0">SURAT KETERANGAN LULUS<br>
        PENDIDIKAN KESETARAAN PROGRAM PAKET C<br>
        PEMINATAN ILMU PENGETAHUAN ALAM<br>
        TAHUN AJARAN 2023/2024
    </h3>
    <h3 class="text-center mb-1">Nomor : PBx/SKL/V/2024/2107111</h3>

    <p class="mb-0">Yang bertanda tangan di bawah ini Kepala Pusat Kegiatan Belajar Masyarakat (PKBM) Piwulang Becik
        menerangkan
        bahwa:</p>
    <table class="mb-0" style="margin-bottom: 0px;">
        <tr>
            <td width="150">Nama</td>
            <td>:</td>
            <td>Vacha Ar-Raniry</td>
        </tr>
        <tr>
            <td width="150">Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>Jakarta, 17/01/2006</td>
        </tr>
        <tr>
            <td width="150">Nama Orang Tua</td>
            <td>:</td>
            <td>Calvin Iskanadar Taufik</td>
        </tr>
        <tr>
            <td width="150">Nomor Induk/NISN</td>
            <td>:</td>
            <td>1943135/0066882057</td>
        </tr>
        <tr>
            <td width="150">Alamat Lembaga</td>
            <td>:</td>
            <td>Jl. Kaplingrejo I/7, RT.09/RW.03, Kel. Gendongan, Kec.Tingkir, Kota Salatiga, Jawa Tengah.</td>
        </tr>
    </table>
    <p>Berdasarkan kriteria kelulusan peserta didik yang sudah ditetapkan dan sesuai dengan
        Surat Keputusan Kepala PKBM
        PIWULANG BECIK Nomor: PBx/S-KEP-KELULUSAN-PAKET C/V/2024/01 tanggal 6 Mei 2024, maka yang bersangkutan
        dinyatakan:</p>
    <h2 class="text-center font-italic mb-0">LULUS/<s>TIDAK&nbsp;LULUS</s></h2>

    @php
        $kelompok_umum = [
            ['Pendidikan Agama', 90],
            ['Pendidikan Kewarganegaraan', 90],
            ['Bahasa Indonesia', 92],
            ['Matematika', 93],
            ['Sejarah Indonesia', 89],
            ['Bahasa Inggris', 91],
        ];

        $peminatan_mtk_dan_ilmuAlam = [
            ['Matematika Peminatan IPA', 94],
            ['Biologi', 94],
            ['Fisika', 94],
            ['Kimia', 91],
        ];

        $kelompok_Khusus = [
            ['Pemberdayaan', 95],
            ['Keterampilan Wajib', 89],
            ['Keterampilan Pilihan: Fungsi Terstruktur/Tersertifikasi', 95],
        ];
    @endphp
    <br>
    <table class="type-2">
        <caption style="text-align: left">Dengan hasil Sebagai berikut:</caption>
        <tr>
            <th width="10">No</th>
            <th width="200">Mata Pelajaran</th>
            <th width="100">Nilai Akhir</th>
        </tr>
        <tr class="separator">
            <th colspan="3" align="left">Kelompok Umum</th>
        </tr>
        @foreach ($kelompok_umum as $key => $item)
            <tr>
                <td align="center">{{ $key + 1 }}.</td>
                <td>{{ $item[0] }}</td>
                <td align="center">{{ $item[1] }}</td>
            </tr>
        @endforeach
        <tr class="separator">
            <th colspan="3" align="left">Peminatan Matematika dan Ilmu Alam</th>
        </tr>
        @foreach ($peminatan_mtk_dan_ilmuAlam as $key => $item)
            <tr>
                <td align="center">{{ $key + 1 }}.</td>
                <td>{{ $item[0] }}</td>
                <td align="center">{{ $item[1] }}</td>
            </tr>
        @endforeach
        <tr class="separator">
            <th colspan="3" align="left">Kelompok Khusus</th>
        </tr>
        @foreach ($kelompok_Khusus as $key => $item)
            <tr>
                <td align="center">{{ $key + 1 }}.</td>
                <td>{{ $item[0] }}</td>
                <td align="center">{{ $item[1] }}</td>
            </tr>
        @endforeach
        <tr>
            <th colspan="2">Rata-Rata</th>
            <th>92,28</th>
        </tr>
    </table>
    <caption style="text-align: left">Surat Keterangan ini bersifat sementara sampai dikeluarkannya
        Ijazah.</caption>
    <p>Demikian Surat Keterangan ini diberikan agar dapat digunakan sebagiamana mestinya, apabila dikemudian hari
        terdapat kekeliruan, maka akan dilakukan perbaikan.</p>

    <div class="photo-signature">
        <table align="center">
            <tbody>
                <tr>
                    <td>
                        <div class="foto-siswa"></div>
                    </td>
                    <td class="text-left">
                        <div>
                            Salatiga, 17 Juli 2023<br />
                            Kepala PKBM Piwulang Becik
                        </div>

                        <img class="signature-kepsek" src="./images/export_01/ttd-cap-kepsek.png" />
                        <div>
                            <b><u>Aris Prasetya, S. Si.</u></b>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
