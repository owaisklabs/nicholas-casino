<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    if(Auth::user()){
        if(Auth::user()->type == 'Admin' || Auth::user()->type == 'User'){
            return redirect()->route('dashboard');
        }
        return redirect()->route('home');
    }
    return redirect()->route('home');
});

Auth::routes();

// ADMIN PANEL ROUTES---------------------------------------
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    // DASHBOARD
    Route::get('/', function () {
        if(Auth::user()){
            if(Auth::user()->type == 'Admin' || Auth::user()->type == 'User'){
                return redirect()->route('dashboard');
            }
            return redirect()->route('home');
        }
        return redirect()->route('home');
    });

    // BLADE INDEXES----------------------------------------------------------------
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/index_kickers', 'Admin\UserController@index_kickers')->name('index_kickers');
    Route::get('/index_punters', 'Admin\UserController@index_punters')->name('index_punters');
    Route::get('/index_long_snappers', 'Admin\UserController@index_long_snappers')->name('index_long_snappers');
    // ----------------------------------------------------------------------------

    // API RESOURCES-------------------------------------------------
    Route::apiResources(['user'=>'Admin\UserController']);
    Route::apiResources(['logo'=>'Admin\LogoController']);
    Route::apiResources(['setting'=>'Admin\SettingController']);
    Route::apiResources(['banner'=>'Admin\BannerController']);
    Route::apiResources(['article'=>'Admin\ArticleController']);
    Route::apiResources(['brand'=>'Admin\BrandController']);
    Route::apiResources(['feature'=>'Admin\FeatureController']);
    Route::apiResources(['package'=>'Admin\PackageController']);
    Route::apiResources(['star_rating'=>'Admin\StarRatingController']);
    Route::apiResources(['user_video'=>'Admin\UserVideoController']);
    Route::resource('/contact_detail', 'Admin\ContactController');
    Route::resource('/faq', 'Admin\FaqController');

    // Route::get('/contact_detail', 'Admin\ContactController@index')->name('contact_detail');
    // Route::get('/contact_view', 'Admin\ContactController@show_data')->name('contact_view');


    // Route::post('user1','Admin\UserController@store')->name('user1');
    // --------------------------------------------------------------

    // SEARCH ROUTES--------------------------------------------------------------------------------------------
    Route::get('/search_users', 'Admin\UserController@search_users')->name('search_users');
    Route::get('/search_banners', 'Admin\BannerController@search_banners')->name('search_banners');
    Route::get('/search_articles', 'Admin\ArticleController@search_articles')->name('search_articles');
    Route::get('/search_brands', 'Admin\BrandController@search_brands')->name('search_brands');
    Route::get('/search_features', 'Admin\FeatureController@search_features')->name('search_features');
    Route::get('/search_packages', 'Admin\PackageController@search_packages')->name('search_packages');
    Route::get('/search_star_ratings', 'Admin\StarRatingController@search_star_ratings')->name('search_star_ratings');
    Route::get('/search_user_video', 'Admin\UserVideoController@search_user_video')->name('search_user_video');
    // Route::get('/search_user_contact', 'Admin\ContactController@search_user_contact')->name('search_user_contact');
    // Route::post('/paypal_payment','Admin\UserController@paypal_payment')->name('paypal_payment');
    // ---------------------------------------------------------------------------------------------------------

    // HELPERS--------------------------------------------------------------------------------------------------
    // ---------------------------------------------------------------------------------------------------------
});

// ARTISAN COMMAND ROUTES---------------------------------------
// Route::get('/install', function () {
//     Illuminate\Support\Facades\Artisan::call('migrate:fresh', [
//         '--seed' => true
//     ]);
// });
// Route::get('/migrate', function () {
//     Illuminate\Support\Facades\Artisan::call('migrate');
// });
// Route::get('/stepmigrate', function () {
//     Illuminate\Support\Facades\Artisan::call('migrate:rollback', [
//         '--step' => 1
//     ]);
// });
Route::get('/clear', function () {
    Illuminate\Support\Facades\Artisan::call('cache:clear');
    Illuminate\Support\Facades\Artisan::call('config:clear');
    Illuminate\Support\Facades\Artisan::call('view:clear');
    Illuminate\Support\Facades\Artisan::call('route:clear');
    Illuminate\Support\Facades\Artisan::call('config:cache');
});
// Route::get('/passport', function () {
//     Illuminate\Support\Facades\Artisan::call('passport:install');
// });
// Route::get('/key', function () {
//     Illuminate\Support\Facades\Artisan::call('key:generate');
// });
// Route::get('/storage', function () {
//     Illuminate\Support\Facades\Artisan::call('storage:link');
// });
// Route::get('/composer-du', function()
// {
//     Illuminate\Support\Facades\Artisan::call('dump-autoload');
// });
//--------------------------------------------------------------

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', function(){
//     return view('web.home.index');
// })->name('home');
Route::get('/home', 'Web\HomeController@index')->name('home');
Route::get('/about_us', 'Web\HomeController@about_us')->name('about_us');
Route::get('/articles', 'Web\HomeController@articles')->name('articles');
Route::get('/faq', 'Web\HomeController@faq')->name('faq');
Route::get('/policy', 'Web\HomeController@policy')->name('policy');
Route::get('/condition', 'Web\HomeController@condition')->name('condition');
Route::get('/punters', 'Web\HomeController@punters')->name('punters');
Route::get('/long_snappers', 'Web\HomeController@long_snappers')->name('long_snappers');
Route::get('/packages', 'Web\HomeController@packages')->name('packages');
Route::get('/contact_us', 'Web\HomeController@contact_us')->name('contact_us');
Route::get('/web_register', 'Web\HomeController@web_register')->name('web_register');
Route::get('/web_login', 'Web\HomeController@web_login')->name('web_login');
Route::post('/web_login', 'Web\HomeController@authenticate')->name('web_login');
Route::get('/my_profile', 'Web\HomeController@my_profile')->name('my_profile');
Route::post('/profile_builder/{id}', 'Admin\UserController@profile_builder')->name('profile_builder');
Route::get('/profile', 'Web\HomeController@profile')->name('profile');
Route::post('/contact', 'Web\HomeController@contact_data')->name('contact');

// search_players
Route::get('/search_players', 'Web\HomeController@search_players')->name('search_players');
// Route::get('/paypal_payment/{paymentID}', 'Web\HomeController@paypal_payment')->name('paypal_payment');


// truncate all data
// Route::get('/plug_n_play', function(){
//     Schema::disableForeignKeyConstraints();
//     $tableNames = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
//     // dd($tableNames);
//     DB::table($name)->truncate();
//     Schema::enableForeignKeyConstraints();
// })->name('plug_n_play');
