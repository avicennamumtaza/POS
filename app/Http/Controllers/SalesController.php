<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    function penjualan() {
        return view('penjualan');
    }
}
