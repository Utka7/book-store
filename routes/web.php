<?php


use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Main\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', ['App\Http\Controllers\Main\IndexController', '__invoke'])->name('main.index');


Route::group(['prefix' => 'admin'], function () {
    Route::group(['namespace' => 'admin\Main'], function () {
        Route::get('/', [AdminController::class, '__invoke'])->name('admin.main.index');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Category', 'prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Author', 'prefix' => 'authors'], function () {
        Route::get('/', ['App\Http\Controllers\Admin\Author\IndexController', '__invoke'])->name('admin.author.index');
        Route::get('/create', ['App\Http\Controllers\Admin\Author\СreateController', '__invoke'])->name('admin.author.create');
        Route::post('/', ['App\Http\Controllers\Admin\Author\StoreController', '__invoke'])->name('admin.author.store');
        Route::get('/{author}', ['App\Http\Controllers\Admin\Author\ShowController', '__invoke'])->name('admin.author.show');
        Route::get('/{author}/edit', ['App\Http\Controllers\Admin\Author\EditController', '__invoke'])->name('admin.author.edit');
        Route::patch('/{author}', ['App\Http\Controllers\Admin\Author\UpdateController', '__invoke'])->name('admin.author.update');
        Route::delete('/{author}', ['App\Http\Controllers\Admin\Author\DeleteController', '__invoke'])->name('admin.author.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Book', 'prefix' => 'books'], function () {
        Route::get('/', ['App\Http\Controllers\Admin\Book\IndexController', '__invoke'])->name('admin.book.index');
        Route::get('/create', ['App\Http\Controllers\Admin\Book\СreateController', '__invoke'])->name('admin.book.create');
        Route::post('/', ['App\Http\Controllers\Admin\Book\StoreController', '__invoke'])->name('admin.book.store');
        Route::get('/{book}', ['App\Http\Controllers\Admin\Book\ShowController', '__invoke'])->name('admin.book.show');
        Route::get('/{book}/edit', ['App\Http\Controllers\Admin\Book\EditController', '__invoke'])->name('admin.book.edit');
        Route::patch('/{book}', ['App\Http\Controllers\Admin\Book\UpdateController', '__invoke'])->name('admin.book.update');
        Route::delete('/{book}', ['App\Http\Controllers\Admin\Book\DeleteController', '__invoke'])->name('admin.book.delete');
    });

    Route::get('/export', ['App\Http\Controllers\Admin\Export\ExportController', 'show'])->name('admin.export.export');
    Route::get('/file-export-cat-x', ['App\Http\Controllers\Admin\export\ExportController', 'fileExportCategoryXLSX'])->name('export-category-xlsx');
    Route::get('/file-export-book-x', ['App\Http\Controllers\Admin\export\ExportController', 'fileExportBookXLSX'])->name('export-book-xlsx');
    Route::get('/file-export-author-x', ['App\Http\Controllers\Admin\export\ExportController', 'fileExportAuthorXLSX'])->name('export-author-xlsx');
    Route::get('/file-export-cat-csv', ['App\Http\Controllers\Admin\export\ExportController', 'fileExportCategoryCSV'])->name('export-category-csv');
    Route::get('/file-export-book-csv', ['App\Http\Controllers\Admin\export\ExportController', 'fileExportBookCSV'])->name('export-book-csv');
    Route::get('/file-export-author-csv', ['App\Http\Controllers\Admin\export\ExportController', 'fileExportAuthorCSV'])->name('export-author-csv');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/buy',['App\Http\Controllers\Main\BuyController', '__invoke'])->name('buy');

Auth::routes();
