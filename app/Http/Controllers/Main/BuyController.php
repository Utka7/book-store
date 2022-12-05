<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Pзurchases;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function __invoke(Books $book)
    {
        $randomBooks = Books::get()->random(2);
        $bestBooks = Books::get()->random(5);
        return view('cart', compact( 'book'));
    }

    public function store(Books $book)
    {
        $user = auth()->user();
        $pзurchases = new Pзurchases;
        $pзurchases -> user_id = $user -> id;
        $pзurchases -> book_id = $book -> id;
        $pзurchases -> date_purchase = Carbon::now();
        $pзurchases -> save();

        return redirect() -> route('main.index');
    }

}
