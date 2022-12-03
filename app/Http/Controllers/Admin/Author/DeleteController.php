<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\category\UpdateRequest;
use App\Models\Authors;


//Удаление
class DeleteController extends Controller
{
    public function __invoke(Authors $author)
    {

        $author -> delete();
        return redirect()->route('admin.author.index');
    }
}
