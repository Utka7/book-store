<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\author\StoreRequest;
use App\Models\Authors;


//Сохраняет новую категорю в БД
class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request -> validated();
        Authors::FirstOrcreate($data);
        return redirect() -> route('admin.author.index');
    }
}
