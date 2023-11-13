<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Makanan;

class MakananController extends Controller
{
    public function index()
    {
        return view("makanan.all", [
            "title" => "Makanan",
            "makanan" => Makanan::all(),
        ]);
    }

    public function show($makanan)
    {
        return view("makanan.detail", [
            "title" => "detail-makanan",
            "makanan" => Makanan::find($makanan),
        ]);
    }
}
