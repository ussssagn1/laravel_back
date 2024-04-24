<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Headphone;
use Illuminate\Http\Request;

class HeadphoneController extends Controller {
    public function index() {

        $headphone = Headphone::find(1);
        dd($headphone->tags);

//        return view('headphones.index', compact('headphones'));
    }

    public function create() {
        return view('headphones.create');
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'price' => 'required',
            'type' => 'required',
            'type_connect' => 'required',
            'company' => 'required',
            'color' => 'required',
            'img_url' => 'required',
        ]);

        Headphone::create($data);
        return redirect()->route('headphones.index');
    }

    public function show(Headphone $headphones) {
        return view('headphones.show', compact('headphones'));
    }

    public function destroy(Headphone $headphones) {
        $headphones->delete();
        return redirect()->route('headphones.index');
    }

    public function edit(Headphone $headphones) {
        return view('headphones.edit', compact('headphones'));
    }

    public function update(Headphone $headphones) {
        $data = request()->validate([
            'name' => 'required',
            'price' => 'required',
            'type' => 'required',
            'type_connect' => 'required',
            'company' => 'required',
            'color' => 'required',
            'img_url' => 'required',
        ]);
        $headphones->update($data);
        return redirect()->route('headphones.show', $headphones->id);
    }

    public function delete() {
        $headphone = Headphone::find(15);

        $headphone->delete();
        dd('deleted');
    }
}
