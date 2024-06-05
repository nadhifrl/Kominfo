<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Pengajuan;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function cetak_pdf()
    {
    	$pengajuan = Pengajuan::all();
 
    	$pdf = PDF::loadview('terkirim.pengajuan_pdf',['pengajuan'=>$pengajuan]);
    	return $pdf->download('pengajuan-pdf');
    }
}
