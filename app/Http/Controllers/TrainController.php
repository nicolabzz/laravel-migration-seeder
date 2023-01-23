<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
class TrainController extends Controller
{
    public function home()
    {
        $trains = Train::all();
// dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddIOPUSDHFIAUEBWHFAIUBEVHFIAUWHEF
// JKLSDHAFLBUHELUFHBVLEUFVBHLEHFHFFHLFDUDHFUDHLKADHFHDF DFFDHUIFHEDUFHUDIHERGHJF D AJKDHF A A ADUHF KLDHJKVCHDUCDC UDH FHDUHF;ASD DH
        return view('home', compact('trains'));
    }
}
