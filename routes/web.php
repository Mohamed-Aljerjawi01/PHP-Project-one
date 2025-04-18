<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteOne\SiteOneController;
use App\Http\Controllers\SiteTwo\SiteTwoController;


Route::get('/', function () {
    // return 'welcom ' . 'page';
    return view('welcome');
});

////////////////////////////// Licture One => SiteOne ////////////////////////////// 
// 1- Use SiteOneController in SiteOne Folder in controllers Folder in Http Folder.
// 2- Use files in SiteOne Folder in views Folder in recources Folder.
// 3- Use This code in web.php file in routes Folder.
//////////////////////////////

// line coment

/*
more line coments
*/

//////////////////////////////

/*
// * user site :-

// Route::get('/user/profile' , function(){
//     // echo 'user profile';
//     return 'user profile';
// });

**********

// Route::get('/user/profile/{id}' , function($id){
//     // echo 'mohammed ' . 'aljerjawi'; ==> . is concatanation in php
//     // echo 'user id: ' . $id;
//     return 'user id: ' . $id;
// });
*/

//////////////////////////////

/*
// * news site :-

// Route::get('news/' , function(){
//     $news = [1,2,3,6,8];
//     foreach ($news as $new) {
//         // echo $new . ' ';
//         echo $new . '<br>';
//     }
// });

**********

// Route::get('news/{id}' , function($id){
//     $news = [1,2,3,6,8];
//     if($id){
//         echo 'new is: ' . $id;
//     }
//     else{
//         foreach ($news as $new) {
//             // echo $new . ' ';
//             echo $new . '<br>';
//         }
//     }
// });

**********

// Route::get('news/{id?}' , function($id = null){
//     $news = [1,2,3,6,8];
//     if($id){
//         echo 'new is: ' . $id;
//     }
//     else{
//         echo 'all news: <br>';
//         foreach ($news as $new) {
//             // echo $new . ' ';
//             echo $new . '<br>';
//         }
//     }
// });
*/

//////////////////////////////

/*
// * site 1 / home , about us , contact us //
// home 
Route::get( '/site1/home', function(){
    echo '<h1>Welcome to Home</h1>';
});
// about us
Route::get( '/site1/about', function(){
    echo '<h1>Welcome to About</h1>';
});
// contact us
Route::get( '/site1/contact', function(){
    echo '<h1>Welcome to Contact</h1>';
});

**********

// * site 2 / home , about us , contact us //
// prefix
Route::prefix('site2')->group(function(){
    // home
    Route::get( '/home', function(){
        echo '<h1>Welcome to Home</h1>';
    });
    // about us
    Route::get( '/about', function(){
        echo '<h1>Welcome to About</h1>';
    });
    // contact us
    Route::get( '/contact', function(){
        echo '<h1>Welcome to Contact</h1>';
    });
});

**********

// * site 3 / products / product-one , product-two , product-three //
// prefix
Route::prefix('site3/products')->group(function(){
    // home
    Route::get( '/product-one', function(){
        echo '<h1>Welcome to product-one</h1>';
    });
    // about us
    Route::get( '/product-two', function(){
        echo '<h1>Welcome to product-two</h1>';
    });
    // contact us
    Route::get( '/product-three', function(){
        echo '<h1>Welcome to product-three</h1>';
    });
});
*/

//////////////////////////////

/*
// * site 1 / home , about us , contact us //
// prefix
Route::prefix('site1')->group(function(){
    // home
    Route::get( '/home', [SiteOneController::class , 'home']);
    // about us
    Route::get( '/about', [SiteOneController::class , 'about']);
    // contact us
    Route::get( '/contact', [SiteOneController::class , 'contact']);
});

**********

// * site 1 / home , about us , contact us //
// prefix
Route::prefix('site1')->group(function(){
    // home
    Route::get( '/home', [SiteOneController::class , 'home']);
    // about us
    Route::get( '/about', [SiteOneController::class , 'about']);
    // contact us
    Route::get( '/contact', [SiteOneController::class , 'contact']);
    // msg
    Route::get( '/msg', [SiteOneController::class , 'msg']);
    // massege
    Route::get( '/massege/{id}', [SiteOneController::class , 'massege']);
});

**********

// * site 1 / home , about us , contact us //
// prefix
Route::prefix('site1')->controller(SiteOneController::class)->group(function(){
    // home
    Route::get( '/home' , 'home');
    // about us
    Route::get( '/about' , 'about');
    // contact us
    Route::get( '/contact' , 'contact');
    // msg
    Route::get( '/msg' , 'msg');
    // massege
    Route::get( '/massege/{id}', 'massege');
    // masseges
    Route::get( '/masseges/{id}', 'masseges');
    // massegesOne
    Route::get( '/massegesOne/{id}', 'massegesOne');
    // massegesTwo
    Route::get( '/massegesTwo/{id}', 'massegesTwo');
});
*/

////////////////////////////// Licture Two => SiteTwo //////////////////////////////
// 1- Use SiteTwoController in SiteTwo Folder in controllers Folder in Http Folder.
// 2- Use Folders in SiteTwo Folder in public Folder.
// 3- Use files in SiteTwo Folder in views Folder in recources Folder.
// 4- Use This code in web.php file in routes Folder.
//////////////////////////////

Route::prefix('site2')->name('site2.')->controller(SiteTwoController::class)->group(function(){
    Route::get('/master' , 'master');
    Route::get('/home' , 'home')->name('home');
    Route::get('/services' , 'services')->name('services');
    Route::get('/portfolio' , 'portfolio')->name('portfolio');
    Route::get('/about' , 'about')->name('about');
    Route::get('/team' , 'team')->name('team');
    Route::get('/contact' , 'contact')->name('contact');
    Route::post('/contact' , 'postcontact')->name('postcontact');
});

