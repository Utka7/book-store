<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\book\StoreRequest;
use App\Http\Requests\admin\book\UpdateRequest;
use App\Models\Books;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Books::all(); // Получение всех категорий из БД
        return view( 'admin.book.index', compact('books'));
    }

    public function create()
    {
        return view('admin.book.create');
    }

    public function delete(Books $book)
    {
        $book -> delete();
        return redirect()->route('admin.book.index');
    }

    public function edit(Books $book)
    {
        return view('admin.book.edit', compact('book'));
    }

    public function show(Books $book)
    {
        return view( 'admin.book.show', compact('book'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request -> validated();
        $data['preview_image'] = Storage::disk('local')->put( '/public', $data['preview_image']);
        $data['preview_image'] = str_replace('public','storage',$data['preview_image']);

        Books::FirstOrcreate($data);
        return redirect() -> route('admin.book.index');
    }

    public function update(UpdateRequest $request, Books $book)
    {
        $data = $request->validated();
        $book -> update($data);
        return view('admin.book.show', compact('book'));
    }
}
