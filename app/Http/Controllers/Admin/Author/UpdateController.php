<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\author\UpdateRequest;
use App\Models\Authors;


//Сохранение обновления
class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Authors $author)
    {
        $data = $request->validated();
        $author -> update($data);
        return view('admin.author.show', compact('author'));
    }
}
