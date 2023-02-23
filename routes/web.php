<?php

use App\Http\Controllers;
use App\Models\Home\Aboutus;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FooterController;

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfilioController;


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

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//All Auth Controller
Route::controller(AuthController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'showprofile')->name('admin.profile');
    Route::get('/admin/editprofile', 'editprofile')->name('admin.editprofile');
    Route::post('/admin/storeprofile', 'storeprofile')->name('admin.storeprofile');

    Route::get('/admin/changepassword', 'changepassword')->name('admin.auth.changepassword');
    Route::post('/admin/updatepassword', 'updatepassword')->name('admin.updatepassword');
});
//All Home controller
Route::controller(HomeController::class)->group(function () {
    Route::get('/admin/homeslider', 'homeslider')->name('admin.homeslider');
    Route::post('/admin/update/storehomeslider', 'storehomeslider')->name('admin.storehomeslider');
});
//All About us controller
Route::controller(AboutusController::class)->group(function () {
    Route::get('/admin/aboutus', 'aboutus')->name('admin.aboutus');
    Route::post('/admin/update/storeaboutus', 'storeaboutus')->name('admin.store_about_us');
    Route::get('/admin/about', 'aboutmain')->name('home.about');


    Route::get('/admin/about/multiimage', 'multiimage')->name('admin.multiimage');
    Route::post('/admin/about/update/multiimage', 'storemultiimage')->name('admin.store_multiimage');

    Route::get('admin/aboutus/showMultipleimage', 'showmultipleimage')->name('admin.showmultiimage');

    //Edit multi image
    Route::get('admin/aboutus/editmultiimage/{id}', 'editmultiimage')->name('admin.editmultiimage');
    Route::post('admin/aboutus/updatemultiimage/', 'updatemultiimage')->name('admin.update_multiimage');
    Route::get('admin/aboutus/deletemultiimage/{id}', 'deletemultiimage')->name('admin.deletemultimage');
});

//Portfilio Controller
Route::controller(PortfilioController::class)->group(function () {
    Route::get('admin/allportfilio', 'allportfilio')->name('admin.allportfilio');
    Route::get('admin/addportfilio', 'addportfilio')->name('admin.portfilio_add');
    Route::post('admin/addportfilio', 'storeportfilio')->name('admin.portfilio_store');
    Route::get('admin/editportfilio/{id}', 'editportfilio')->name('admin.editortfilio');
    Route::post('admin/updateportfilio', 'updateportfilio')->name('admin.updateportfilio');
    Route::get('admin/deleteportfilio/{id}', 'deleteportfilio')->name('admin.deleteportfilio');
    Route::get('admin/portfilio_detail/{id}', 'portfilio_detail')->name('admin.portfilio_detail');
});

//BlogController
Route::controller(BlogController::class)->group(function () {
    Route::get('admin/allblog', 'allblog')->name('admin.allblogs');
    Route::get('admin/addblog', 'addblog')->name('admin.addblog');
    Route::post('admin/storeblog', 'storeblog')->name('admin.blog_store');
    Route::get('admin/editblog/{id}', 'editblog')->name('admin.editblog');
    Route::post('admin/updateblog', 'updateblog')->name('admin.updateblog_detail');
    Route::get('admin/deleteblog/{id}', 'deleteblog')->name('admin.deleteblog');

    // For Blog Detail Page
    Route::get('blog_detail/{id}', 'blog_detail')->name('blogdetail');
    Route::get('category/blog/{id}', 'categoryDetail')->name('viewcategory');
    Route::get('blogs', 'allblogs')->name('allblogs');
});
//Category Controller
Route::controller(CategoryController::class)->group(function () {
    Route::get('admin/all_blogs_category', 'all_blog_category')->name('admin.all_blog_category');
    Route::get('admin/add_blog_category', 'add_blog_category')->name('admin.addblogcategory');
    Route::post('admin/store_blog_category', 'store_blog_category')->name('admin.blogcategory_store');
    Route::get('admin/edit_blog_category/{id}', 'edit_blog_category')->name('admin.editcategoryblog');
    Route::post('admin/update_blog_category/{id}', 'update_blog_category')->name('admin.update_blog_category');
    Route::get('admin/delete_blog_category/{id}', 'delete_blog_category')->name('admin.deletecategoryblog');
});

// Footer Controller
Route::controller(FooterController::class)->group(function () {
    Route::get('admin/footer/all_footer', 'footer')->name('admin.all_footer');
    Route::get('admin/footer/add_footer', 'addfooter')->name('admin.footer_add');
    Route::post('admin/store_footer', 'storefooter')->name('admin.footer_store');
    Route::get('admin/edit_footer/{id}', 'editfooter')->name('admin.editfooter');
    Route::post('admin/update_footer/{id}', 'updatefooter')->name('admin.footer_update');
    Route::get('admin/delete_footer/{id}', 'deletefooter')->name('admin.deleteblog');

    // For Footer Detail page
});

Route::controller(ContactController::class)->group(function () {
    Route::get('admin/allcontact', 'allcontact')->name('admin.allcontactdata');
    Route::get('admin/Contactme', 'adddata')->name('admin.contactme');
    Route::post('admin/Storecontactme', 'storedata')->name('admin.contactme_store');
    Route::get('admin/editcontactme/{id}', 'editcontact')->name('admin.editcontact');
    Route::post('admin/updatecontact/{id}', 'updatecontact')->name('admin.updatecontactme');
    Route::get('admin/deletecontact/{id}', 'deletecontact')->name('admin.deletecontact');


    Route::post('/store/message', 'StoreMessage')->name('store.message');
    Route::get('/contact/message', 'ContactMessage')->name('contact.message');
    Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');

    //For Contact Detail page
    Route::get('/contact', 'contact')->name('contactme');
});

require __DIR__ . '/auth.php';
