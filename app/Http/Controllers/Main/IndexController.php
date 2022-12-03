<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $randomBooks = Books::get()->random(2);
        $bestBooks = Books::get()->random(5);
        return view('main.index', compact( 'randomBooks','bestBooks'));
    }
}
