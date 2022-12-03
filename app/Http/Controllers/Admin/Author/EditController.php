<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Models\Authors;

//Обновление категории
class EditController extends Controller
{
    public function __invoke(Authors $author)
    {
        return view('admin.author.edit', compact('author'));
    }
}
