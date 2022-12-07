<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Main\BuyController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [IndexController::class, '__invoke'])->name('main.index');


Route::group(['middleware' => ['auth', 'isadmin'],'prefix' => 'admin'], function () {

    Route::group(['namespace' => 'admin\Main'], function () {
        Route::get('/', [AdminController::class, '__invoke'])->name('admin.main.index');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });

    Route::group(['prefix' => 'authors'], function () {
        Route::get('/', [AuthorController::class, 'index'])->name('admin.author.index');
        Route::get('/create', [AuthorController::class, 'create'])->name('admin.author.create');
        Route::post('/', [AuthorController::class, 'store'])->name('admin.author.store');
        Route::get('/{author}', [AuthorController::class, 'show'])->name('admin.author.show');
        Route::get('/{author}/edit', [AuthorController::class, 'edit'])->name('admin.author.edit');
        Route::patch('/{author}', [AuthorController::class, 'update'])->name('admin.author.update');
        Route::delete('/{author}', [AuthorController::class, 'delete'])->name('admin.author.delete');
    });

    Route::group(['prefix' => 'books'], function () {
        Route::get('/',  [BookController::class, 'index'])->name('admin.book.index');
        Route::get('/create', [BookController::class, 'create'])->name('admin.book.create');
        Route::post('/', [BookController::class, 'store'])->name('admin.book.store');
        Route::get('/{book}', [BookController::class, 'show'])->name('admin.book.show');
        Route::get('/{book}/edit', [BookController::class, 'edit'])->name('admin.book.edit');
        Route::patch('/{book}', [BookController::class, 'update'])->name('admin.book.update');
        Route::delete('/{book}', [BookController::class, 'delete'])->name('admin.book.delete');
    });

    Route::group(['prefix' => 'purchase'], function () {
        Route::get('/',  [PurchaseController::class, 'index'])->name('admin.purchase.index');
        Route::get('/create', [PurchaseController::class, 'create'])->name('admin.purchase.create');
        Route::post('/', [PurchaseController::class, 'store'])->name('admin.purchase.store');
        Route::get('/{purchase}', [PurchaseController::class, 'show'])->name('admin.purchase.show');
        Route::get('/{purchase}/edit', [PurchaseController::class, 'edit'])->name('admin.purchase.edit');
        Route::patch('/{purchase}', [PurchaseController::class, 'update'])->name('admin.purchase.update');
        Route::delete('/{purchase}', [PurchaseController::class, 'delete'])->name('admin.purchase.delete');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/',  [UserController::class, 'index'])->name('admin.user.index');
        Route::delete('/{user}',  [UserController::class, 'delete'])->name('admin.user.delete');

    });

    Route::get('/export', [ExportController::class, 'show'])->name('admin.export.export');
    Route::get('/file-export-cat-x', [ExportController::class, 'fileExportCategoryXLSX'])->name('export-category-xlsx');
    Route::get('/file-export-book-x', [ExportController::class, 'fileExportBookXLSX'])->name('export-book-xlsx');
    Route::get('/file-export-author-x', [ExportController::class, 'fileExportAuthorXLSX'])->name('export-author-xlsx');
    Route::get('/file-export-user-x', [ExportController::class, 'fileExportUserXLSX'])->name('export-user-xlsx');
    Route::get('/file-export-purchase-x', [ExportController::class, 'fileExportPurchaseXLSX'])->name('export-purchase-xlsx');

    Route::get('/file-export-purchase-csv', [ExportController::class, 'fileExportPurchaseCSV'])->name('export-purchase-csv');
    Route::get('/file-export-user-csv', [ExportController::class, 'fileExportUserCSV'])->name('export-user-csv');
    Route::get('/file-export-cat-csv', [ExportController::class, 'fileExportCategoryCSV'])->name('export-category-csv');
    Route::get('/file-export-book-csv', [ExportController::class, 'fileExportBookCSV'])->name('export-book-csv');
    Route::get('/file-export-author-csv', [ExportController::class, 'fileExportAuthorCSV'])->name('export-author-csv');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group([ 'prefix' => 'buybook'], function () {
    Route::get('/{book}',[BuyController::class, '__invoke'])->name('buy');
    Route::get('/{book}/edit',[BuyController::class, 'store'])->name('buy.edit');

});

Auth::routes();

