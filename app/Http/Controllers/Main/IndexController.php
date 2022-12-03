<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $books = Books::paginate(3);
        $randomBooks = Books::get()->random(2);
        return view('main.index', compact('books', 'randomBooks'));
    }
}
