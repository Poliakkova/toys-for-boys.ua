<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Illuminate\Support\Facades\Route;


class SomeController extends Controller
{
    public function showcatalogue() {
        $assort = App\Shop::all();
        return view('catalogue', compact('assort'));
    }

    public function showabout() {
        return view('about');
    }

    public function showindex() {
        return view('index');
    }

    public function search() {
        request('poisk');
    }
}
