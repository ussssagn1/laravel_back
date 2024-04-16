<?php

namespace App\Http\Controllers;

use App\Models\Headphone;
use Illuminate\Http\Request;

class HeadphoneController extends Controller
{
    public function index() {
        $headphones = Headphone::where('name', 'Apple AirPods Max')->get();
        dd($headphones);
    }
}
