<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NFSController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\NFSMiddleware;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

//Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/view', [MainController::class, 'viewPage'])->name('view');
Route::get('/test/{value}', [MainController::class, 'upperCase'])->name('test');

Route::resources([
    'users' => UsersController::class,
    'product' => ProductController::class
]);


Route::get('/auth', [AuthController::class, 'index'])->name('auth');


Route::get('/products', function (): View {

    $data =  [
        [
            "id" => 1,
            "nome" => "Uva",
            "peso" => 1,
            "preço" => 7.99,
        ],
        [
            "id" => 2,
            "nome" => "Banana",
            "peso" => 1,
            "preço" => 9.99,
        ],
        [
            "id" => 3,
            "nome" => "Morango",
            "peso" => 1,
            "preço" => 5.99,
        ],
        [
            "id" => 4,
            "nome" => "Laranja",
            "peso" => 1,
            "preço" => 6.99,
        ],
    ];

    return View('products', ['data' => (object)$data]);
});

// middleware NFS

Route::middleware([NFSMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/nfs', [NFSController::class, 'index'])->name('admin.nfs');
    Route::get('/nfs/search', [NFSController::class, 'infoNFS'])->name('admin.nfs.id');
});

// Route viewShow

Route::get('/', [ViewController::class, 'showView']);
