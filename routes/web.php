<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Front Routes

Route::name('front.')->controller(FrontController::class)->group(function (){
    
    //  ================ Home Page ==================== \\
    Route::post('subscriber/store','subscriberStore')->name('subscriber.store');
    Route::get('/', 'index')->name('index');
    //  ================ about Page ==================== \\
    Route::get('/about', 'about')->name('about');
    //  ================ service Page ==================== \\
    Route::get('/service', 'service')->name('service');
    //  ================ contact Page ==================== \\
    Route::post('contact/store','contactStore')->name('contact.store');
    
    Route::get('/contact', 'contact')->name('contact');
});

// Admin Route 

Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])->group(function (){
    Route::middleware('auth')->group(function () {
        //  ================ Home Page ==================== \\
        Route::view('/', 'admin.index')->name('index');
        
        //  ================ Services Model ==================== \\
        Route::controller(ServiceController::class)->group(function () {
                Route::resource('services', ServiceController::class);
            }
         );

        //  ================ FEATURES Model ==================== \\
        
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        }
         );
    //  ================ Messages Model ==================== \\
    Route::controller(MessageController::class)->group(function () {
        Route::resource('messages', MessageController::class)->only(['index','show','destroy']);
    }
     );

    //  ================ Subscribers Model ==================== \\
    Route::controller(SubscriberController::class)->group(function () {
        Route::resource('subscribers', SubscriberController::class)->only(['index','destroy']);
    }
     );
    //  ================ Testimonial Model ==================== \\
    Route::controller(TestmonialController::class)->group(function () {
        Route::resource('testmonials', TestmonialController::class);
    }
     );

     //  ================ Setting Model ==================== \\
    Route::controller(SettingController::class)->group(function () {
        Route::resource('settings', SettingController::class)->only(['index','update']);
    }
     );

    });


    require __DIR__.'/auth.php';

});     


