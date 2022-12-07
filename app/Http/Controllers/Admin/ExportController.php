<?php
namespace App\Http\Controllers\Admin;

use App\Exports\AuthorExport;
use App\Exports\BookExport;
use App\Exports\CategoryExport;
use App\Exports\PurchaseExport;
use App\Exports\UserExport;
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
        return Excel::download(new BookExport, 'book-collection.xlsx');
    }

    public function fileExportAuthorXLSX()
    {
        return Excel::download(new AuthorExport, 'author-collection.xlsx');
    }

    public function fileExportUserXLSX()
    {
        return Excel::download(new UserExport, 'user-collection.xlsx');
    }

    public function fileExportPurchaseXLSX()
    {
        return Excel::download(new PurchaseExport, 'purchase-collection.xlsx');
    }

    public function fileExportPurchaseCSV()
    {
        return Excel::download(new PurchaseExport, 'purchase-collection.csv');
    }

    public function fileExportUserCSV()
    {
        return Excel::download(new UserExport, 'user-collection.csv');
    }

    public function fileExportCategoryCSV()
    {
        return Excel::download(new CategoryExport, 'category-collection.csv');
    }

    public function fileExportBookCSV()
    {
        return Excel::download(new BookExport, 'book-collection.csv');
    }

    public function fileExportAuthorCSV()
    {
        return Excel::download(new AuthorExport, 'author-collection.csv');
    }

}
