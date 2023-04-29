<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontendContrller;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\BlogController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
//frontend part
Route::get('/',[FrontendContrller::class,'index'])->name('index');


//admin-panel start
Route::group(['middleware'=>'auth'],function (){

    Route::get('/home', [HomeController::class, 'index'])->name('home');
//user
    Route::get('/user', [HomeController::class, 'user'])->name('user');
    Route::post('/user-delete', [HomeController::class, 'userDelete'])->name('user.delete');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::post('/profile-update', [HomeController::class, 'profileUpdate'])->name('profile.update');
    Route::post('/password-update', [HomeController::class, 'passwordUpdate'])->name('password.update');

    //about-section
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/social-icon', [AboutController::class, 'socialIcon'])->name('social.icon');
    Route::get('/status-icon/{id}', [AboutController::class, 'statusIcon'])->name('status.icon');
    Route::post('/store-icon', [AboutController::class, 'storeIcon'])->name('store.icon');
    Route::post('/delete-icon', [AboutController::class, 'deleteIcon'])->name('delete.icon');
    Route::post('/update-about', [AboutController::class, 'updateAbout'])->name('update.about');

//service-section
    Route::get('/add-service',[ServiceController::class,'index'])->name('add.service');
    Route::post('/store-service',[ServiceController::class,'storeService'])->name('store.service');
    Route::get('/manage-service',[ServiceController::class,'manageService'])->name('manage.service');
    Route::post('/service-destroy',[ServiceController::class,'serviceDestroy'])->name('service.destroy');
    Route::get('/edit-service/{id}',[ServiceController::class,'serviceEdit'])->name('edit.service');
    Route::get('/status-service/{id}',[ServiceController::class,'statusService'])->name('status.service');
    Route::post('/update-service',[ServiceController::class,'serviceUpdate'])->name('update.service');

//client-section
    Route::get('/client', [ClientController::class, 'index'])->name('client');
    Route::post('/store-client', [ClientController::class, 'storeContent'])->name('store.client');
    Route::get('/manage-client', [ClientController::class, 'clientManage'])->name('manage.client');
    Route::get('/edit-client/{id}', [ClientController::class, 'clientEdit'])->name('edit.client');
    Route::post('/update-client', [ClientController::class, 'clientUpdate'])->name('update.client');
    Route::post('/delete-client', [ClientController::class, 'clientDelete'])->name('delete.client');
    Route::get('/status-client/{id}', [ClientController::class, 'clientStatus'])->name('status.client');


    //work-section
    Route::get('/add-work',[WorkController::class,'index'])->name('add.work');
    Route::get('/manage-work',[WorkController::class,'manageWork'])->name('manage.work');
    Route::post('/store-work',[WorkController::class,'storeWork'])->name('store.work');
    Route::get('/status-work/{id}',[WorkController::class,'statusWork'])->name('status.work');
    Route::get('/edit-work/{id}',[WorkController::class,'editWork'])->name('edit.work');
    Route::post('/update-work',[WorkController::class,'updateWork'])->name('update.work');
    Route::post('/delete-work',[WorkController::class,'deleteWork'])->name('delete.work');

    //blog
    Route::get('/add-blog',[BlogController::class,'index'])->name('add.blog');
    Route::post('/store-blog',[BlogController::class,'storeBlog'])->name('store.blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::get('/status-blog/{id}',[BlogController::class,'statusBlog'])->name('status.blog');
    Route::get('/edit-blog/{id}',[BlogController::class,'editBlog'])->name('edit.blog');
    Route::post('/update-blog',[BlogController::class,'updateBlog'])->name('update.blog');
    Route::post('/delete-blog',[BlogController::class,'deleteBlog'])->name('delete.blog');
    Route::get('/details-blog/{id}',[BlogController::class,'detailsBlog'])->name('details.blog');



    //contact
    Route::get('/edit-contact',[ContactController::class,'editContact'])->name('edit.contact');
    Route::post('/update-contact',[ContactController::class,'updateContact'])->name('update.contact');

    //Inbox
    Route::post('/store-message',[InboxController::class,'storeMessage'])->name('store.message');
    Route::get('/manage-message',[InboxController::class,'manageMessage'])->name('manage.message');
    Route::get('/view-message/{id}',[InboxController::class,'viewMessage'])->name('view.message');
    Route::post('/delete-message',[InboxController::class,'deleteMessage'])->name('delete.message');



//Banner Section
    Route::get('/add-banner', [BannerController::class, 'bannerContent'])->name('add.banner');
    Route::post('/store-banner', [BannerController::class, 'storeBanner'])->name('store.banner');
    Route::get('/manage-banner', [BannerController::class, 'manageBanner'])->name('manage.banner');
    Route::post('/delete-banner', [BannerController::class, 'deleteBanner'])->name('delete.banner');
    Route::get('/status-banner/{id}', [BannerController::class, 'statusBanner'])->name('status.banner');
    Route::get('/edit-banner/{id}', [BannerController::class, 'editBanner'])->name('edit.banner');
    Route::post('/update-banner', [BannerController::class, 'updateBanner'])->name('update.banner');






});







