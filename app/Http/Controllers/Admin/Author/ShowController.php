<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Models\Authors;
use App\Models\Categories;

class ShowController extends Controller
{
    public function __invoke(Authors $author)
    {
        return view( 'admin.author.show', compact('author'));
    }
}
