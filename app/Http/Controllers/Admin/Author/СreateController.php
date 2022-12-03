<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;

class СreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.author.create');
    }
}
