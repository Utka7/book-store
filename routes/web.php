<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
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
        Route::get('/', [AuthorController::class, 'index'])->name('admin.author.index');
        Route::get('/create', [AuthorController::class, 'create'])->name('admin.author.create');
        Route::post('/', [AuthorController::class, 'store'])->name('admin.author.store');
        Route::get('/{author}', [AuthorController::class, 'show'])->name('admin.author.show');
        Route::get('/{author}/edit', [AuthorController::class, 'edit'])->name('admin.author.edit');
        Route::patch('/{author}', [AuthorController::class, 'update'])->name('admin.author.update');
        Route::delete('/{author}', [AuthorController::class, 'delete'])->name('admin.author.delete');
    });

    Route::group(['namespace' => 'App\Http\Controllers\Admin\Book', 'prefix' => 'books'], function () {
        Route::get('/',  [BookController::class, 'index'])->name('admin.book.index');
        Route::get('/create', [BookController::class, 'create'])->name('admin.book.create');
        Route::post('/', [BookController::class, 'store'])->name('admin.book.store');
        Route::get('/{book}', [BookController::class, 'show'])->name('admin.book.show');
        Route::get('/{book}/edit', [BookController::class, 'edit'])->name('admin.book.edit');
        Route::patch('/{book}', [BookController::class, 'update'])->name('admin.book.update');
        Route::delete('/{book}', [BookController::class, 'delete'])->name('admin.book.delete');
    });

    Route::get('/export', ['App\Http\Controllers\Admin\ExportController', 'show'])->name('admin.export.export');
    Route::get('/file-export-cat-x', ['App\Http\Controllers\Admin\ExportController', 'fileExportCategoryXLSX'])->name('export-category-xlsx');
    Route::get('/file-export-book-x', ['App\Http\Controllers\Admin\ExportController', 'fileExportBookXLSX'])->name('export-book-xlsx');
    Route::get('/file-export-author-x', ['App\Http\Controllers\Admin\ExportController', 'fileExportAuthorXLSX'])->name('export-author-xlsx');
    Route::get('/file-export-cat-csv', ['App\Http\Controllers\Admin\ExportController', 'fileExportCategoryCSV'])->name('export-category-csv');
    Route::get('/file-export-book-csv', ['App\Http\Controllers\Admin\ExportController', 'fileExportBookCSV'])->name('export-book-csv');
    Route::get('/file-export-author-csv', ['App\Http\Controllers\Admin\ExportController', 'fileExportAuthorCSV'])->name('export-author-csv');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([ 'prefix' => 'buybook'], function () {
    Route::get('/{book}',['App\Http\Controllers\Main\BuyController', '__invoke'])->name('buy');
});
Auth::routes();
