<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class pdfController extends Controller
{
    public function __construct()
    {
        set_time_limit(0);
        ini_set('memory_limit', '5G');
        ini_set('upload_max_filesize', '5G');
        ini_set('post_max_size', '5G');
    }
    public function download() {
        $pdf = Pdf::loadView('pdf');
     
        return $pdf->download();
    }
    public function downloadPdf() {
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];
     
        $pdf = Pdf::loadView('pdfs', ['data' => $data]);
     
        return $pdf->download();
    }
    public function streamPdf() {
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];
     
        $pdf = Pdf::loadView('pdfs', ['data' => $data]);
     
        return $pdf->stream();
    }
}
