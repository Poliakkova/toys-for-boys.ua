<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class SomeController extends Controller
{
    public function showcatalogue() {
        $assort = DB::table('assort')->get();
        return view('catalogue', compact('assort'));
    }

    public function showabout() {
        return view('about');
    }

    public function showindex() {
        return view('index');
    }

    public function showataka() {
        $assort = DB::table('assort')->where('toy_id', '=', '1004')->get();
        return view('pages/ataka-dracona', compact('assort'));
    }

    public function search() {
        $var = Request('poisk');
        $assort = DB::table('assort')->where('toyname', 'like', '%'.$var.'%')->get();
        return view('catalogue', compact('assort'));
    }
}
