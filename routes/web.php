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
        'eventpartners' => PartnersController::class,    
        'aboutevent' => TeamsController::class, 
        'eventgallery' => MediaController::class,
        'editspeaker' => SpeakersController::class,
        'homeHeader' => HomeHeaderController::class,
        'career' => CareersController::class,    
        ]);
// Route::resources('eventspage', EventsController::class);

});



Route::redirect('/register', '/none');
Route::redirect('/dashboard', '/liquidbox');

Route::get('edit/{id}', [EventsController::class, 'showData']);
Route::get('allspeakers/{id}', [SpeakersController::class, 'showSpeaker']);
Route::get('eventspeakers/{id}', [SpeakersController::class, 'showall'])->name('subevents');

Route::get('viewCareer/{id}', [CareersController::class, 'showall']);

Route::get('eventspeakers/showSpeaker/{id}', [SpeakersController::class, 'displaySpeakers']);
Route::get('eventspeakers/showSpeaker/{id}', [SpeakersController::class, 'displayNow'])->name('allevents');
Route::get('showSpeakerss/{id}', [SpeakersController::class, 'displayNoww']);

Route::post('editevent', [EventsController::class, 'update']);
Route::get('delete/{id}',[EventsController::class, 'destroy']);

Route::get('editp/{id}', [PartnersController::class, 'showData']);
Route::post('editpartners', [PartnersController::class, 'update']);
Route::get('deleteteam/{id}',[PartnersController::class, 'destroy']);

Route::get('editCareer/{id}', [CareersController::class, 'showData']);
Route::post('editC', [CareersController::class, 'update']);
Route::get('deleteCareer/{id}',[CareersController::class, 'destroy']);

Route::get('editT/{id}', [TeamsController::class, 'showData']);
Route::post('editTeam', [TeamsController::class, 'update']);
Route::get('deleteteam/{id}',[TeamsController::class, 'destroy']);

Route::get('editM/{id}', [MediaController::class, 'showData']);
Route::post('editMedia', [MediaController::class, 'update']);
Route::get('deletemedia/{id}',[MediaController::class, 'destroy']);

Route::get('allspeakers/editS/{id}', [SpeakersController::class, 'showData']);
Route::post('editSpeaker', [SpeakersController::class, 'update']);
Route::get('allspeakers/deletespeaker/{id}',[SpeakersController::class, 'destroy']);

Route::get('editHS/{id}', [HomeHeaderController::class, 'showData']);
Route::get('editHA/{id}', [HomeHeaderController::class, 'showAbout']);
Route::post('editHeader', [HomeHeaderController::class, 'update']);
Route::post('editHAbout', [HomeHeaderController::class, 'updateH']);
Route::get('deleteheader/{id}',[HomeHeaderController::class, 'destroy']);

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/careers', [PagesController::class, 'partners'])->name('careers');
Route::get('/mainevents', [PagesController::class, 'events'])->name('events');
Route::get('/event-details', [PagesController::class, 'eventdetails'])->name('event-details');
Route::get('/speaker', [PagesController::class, 'speaker'])->name('speaker');
Route::get('/media', [PagesController::class, 'media'])->name('media');
Route::get('/em', [PagesController::class, 'em'])->name('em');
Route::get('/sots', [PagesController::class, 'sots'])->name('sots');
Route::get('/fc', [PagesController::class, 'fc'])->name('fc');
Route::get('/reframe', [PagesController::class, 'reframe'])->name('reframe');



Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');
