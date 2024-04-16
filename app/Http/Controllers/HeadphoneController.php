<?php

namespace App\Http\Controllers;

use App\Models\Headphone;
use Illuminate\Http\Request;

class HeadphoneController extends Controller {
    public function index() {
        $headphones = Headphone::where('company', 'Apple')->get();
        dd($headphones);
    }

    public function createAll() {
        $headphonesArr = [
            ["name" => "Sony WH-1000XM5", "price" => 14799, "type" => "on-ear headphones", "color" => "black", "type_connect" => "wireless", "company" => "Sony"],
            ["name" => "Apple AirPods Max", "price" => 26999, "type" => "on-ear headphones", "color" => "silver", "type_connect" => "wireless", "company" => "Apple"],
            ["name" => "Apple AirPods Pro", "price" => 11499, "type" => "in-ear headphones", "color" => "white", "type_connect" => "wireless", "company" => "Apple"],
            ["name" => "Beats by Dr. Dre Studio3", "price" => 15808, "type" => "on-ear headphones", "color" => "blue", "type_connect" => "wireless", "company" => "Beats"],
            ["name" => "Beyerdynamic Dt 900 Pro X", "price" => 15717, "type" => "on-ear headphones", "color" => "black", "type_connect" => "wired", "company" => "Beyerdynamic"],
            ["name" => "Sony WH-1000XM4", "price" => 14999, "type" => "on-ear headphones", "color" => "black", "type_connect" => "wireless", "company" => "Sony"],
            ["name" => "Sony WF-1000XM5", "price" => 15717, "type" => "in-ear headphones", "color" => "black", "type_connect" => "wireless", "company" => "Sony"],
            ["name" => "Marshall Monitor II ANC", "price" => 16899, "type" => "on-ear headphones", "color" => "black", "type_connect" => "wireless", "company" => "Marshall"],
            ["name" => "Marshall Motif II A.N.C.", "price" => 15717, "type" => "in-ear headphones", "color" => "black", "type_connect" => "wireless", "company" => "Marshall"],
            ["name" => "Marshall Major IV", "price" => 6499, "type" => "on-ear headphones", "color" => "brown", "type_connect" => "wireless", "company" => "Marshall"],
            ["name" => "Marshall Major", "price" => 1850, "type" => "on-ear headphones", "color" => "brown", "type_connect" => "wired", "company" => "Marshall"],
            ["name" => "Apple iPhone EarPods", "price" => 999, "type" => "in-ear headphones", "color" => "white", "type_connect" => "wired", "company" => "Apple"],
            ["name" => "Sennheiser IE 600", "price" => 34359, "type" => "in-ear headphones", "color" => "gray", "type_connect" => "wired", "company" => "Sennheiser"],
            ["name" => "Beyerdynamic DT 880 Edition", "price" => 13312, "type" => "out-ear headphones", "color" => "white", "type_connect" => "wired", "company" => "Beyerdynamic"],
            ["name" => "Apple iPhone EarPods", "price" => 999, "type" => "in-ear headphones", "color" => "white", "type_connect" => "wired", "company" => "Apple"]
        ];

        foreach ($headphonesArr as $item) {
            Headphone::create($item);
        }

        dd('created');
    }

    public function update() {
        $headphone = Headphone::find(15);

        $headphone->update([
            'name' => 'UPDATE',
            'price' => '1333',
            'type' => 'UPDATE',
            'color' => 'UPDATE',
            'type_connect' => 'UPDATE',
            'company' => 'UPDATE',
        ]);

        dd('UPDATE');
    }

    public function delete() {
        $headphone = Headphone::find(15);

        $headphone->delete();
        dd('deleted');
    }

    //firstOrCreate

    public function firstOrCreate() {
        $anotherHeadphone = [
            "name" => "ANOTHER Sony WH-1000XM5",
            "price" => 99,
            "type" => "ANOTHER on-ear headphones",
            "color" => "ANOTHER black",
            "type_connect" => "ANOTHER wireless",
            "company" => "ANOTHER Sony"
        ];

        $myHeadphone = Headphone::firstOrCreate([
            'name' => 'ANOTHER Sony WH-1000XM5',
        ], $anotherHeadphone);
        dump($myHeadphone->name);
        dd('finished');
    }

    public function updateOrCreate() {
        $anotherHeadphone = [
            "name" => "ANOTHER Sony WH-1000XM5",
            "price" => 99,
            "type" => "ANOTHER on-ear headphones",
            "color" => "ANOTHER black",
            "type_connect" => "ANOTHER wireless",
            "company" => "ANOTHER Sony"
        ];

        $myHeadphone = Headphone::updateOrCreate([
            'name' => 'ANOTHER Sony WH-1000XM5',
        ], $anotherHeadphone);
        dump($myHeadphone->name);
        dd('finished');
    }
}
