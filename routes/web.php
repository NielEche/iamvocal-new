<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\SpeakersController;
use App\Http\Controllers\homeHeaderController;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsDetailsController;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\PaymentController;
use App\Models\User;

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

Auth::routes();

Route::group([
    'middleware' => ['auth'],
    //'prefix' => 'admin'
], function () {
    Route::resources([
        'liquidbox' => AdminController::class,
        'events' => EventsController::class,   
        'news' => NewsController::class,    
        'newsdetails' => NewsDetailsController::class,    
        'aboutevent' => TeamsController::class, 
        'eventgallery' => MediaController::class,
        'editspeakers' => SpeakersController::class,
        'homeHeader' => HomeHeaderController::class,
        'homeAbout' => HomeAboutController::class,
        'career' => CareersController::class, 
        'donations' => DonationsController::class,    
        ]);
// Route::resources('eventspage', EventsController::class);
});



Route::redirect('/register', '/none');
Route::redirect('/dashboard', '/liquidbox');

Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::get('edit/{id}', [EventsController::class, 'showData']);
Route::get('allspeakers/{id}', [SpeakersController::class, 'showSpeaker']);
Route::post('/subevent',[SpeakersController::class, 'store'])->name('subevent');
Route::get('ourevents/{id}', [SpeakersController::class, 'showall'])->name('subevents');

Route::get('viewCareer/{id}', [CareersController::class, 'showall']);

Route::get('ourevents/showEvent/{id}', [SpeakersController::class, 'displaySpeakers']);
Route::get('ourevents/showEvent/{id}', [SpeakersController::class, 'displayNow'])->name('allevents');
Route::get('showSpeakerss/{id}', [SpeakersController::class, 'displayNoww']);
 
Route::post('editevent', [EventsController::class, 'update']);
Route::get('delete/{id}',[EventsController::class, 'destroy']);

Route::get('editp/{id}', [PartnersController::class, 'showData']);
Route::post('editpartners', [PartnersController::class, 'update']);
Route::get('deleteteam/{id}',[PartnersController::class, 'destroy']);

Route::get('editCareer/{id}', [CareersController::class, 'showData']);
Route::post('editC', [CareersController::class, 'update']);
Route::get('deleteCareer/{id}',[CareersController::class, 'destroy']);

Route::get('editDonate/{id}', [DonationsController::class, 'showData']);
Route::post('editDonate', [DonationsController::class, 'update']);
Route::get('deleteDonate/{id}',[DonationsController::class, 'destroy']);

Route::get('editT/{id}', [TeamsController::class, 'showData']);
Route::post('editTeam', [TeamsController::class, 'update']);
Route::get('deleteteam/{id}',[TeamsController::class, 'destroy']);

Route::get('editAbout/{id}', [TeamsController::class, 'showAboutus']);
Route::post('editAboutUs', [TeamsController::class, 'updateAU']);

Route::get('editM/{id}', [MediaController::class, 'showData']);
Route::post('editMedia', [MediaController::class, 'update']);
Route::get('deletemedia/{id}',[MediaController::class, 'destroy']);

Route::get('editn/{id}', [NewsController::class, 'showData']);
Route::get('allnews/{id}', [NewsDetailsController::class, 'show']);
Route::post('editnews', [NewsController::class, 'update']);
Route::get('deletenews/{id}',[NewsController::class, 'destroy']);
Route::get('allnewsdetails/{id}', [NewsDetailsController::class, 'showNews']);

Route::get('allnewsdetails/editS/{id}', [NewsDetailsController::class, 'showData']);
Route::post('editnewsdetails', [NewsDetailsController::class, 'update']);
Route::get('allnewsdetails/deleteND/{id}',[NewsDetailsController::class, 'destroy']);

Route::get('allspeakers/editS/{id}', [SpeakersController::class, 'showData']);
Route::post('editSpeaker', [SpeakersController::class, 'update']);
Route::get('allspeakers/deletespeaker/{id}',[SpeakersController::class, 'destroy']);

Route::get('editHS/{id}', [HomeHeaderController::class, 'showData']);
Route::get('editHA/{id}', [HomeHeaderController::class, 'showAbout']);
Route::post('editHeader', [HomeHeaderController::class, 'update']);
Route::post('editHAbout', [HomeHeaderController::class, 'updateH']);
Route::get('deleteheader/{id}',[HomeHeaderController::class, 'destroy']);


Route::get('editHI/{id}', [HomeHeaderController::class, 'showImages']);
Route::post('editHImages', [HomeHeaderController::class, 'updateImages']);

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/careers', [PagesController::class, 'partners'])->name('careers');
Route::get('/donate', [PagesController::class, 'donate'])->name('donate');
Route::get('/mainevents', [PagesController::class, 'events'])->name('events');
Route::get('/event-details', [PagesController::class, 'eventdetails'])->name('event-details');
Route::get('/speaker', [PagesController::class, 'speaker'])->name('speaker');
Route::get('/media', [PagesController::class, 'media'])->name('media');
Route::get('/em', [PagesController::class, 'em'])->name('em');
Route::get('/sots', [PagesController::class, 'sots'])->name('sots');
Route::get('/fc', [PagesController::class, 'fc'])->name('fc');




Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
