<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\book\StoreRequest;
use App\Http\Requests\admin\book\UpdateRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Получение всех категорий из БД
        return view( 'admin.book.index', compact('books'));
    }

    public function create()
    {
        return view('admin.book.create');
    }

    public function delete(Book $book)
    {
        $book -> delete();
        return redirect()->route('admin.book.index');
    }

    public function edit(Book $book)
    {
        return view('admin.book.edit', compact('book'));
    }

    public function show(Book $book)
    {
        return view( 'admin.book.show', compact('book'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request -> validated();
        $data['preview_image'] = Storage::disk('local')->put( '/public', $data['preview_image']);
        $data['preview_image'] = str_replace('public','storage',$data['preview_image']);

        Book::FirstOrcreate($data);
        return redirect() -> route('admin.book.index');
    }

    public function update(UpdateRequest $request, Book $book)
    {
        $data = $request->validated();
        $book -> update($data);
        return view('admin.book.show', compact('book'));
    }
}
