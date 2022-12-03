<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\book\StoreRequest;
use App\Models\Books;
use Illuminate\Support\Facades\Storage;


//Сохраняет новую категорю в БД
class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request -> validated();
        $data['preview_image'] = Storage::disk('local')->put( '/public', $data['preview_image']);
        $data['preview_image'] = str_replace('public','storage',$data['preview_image']);


        Books::FirstOrcreate($data);
        return redirect() -> route('admin.book.index');
    }
}
