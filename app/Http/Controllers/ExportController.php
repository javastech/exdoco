<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportController extends Controller
{
    function export_01() {
        $pdf = Pdf::setPaper('legal')->loadView('export.export_01');
        return $pdf->stream();
        // return $pdf->stream('invoice.pdf');
    }
    function export_02() {
        $pdf = Pdf::setPaper('legal')->loadView('export.export_02');
        return $pdf->stream();
        // return $pdf->stream('invoice.pdf');
    }
}
