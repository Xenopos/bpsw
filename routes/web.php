<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthManager;
use \App\Http\Controllers\NormalUserController;
use \App\Http\Controllers\ServiceProviderController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|4
*/

Route::get('/', [App\Http\Controllers\AuthManager::class,'login'])->name('login');

Route::get('/login');
	
Route::get('/signup');

Route::get('/userstate');

Route::post('/logout', [App\Http\Controllers\AuthManager::class, 'logout'])->name('logout');


/*
FOR PROVIDER USERS
*/ 

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginpost'])->name('login.post');

Route::get('/signup', [AuthManager::class, 'signup'])->name('signup');
Route::post('/signup', [AuthManager::class, 'signuppost'])->name('signup.post');

Route::get('/userstate', [AuthManager::class, 'userstate'])->name('userstate');
Route::post('/userstate', [AuthManager::class, 'userstatepost'])->name('userstate.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/providersignup', [ServiceProviderController::class, 'providersignup'])->name('providersignup');
Route::post('/providersignup', [ServiceProviderController::class, 'providersignuppost'])->name('providersignup.post');

Route::get('/homepage', [AuthManager::class, 'homepage'])->name('homepage');
Route::post('/homepage', [AuthManager::class, 'homepagepost'])->name('homepage.post');

Route::get('/providerprofileeditpage', [ServiceProviderController::class, 'providerprofileeditpage'])->name('providerprofileeditpage');
Route::post('/providerprofileeditpage', [ServiceProviderController::class, 'providerprofileeditpagepost'])->name('providerprofileeditpage.post');


Route::get('/providersprofiles', [ServiceProviderController::class, 'providersprofiles'])->name('providersprofiles');
Route::post('/providersprofiles', [ServiceProviderController::class, 'providersprofilespost'])->name('providersprofiles.post');



Route::match(['get'], '/providerprofile/{user_id}', [ServiceProviderController::class, 'providerprofileoverview'])->name('providerprofileoverview');

/*
Route::post('/providerprofileoverview', [ServiceProviderController::class, 'providerprofileoverviewpost'])->name('providerprofileoverview.post');
*/ 
Route::get('/providerprofilepage', [ServiceProviderController::class, 'providerprofilepage'])->name('providerprofilepage');
Route::post('/providerprofilepage', [ServiceProviderController::class, 'providerprofilepagepost'])->name('providerprofilepage.post');


/*
FOR NORMAL USERS
*/

Route::get('/normaluserprofileoverview', [NormalUserController::class, 'normaluserprofileoverview'])->name('normaluserprofileoverview');
Route::post('/normaluserprofileoverview', [NormalUserController::class, 'normaluserprofileoverviewpost'])->name('normaluserprofileoverview.post');

Route::get('/normalusersignup', [NormalUserController::class, 'normalusersignup'])->name('normalusersignup');
Route::post('/normalusersignup', [NormalUserController::class, 'normalusersignuppost'])->name('normalusersignup.post');

Route::get('/normaluserprofileedit', [NormalUserController::class, 'normaluserprofileedit'])->name('normaluserprofileedit');
Route::post('/normaluserprofileedit', [NormalUserController::class, 'normaluserprofileeditpost'])->name('normaluserprofileedit.post');

Route::get('/normaluserpage', [NormalUserController::class, 'normaluserpage'])->name('normaluserpage');
Route::post('/normaluserpage', [NormalUserController::class, 'normaluserpagepost'])->name('normaluserpage.post');

Route::get('/normaluseroverview', [NormalUserController::class, 'normaluseroverview'])->name('normaluseroverview');
Route::post('/normaluseroverview', [NormalUserController::class, 'normaluseroverviewpost'])->name('normaluseroverview.post');

/*
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/chat/{id?}', 'ChatifyController@index')->name('messages');
    Route::post('/send-message', 'ChatifyController@sendMessage')->name('send.message');
    Route::post('/get-messages', 'ChatifyController@fetchMessages')->name('fetch.messages');
    Route::post('/message-seen', 'ChatifyController@messageSeen')->name('message.seen');
    Route::post('/delete-conversation', 'ChatifyController@deleteConversation')->name('delete.conversation');
    Route::post('/delete-message', 'ChatifyController@deleteMessage')->name('delete.message');
    Route::post('/search-contact', 'ChatifyController@searchContact')->name('search.contact');
    Route::post('/search', 'ChatifyController@search')->name('search');
});

*/

Route::post('/addcomment', [CommentController::class, 'store'])->name('addcommentpost');