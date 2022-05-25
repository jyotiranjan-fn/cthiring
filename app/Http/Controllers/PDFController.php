<?php
   
namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
 
use PDF;
   
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
        // $pdf = FacadePdf::loadView('resume.testPDF', $data);
        $pdf = FacadePdf::loadView('resume.testPDF', ['Data' => $data])->setOptions(['defaultFont' => 'sans-serif']);
     
        return $pdf->download('resume.tutsmake.pdf');
    }
}