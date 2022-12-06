<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Pзurchases;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function __invoke(Book $book)
    {
        $randomBooks = Book::get()->random(2);
        $bestBooks = Book::get()->random(5);
        return view('cart', compact( 'book'));
    }

    public function store(Book $book)
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
