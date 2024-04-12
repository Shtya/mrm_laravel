<?php

use App\Models\blog;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\actionController;
use App\Mail\sendMessage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale() , 
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] 
], function()
{
	

Route::get('/', function () { return view('pages.home'); });
Route::get('/about-us', function () { return view('pages.about-us'); });


Route::get('/contact-us', function () { return view('pages.contact-us'); });
Route::post('/contact-us/sendmessage', function(){
        Mail::to('shtya54@gmail.com')->send( new sendMessage()) ;
        session()->flash('showpopup', true);
        return redirect()->back();
        })->name('sendmessage');


Route::get('/blog', function () { return view('pages.blogs'); });
Route::get('/privacy', function () { return view('pages.privacy'); });
Route::get('/terms', function () { return view('pages.terms'); });

Route::get('/web-development-company-in-dubai'      , function () { return view('pages.1_dev'); });
Route::get('/Photography-In-Dubai'            , function () { return view('pages.2_photography'); });
Route::get('/exhibition-and-display-stand-agency-in-dubai', function ()  { return view('pages.3_exhibition'); });
Route::get('/indoor-and-outdoor-signages-agency-in-dubai'                        , function () { return view('pages.4_signages'); });
Route::get('/social-media-marketing-agency-in-dubai', function () { return view('pages.5_marketing'); });
Route::get('/Corporate-gifts-in-dubai'                    , function () { return view('pages.6_gifts'); });
Route::get('/advertising-ppc-agency-in-dubai'             , function () { return view('pages.7_advertising'); });
Route::get('/branding-agency-in-dubai'                    , function () { return view('pages.8_branding'); });
Route::get('/seo-agency-in-dubai'                         , function () { return view('pages.9_seo'); });


Route::get('/facebook' , function () { return view('pages.facebook'); })->name('facebook');
Route::get('/snapchat' , function () { return view('pages.snapchat'); })->name('snapchat');
Route::get('/instagram', function () { return view('pages.instagram'); })->name('instagram');
Route::get('/linkedin' , function () { return view('pages.linkedin'); })->name('linkededin');
Route::get('/x'        , function () { return view('pages.x'); })->name('x');
Route::get('/tiktok'   , function () { return view('pages.tiktok'); })->name('tiktok');



// create article dashboard
Route::get('/dashboard/create' , function () { return view('dashboard.create'); });
Route::post('/dashboard/upload' , [BlogController::class, 'upload'])->name('ckeditor.upload');
Route::post('/dashboard/store' , [BlogController::class, 'store']) ;
Route::post('/dashboard/store' , [BlogController::class, 'store']) ;

Route::get('/dashboard/show' , [BlogController::class, 'show']) ;
Route::get('/blog/{id}/{url}' ,  [BlogController::class, 'showBlog']) ;


Route::get('/blog-edite/{id}' , function($id ){
    $blog =blog::findorFail($id) ;
    return view("dashboard.edite" , ['blog'=> $blog ]) ;
    
}) ;

Route::get('/blog-delete/{id}' , [BlogController::class, 'delete'] )->name('blog-delete') ;
Route::post('/blog-edite-update/{id}' , [BlogController::class, 'update'] )->name('update') ;


// comments
Route::post('/add-comment/{blog_id}' , [BlogController::class, 'insert_blog'])->name('add-comment') ;


}) ;