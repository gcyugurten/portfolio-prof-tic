<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\IndexController;

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



Route::get('/', [IndexController::class, "index"])->name('index-page');
Route::view('/a-propos', "a-propos")->name('a-propos');
Route::view('/enseignement', "enseignement")->name('enseignement');
Route::view('/recherche', "recherche")->name('recherche');


Route::post('/contact', [IndexController::class, "contactForm"])->name('contact-form');


Route::prefix("/blog")->group(function() {
    Route::get('/', [IndexController::class, "blogIndex"])->name('blog');
    Route::get('/{slug}', [IndexController::class, "show_article"])->name('show_article');
});



Route::post('/admin/login', [AdminController::class, 'login'])->withoutMiddleware("auth.zahira")->name('admin.login');
Route::view('/admin/login', "admin.login")->name('admin.login')->withoutMiddleware("auth.zahira");

Route::group(["prefix" => "admin", "middleware" => "auth.zahira"], function() {

    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get("/blog", [AdminController::class, "index"])->name('admin.blog.index');
    Route::get("/blog/article/{id}/edit", [AdminController::class, "edit"])->name('admin.blog.edit');
    Route::post("/blog/article/{id}/edit", [AdminController::class, "update"])->name('admin.blog.update');
    Route::get("/blog/article/create", [AdminController::class, "create"])->name('admin.blog.create');
    Route::post("/blog/article/create", [AdminController::class, "store"])->name('admin.blog.store');
    Route::post("/blog/article/{id}/delete", [AdminController::class, "delete"])->name('admin.blog.delete');
    Route::post("/blog/article/uploadImages", [AdminController::class, "uploadImages"])->name('admin.blog.uploadImages');

    Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, "index"])->name("admin.settings");
    Route::post('/settings/edit', [App\Http\Controllers\Admin\SettingsController::class, "edit"])->name("admin.settings.edit");
    Route::get('/settings/delete-logo', [App\Http\Controllers\Admin\SettingsController::class, "deleteLogo"])->name("admin.settings.deleteLogo");
    Route::get('/settings/delete-favicon', [App\Http\Controllers\Admin\SettingsController::class, "deleteFavicon"])->name("admin.settings.deleteFavicon");
});






