<?php

namespace App\Http\Controllers;
use App\Clientes;
use PDF;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function geraPdf(){
        $clientes = Clientes::all();
        
        $pdf = PDF::loadView('pdf', compact('clientes'));

        return $pdf->setPaper('a4')->stream('clientes.pdf');

    }
}
