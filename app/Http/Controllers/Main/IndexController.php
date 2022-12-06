<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $randomBooks = Book::get()->random(2);
        $bestBooks = Book::get()->random(5);
        return view('main.index', compact( 'randomBooks','bestBooks'));
    }
}
