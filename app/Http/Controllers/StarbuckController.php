<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\starbuck;
use Illuminate\Http\Request;

class StarbuckController extends Controller
{
    public function index()
    {
        return view("starbuck.all", [
            "title" => "Starbuck",
            "starbucks" => starbuck::all(),
        ]);
    }

    public function show($starbuck)
    {
        return view("starbuck.detail", [
            "title" => "detail-starbuck",
            "starbucks" => starbuck::find($starbuck),
        ]);
    }
}
