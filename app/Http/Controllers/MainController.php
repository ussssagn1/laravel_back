<?php

namespace App\Http\Controllers;

use App\Models\Headphone;
use Illuminate\Http\Request;

class MainController extends Controller {
    public function index() {

        $headphones = Headphone::all();
//        $headphonesToJSON = json_encode($headphones, JSON_PRETTY_PRINT);
//        dd($headphonesToJSON);
        return view('main', compact('headphones'));
    }
}
