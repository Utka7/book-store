<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function __invoke(Books $book)
    {

        $randomBooks = Books::get()->random(2);
        $bestBooks = Books::get()->random(5);
        return view('cart', compact( 'book'));
    }
}
