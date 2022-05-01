<?php

use Carbon\Carbon;

use App\Models\Day;
use App\Models\Post;
use App\Models\User;
use App\Models\Group;
use App\Models\Setting;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BlogController;

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



// Landing Page Routes
Route::get('/', [App\Http\Controllers\IndexController::class, "index"])->name('index-page');
Route::view('/a-propos', "a-propos")->name('a-propos');
Route::view('/enseignement', "enseignement")->name('enseignement');
Route::view('/recherche', "recherche")->name('recherche');


Route::post('/contact', [App\Http\Controllers\IndexController::class, "contactForm"])->name('contact-form');

Auth::routes(["verify" => true]);

Route::prefix("/blog")->group(function() {
    Route::get('/', [BlogController::class, "index"])->name('blog');
    Route::get('/{slug}', [BlogController::class, "show_article"])->name('show_article');
});

Route::middleware(['auth', 'verified'])->group(function() {

    Route::middleware(['joined.no'])->group(function() {

        Route::get('/home', [App\Http\Controllers\Elearning\HomeController::class, 'index'])->name('home');         
        Route::get('/join-group/{id}', [App\Http\Controllers\Elearning\GroupsController::class, "select"])->name('join-group.select');
        Route::post('/join-group/{id}/confirm', [App\Http\Controllers\Elearning\GroupsController::class, "confirm"])->name('join-group.confirm');
        

    });



    Route::middleware(['joined.yes'])->group(function () {

        Route::prefix("dashboard")->group(function() {

            Route::get('/', [App\Http\Controllers\Elearning\DashboardController::class, "index"])->name('dashboard');
            Route::get('/settings', [App\Http\Controllers\Elearning\SettingsController::class, 'index'])->name('dashboard.settings');
            Route::post('/settings', [App\Http\Controllers\Elearning\SettingsController::class, 'updateInfos'])->name('dashboard.settings.update');
            Route::post('/settings/change-password', [App\Http\Controllers\Elearning\SettingsController::class, 'updatePassword'])->name('dashboard.settings.update-password');

            Route::post('/check-started-video', [App\Http\Controllers\Elearning\DashboardController::class, 'checkStartedVideo'])->name('dashboard.check-started-video');
            Route::post('/check-deprecated-video', [App\Http\Controllers\Elearning\DashboardController::class, 'checkDeprecatedVideo'])->name('dashboard.check-deprecated-video');


            Route::get('/classroom', function() {
                $classroom = User::where("group_id", auth()->user()->group_id)->get();
                $days = Day::where("group_id", auth()->user()->group_id)->get();

                return view('elearning.classroom', compact('classroom', 'days'));
            })->name('dashboard.classroom');

            Route::get('/messages/get', [App\Http\Controllers\Elearning\MessagesController::class, 'getMessages'])->name('messages.get');
            Route::post('/messages/send', [App\Http\Controllers\Elearning\MessagesController::class, 'sendMessage'])->name('messages.send');

        });

    });
   

});



Route::get('/admin', function() {
    return view('admin.login');
})->name('admin.login');


Route::prefix("admin")->middleware(['auth', 'admin'])->group(function () {


    Route::get('/dashboard', function() {
        $users = User::all()->where("admin", 0);
        $days = Day::all();
        $count_posts = Post::count();

        return view('admin.dashboard', compact("users", "days", "count_posts"));

    })->name('admin.dashboard');

    Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, "index"])->name('admin.users');
    Route::get('/users/create', [App\Http\Controllers\Admin\UsersController::class, "create"])->name('admin.user.create');
    Route::post('/users/create', [App\Http\Controllers\Admin\UsersController::class, "store"])->name('admin.user.store');
    Route::get('/users/{id}', [App\Http\Controllers\Admin\UsersController::class, "show"])->name('admin.user');
    Route::post('/users/{id}/delete', [App\Http\Controllers\Admin\UsersController::class, "destroy"])->name('admin.user.delete');
    Route::post('/users/{id}/update', [App\Http\Controllers\Admin\UsersController::class, "update"])->name('admin.user.update');


    Route::get("/blog", [App\Http\Controllers\Admin\BlogController::class, "index"])->name('admin.blog.index');
    Route::get("/blog/article/{id}/edit", [App\Http\Controllers\Admin\BlogController::class, "edit"])->name('admin.blog.edit');
    Route::post("/blog/article/{id}/edit", [App\Http\Controllers\Admin\BlogController::class, "update"])->name('admin.blog.update');
    Route::get("/blog/article/create", [App\Http\Controllers\Admin\BlogController::class, "create"])->name('admin.blog.create');
    Route::post("/blog/article/create", [App\Http\Controllers\Admin\BlogController::class, "store"])->name('admin.blog.store');
    Route::post("/blog/article/{id}/delete", [App\Http\Controllers\Admin\BlogController::class, "delete"])->name('admin.blog.delete');
    Route::post("/blog/article/uploadImages", [App\Http\Controllers\Admin\BlogController::class, "uploadImages"])->name('admin.blog.uploadImages');



    Route::get('/groups', [App\Http\Controllers\Admin\GroupsController::class, "index"])->name('admin.groups');
    Route::post('/groups/create', [App\Http\Controllers\Admin\GroupsController::class, "store"])->name('admin.group.store');
    Route::get('/groups/{id}', [App\Http\Controllers\Admin\GroupsController::class, "show"])->name('admin.group');
    Route::post('/groups/{id}/delete', [App\Http\Controllers\Admin\GroupsController::class, "destroy"])->name('admin.group.delete');
    Route::post('/groups/{id}/update', [App\Http\Controllers\Admin\GroupsController::class, "update"])->name('admin.group.update');
    Route::post('/groups/edit-working-time/{id}', [App\Http\Controllers\Admin\GroupsController::class, "editWorkingTime"])->name('admin.group.edit-working-time');
    Route::post('/groups/delete-working-time/{id}', [App\Http\Controllers\Admin\GroupsController::class, "deleteWorkingTime"])->name('admin.group.delete-working-time');
    Route::post('/groups/{id}/add-working-time', [App\Http\Controllers\Admin\GroupsController::class, "addWorkingTime"])->name('admin.group.add-working-time');
    Route::post('/groups/delete-user/{userId}', [App\Http\Controllers\Admin\GroupsController::class, "deleteUser"])->name('admin.delete-user-from-group');


    Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, "index"])->name("admin.settings");
    Route::post('/settings/edit', [App\Http\Controllers\Admin\SettingsController::class, "edit"])->name("admin.settings.edit");
    Route::get('/settings/delete-logo', [App\Http\Controllers\Admin\SettingsController::class, "deleteLogo"])->name("admin.settings.deleteLogo");
    Route::get('/settings/delete-favicon', [App\Http\Controllers\Admin\SettingsController::class, "deleteFavicon"])->name("admin.settings.deleteFavicon");


    Route::post("/start-streaming/{id}", [App\Http\Controllers\Elearning\StreamingController::class, "index"])->name('start-streaming');
    Route::post("/start-streaming/{id}/save-token", [App\Http\Controllers\Elearning\StreamingController::class, "saveToken"])->name('streaming.save-token');
    Route::post("/start-streaming/{id}/end-streaming", [App\Http\Controllers\Elearning\StreamingController::class, "stopStreaming"])->name('streaming.end');
    Route::post("deprecate-streaming/{stream_id}", [App\Http\Controllers\Elearning\StreamingController::class, "deprecateStreaming"])->name('streaming.deprecate');


  
    Route::get('/messages/get', [App\Http\Controllers\MessagesController::class, 'adminGetMessages'])->name('admin.messages.get');



});



