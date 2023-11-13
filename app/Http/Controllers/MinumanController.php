<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function index()
    {
        return view("minuman.all", [
            "title"=> "Minuman",
            "minuman"=> Minuman::all(),
        ]);
    }
    public function show($minuman)
    {
        return view("minuman.detail", [
            "title"=> "detail-minuman",
            "minuman"=> Minuman::find($minuman),
        ]);
}
}
