<?php
namespace App\Http\Controllers\Admin;

use App\Exports\AuthorExport;
use App\Exports\BookExport;
use App\Exports\CategoryExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{

    public function show()
    {
        return view('admin.export.export');
    }

    public function fileExportCategoryXLSX()
    {
        return Excel::download(new CategoryExport, 'category-collection.xlsx');
    }

    public function fileExportBookXLSX()
    {
        return Excel::download(new BookExport, 'category-book.xlsx');
    }

    public function fileExportAuthorXLSX()
    {
        return Excel::download(new AuthorExport, 'category-author.xlsx');
    }

    public function fileExportCategoryCSV()
    {
        return Excel::download(new CategoryExport, 'category-collection.csv');
    }

    public function fileExportBookCSV()
    {
        return Excel::download(new BookExport, 'category-book.csv');
    }

    public function fileExportAuthorCSV()
    {
        return Excel::download(new AuthorExport, 'category-author.csv');
    }

}
