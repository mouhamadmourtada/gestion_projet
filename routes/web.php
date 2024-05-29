<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $users = \App\Models\User::all();
    $produits = \App\Models\Produit::all();
    return view('dashboard')->with(['users' => $users, 'produits' => $produits]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::prefix('categories')->group(function () {
//     Route::get('/', [CategorieController::class, 'index'])->name('categories.index');
//     Route::get('/create', [CategorieController::class, 'create'])->name('categories.create');
//     Route::post('/', [CategorieController::class, 'store'])->name('categories.store');
//     Route::get('/{categorie}', [CategorieController::class, 'show'])->name('categories.show');
//     Route::get('/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
//     Route::put('/{categorie}', [CategorieController::class, 'update'])->name('categories.update');
//     Route::delete('/{categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');
// });

// Route::prefix('produits')->group(function () {
//     Route::get('/', [ProduitController::class, 'index'])->name('produits.index');
//     Route::get('/create', [ProduitController::class, 'create'])->name('produits.create');
//     Route::post('/', [ProduitController::class, 'store'])->name('produits.store');
//     Route::get('/{produit}', [ProduitController::class, 'show'])->name('produits.show');
//     Route::get('/{produit}/edit', [ProduitController::class, 'edit'])->name('produits.edit');
//     Route::put('/{produit}', [ProduitController::class, 'update'])->name('produits.update');
//     Route::delete('/{produit}', [ProduitController::class, 'destroy'])->name('produits.destroy');
// });

Route::prefix('admin')->group(function () {

    Route::prefix('users')->group(function () {
        Route::get('/', [App\Http\Controllers\admin\userController::class, 'index'])->name('admin.users.index');
        Route::get('/create', [App\Http\Controllers\admin\userController::class, 'create'])->name('admin.users.create');
        Route::post('/', [App\Http\Controllers\admin\userController::class, 'store'])->name('admin.users.store');
        Route::get('/{user}', [App\Http\Controllers\admin\userController::class, 'show'])->name('admin.users.show');
        Route::get('/{user}/edit', [App\Http\Controllers\admin\userController::class, 'edit'])->name('admin.users.edit');
        Route::put('/{user}', [App\Http\Controllers\admin\userController::class, 'update'])->name('admin.users.update');
        Route::delete('/{user}', [App\Http\Controllers\admin\userController::class, 'destroy'])->name('admin.users.destroy');
    });

});


require __DIR__.'/auth.php';
