<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportController extends Controller
{
    function export_01()
    {
        $pdf = Pdf::setPaper([0, 0, 609.4488, 935.433], 'portrait')->loadView('export.export_01');
        return $pdf->stream();
        // return $pdf->stream('invoice.pdf');
    }
    function export_02()
    {
        $pdf = Pdf::setPaper([0, 0, 609.4488, 935.433], 'portrait')->loadView('export.export_02');
        return $pdf->stream();
        // return $pdf->stream('invoice.pdf');
    }
    function export_03()
    {
        $pdf = Pdf::setPaper([0, 0, 609.4488, 935.433], 'portrait')->loadView('export.export_03');
        return $pdf->stream();
        // return $pdf->stream('invoice.pdf');
    }
    function surat1()
    {
        $pdf = Pdf::setPaper('A4', 'potrait')->loadView('export.surat1');
        return $pdf->stream();
    }

    function pbx_surat_diterima()
    {
        $pdf = Pdf::setPaper('A4', 'potrait')->loadView('mail.surat_diterima');
        return $pdf->stream();
    }
    function pbx_surat_aktif_siswa_idn()
    {
        $pdf = Pdf::setPaper('A4', 'potrait')->loadView('mail.surat_aktif_siswa_idn');
        return $pdf->stream();
    }
    function pbx_surat_aktif_siswa_eng()
    {
        $pdf = Pdf::setPaper('A4', 'potrait')->loadView('mail.surat_aktif_siswa_eng');
        return $pdf->stream();
    }
    function pbx_surat_pindah()
    {
        $pdf = Pdf::setPaper('A4', 'potrait')->loadView('mail.surat_pindah');
        return $pdf->stream();
    }
    function pbx_surat_permohonan_pindah()
    {
        $pdf = Pdf::setPaper('A4', 'potrait')->loadView('mail.surat_permohonan_pindah');
        return $pdf->stream();
    }
}
