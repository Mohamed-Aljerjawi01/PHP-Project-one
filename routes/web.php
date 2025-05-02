<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteOne\SiteOneController;
use App\Http\Controllers\SiteTwo\SiteTwoController;
use App\Http\Controllers\SiteThree\SiteThreeController;
use App\Http\Controllers\SiteFour\SiteFourController;
use App\Http\Controllers\SiteFive\SiteFiveController;


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


/*
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
*/


/*
////////////////////////////// Licture three => SiteThree //////////////////////////////
// Talking about Validation in php laravel and How to uploads file to DB
// Search about: 1- validattion in html 2- validattion in php laravel 
// 1- Use SiteThreeController in SiteThree Folder in controllers Folder in Http Folder.
// 2- Use Folders in SiteThree Folder and SiteThreeUploads Folder in public Folder.
// 3- Use files in SiteThree Folder in views Folder in recources Folder.
// 4- Use This code in web.php file in routes Folder.
//////////////////////////////
Route::prefix('site3')->name('site3.')->controller(SiteThreeController::class)->group(function(){
    Route::get('/master' , 'master');
    Route::get('/home' , 'home')->name('home');
    Route::get('/services' , 'services')->name('services');
    Route::get('/portfolio' , 'portfolio')->name('portfolio');
    Route::get('/about' , 'about')->name('about');
    Route::get('/team' , 'team')->name('team');
    Route::get('/contact' , 'contact')->name('contact');
    Route::get('/ok' , 'ok')->name('ok');
    Route::post('/contact' , 'postcontact')->name('postcontact');
});
*/


/*
////////////////////////////// Licture four => SiteFour //////////////////////////////
// Talking about uploads data to DB in php laravel and How to view this data in table to user
// Search about: 1- DataType in DataBase 2- Constrations in DataBase 
// 1- Use SiteFourController in SiteFour Folder in controllers Folder in Http Folder.
// 2- Use Folders in SiteFour Folder and SiteFourUploads Folder in public Folder.
// 3- Use files in SiteFour Folder in views Folder in recources Folder.
// 4- Use Contact File in Models Folder in app Folder.
// 5- Use contacts file in migrations Folder in database Folder.
// 6- Use .env file.
// 7- Use This code in web.php file in routes Folder.
//////////////////////////////
Route::prefix('site4')->name('site4.')->controller(SiteFourController::class)->group(function(){
    Route::get('/master' , 'master');
    Route::get('/home' , 'home')->name('home');
    Route::get('/services' , 'services')->name('services');
    Route::get('/portfolio' , 'portfolio')->name('portfolio');
    Route::get('/about' , 'about')->name('about');
    Route::get('/team' , 'team')->name('team');
    Route::get('/contact' , 'contact')->name('contact');
    Route::get('/ok' , 'ok')->name('ok');
    Route::post('/contact' , 'postcontact')->name('postcontact');
    Route::get('/viewcontact' , 'viewcontact')->name('viewcontact');
});
*/


////////////////////////////// Licture five => SiteFive //////////////////////////////
// Talking about entering fake data in to form or database , edit and update data form or database
// Search about: 1- Methods of Faker Library
// 1- Use SiteFiveController in SiteFive Folder in controllers Folder in Http Folder.
// 2- Use Folders in SiteFive Folder and SiteFiveUploads Folder in public Folder.
// 3- Use files in SiteFive Folder in views Folder in recources Folder.
// 4- Use Contact File in Models Folder in app Folder.
// 5- Use contacts file in migrations Folder in database Folder.
// 6- Use .env file.
// 7- Use This code in web.php file in routes Folder.
// 8- Use ContactFactory file in factories Folder in database Folder.
// 9- Use DatabaseSeeder file in seeders Folder in database Folder
//////////////////////////////
Route::prefix('site5')->name('site5.')->controller(SiteFiveController::class)->group(function(){
    Route::get('/master' , 'master');
    Route::get('/home' , 'home')->name('home');
    Route::get('/services' , 'services')->name('services');
    Route::get('/portfolio' , 'portfolio')->name('portfolio');
    Route::get('/about' , 'about')->name('about');
    Route::get('/team' , 'team')->name('team');
    Route::get('/contact' , 'contact')->name('contact');
    Route::get('/ok' , 'ok')->name('ok');
    Route::post('/contact' , 'postcontact')->name('postcontact');
    Route::get('/viewcontact' , 'viewcontact')->name('viewcontact');
    Route::get ('/EditContact/{id}' , 'EditContact')->name('EditContact');
    Route::post ('/update' , 'update')->name('update');

});




