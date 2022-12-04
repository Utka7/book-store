<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\author\StoreRequest;
use App\Http\Requests\admin\author\UpdateRequest;
use App\Models\Authors;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Authors::all(); // Получение всех категорий из БД
        return view( 'admin.author.index', compact('authors'));
    }

    public function delete(Authors $author)
    {
        $author -> delete();
        return redirect()->route('admin.author.index');
    }

    public function edit(Authors $author)
    {
        return view('admin.author.edit', compact('author'));
    }

    public function show(Authors $author)
    {
        return view( 'admin.author.show', compact('author'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request -> validated();
        Authors::FirstOrcreate($data);
        return redirect() -> route('admin.author.index');
    }

    public function update(UpdateRequest $request, Authors $author)
    {
        $data = $request->validated();
        $author -> update($data);
        return view('admin.author.show', compact('author'));
    }

    public function create()
    {
        return view('admin.author.create');
    }
}
