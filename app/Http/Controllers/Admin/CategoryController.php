<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\category\StoreRequest;
use App\Http\Requests\admin\category\UpdateRequest;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all(); // Получение всех категорий из БД
        return view( 'admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function show(Categories $category)
    {
        return view( 'admin.category.show', compact('category'));
    }

    public function delete(Categories $category)
    {
        $category -> delete();
        return redirect()->route('admin.category.index');
    }

    public function edit(Categories $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request -> validated();
        Categories::FirstOrcreate($data);
        return redirect() -> route('admin.category.index');
    }

    public function update(UpdateRequest $request, Categories $category)
    {
        $data = $request->validated();
        $category -> update($data);
        return view('admin.category.show', compact('category'));
    }
}
