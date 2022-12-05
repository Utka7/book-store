<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\author\StoreRequest;
use App\Http\Requests\admin\author\UpdateRequest;
use App\Models\Authors;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view( 'admin.user.index', compact('users'));
    }

    public function delete(User $user)
    {
        $user -> delete();
        return redirect()->route('admin.user.index');
    }

//    public function edit(Authors $author)
//    {
//        return view('admin.author.edit', compact('author'));
//    }
//
//    public function show(Authors $author)
//    {
//        return view( 'admin.author.show', compact('author'));
//    }
//
//    public function store(StoreRequest $request)
//    {
//        $data = $request -> validated();
//        Authors::FirstOrcreate($data);
//        return redirect() -> route('admin.author.index');
//    }
//
//    public function update(UpdateRequest $request, Authors $author)
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
