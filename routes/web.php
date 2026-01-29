<?php

use Illuminate\Support\Facades\Route;






//route du site 


//page d'accueil
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//page produits
Route::get('/produits', [App\Http\Controllers\ProductController::class, 'index'])->name('produits');

//page de connexion
Route::get('/login', [App\Http\Controllers\LoginController::class, 'log'])->name('log');

//page d'inscription
Route::get('/register', [App\Http\Controllers\LoginController::class, 'reg'])->name('reg');

//page des promotions
Route::get('/promotion', [App\Http\Controllers\PromotionController::class, 'promotion'])->name('promotion');

//page des categories
Route::get('/categorie', [App\Http\Controllers\CategorieController::class, 'categorie'])->name('categorie');

//page boutique
Route::get('/boutique', [App\Http\Controllers\BoutiqueController::class, 'boutique'])->name('boutique');



//page du superadmin 
require __DIR__.'/superadmin/dashboard.php';



//page du commerçant 





//page du client 




