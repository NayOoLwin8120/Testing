<?php

use App\Http\Controllers;
use App\Models\Home\Aboutus;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FooterController;

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
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
Route::middleware(['auth'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'showprofile')->name('admin.profile');
        Route::get('/admin/editprofile', 'editprofile')->name('admin.editprofile');
        Route::post('/admin/storeprofile', 'storeprofile')->name('admin.storeprofile');
        Route::get('/admin/changepassword', 'changepassword')->name('admin.auth.changepassword');
        Route::post('/admin/updatepassword', 'updatepassword')->name('admin.updatepassword');
    });
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

    //all portfilio
    Route::get('/portfolio', 'HomePortfolio')->name('home.portfolio');
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

// All Partner Controller
Route::controller(PartnerController::class)->group(function () {
    Route::get('/admin/addpartner', 'addpartner')->name('admin.addpartner');
    Route::post('/admin/storepartner', 'storepartner')->name('admin.partner_store');
    Route::get('/admin/editpartner/{id}', 'editpartner')->name('admin.editpartner');
    Route::get('/admin/deletepartner/{id}', 'deletepartner')->name('admin.deletepartner');
    Route::get('/admin/allparter', 'allpartner')->name('admin.all_partner');


    Route::get('/admin/partner/multiimage', 'multiimage')->name('admin.partnerimg');
    Route::post('/admin/partner/update/multiimage', 'storemultiimage')->name('admin.store_partnerimage');

    Route::get('admin/partner/showMultipleimage', 'showmultipleimage')->name('admin.showmultiimage');

    //Edit multi image
    Route::get('admin/partner/editmultiimage/{id}', 'editmultiimage')->name('admin.editpartnerimage');
    Route::post('admin/partner/updatemultiimage/', 'updatemultiimage')->name('admin.update_partner');
    Route::get('admin/partner/deletemultiimage/{id}', 'deletemultiimage')->name('admin.deletepartnerimage');
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


//For Service Page
Route::controller(ServiceController::class)->group(function () {
    Route::get('admin/allservice', 'allservice')->name('admin.allservice');
    Route::get('admin/service/addservice', 'addservice')->name('admin.addservice');
    Route::post('admin/service/storeservice', 'storeservice')->name('admin.service_store');
    Route::get('admin/service/editservice/{id}', 'editservice')->name('admin.editservice');
    Route::post('admin/service/updateservice', 'update_service')->name('admin.updateservice');
    Route::get('admin/service/deleteservice/{id}', 'deleteservice')->name('admin.deleteservice');

    //service frontend
    Route::get('service_details/{id}', 'service_detail')->name('service_detail');
});


require __DIR__ . '/auth.php';
