<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\author\StoreRequest;
use App\Http\Requests\admin\author\UpdateRequest;
use App\Models\Author;
use App\Models\Pзurchases;
use App\Models\User;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Pзurchases::all();
        return view( 'admin.purchase.index', compact('purchases'));
    }

    public function delete(Pзurchases $purchase)
    {
        $purchase -> delete();
        return redirect()->route('admin.purchase.index');
    }

//    public function edit(Author $author)
//    {
//        return view('admin.author.edit', compact('author'));
//    }
//
//    public function show(Author $author)
//    {
//        return view( 'admin.author.show', compact('author'));
//    }
//
//    public function store(StoreRequest $request)
//    {
//        $data = $request -> validated();
//        Author::FirstOrcreate($data);
//        return redirect() -> route('admin.author.index');
//    }
//
//    public function update(UpdateRequest $request, Author $author)
//    {
//        $data = $request->validated();
//        $author -> update($data);
//        return view('admin.author.show', compact('author'));
//    }
//
//    public function create()
//    {
//        return view('admin.author.create');
//    }
}
