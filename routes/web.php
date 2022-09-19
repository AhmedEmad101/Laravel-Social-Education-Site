<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});
Route::view('SignUp', 'Signup');
Route::view('login', 'index');
route::post('emailcreation',[StudentController::class,'SaveUserData']);
route::post('UserValidation',[StudentController::class,'CheckUser']);
Route::view('profile', 'profile');
route::post('ProfileImg',[StudentController::class,'StoreProfilePhoto']);
route::post('ProfileImgView',[StudentController::class,'ProfilePhotosViewer']);

Route::view('SearchResults', 'SearchResults');
Route::post('searchforuser',[StudentController::class,'search']);
Route::post ('AddToFriends',[StudentController::class,'AddFriend']);

Route::post ('ViewFriends',[StudentController::class,'ListFriends']);
Route::post ('ViewChatFriends',[StudentController::class,'ChatFriends']);
Route::post ('ChatWith',[StudentController::class,'goToChatRoom']);
Route::post ('SendMessage',[StudentController::class,'SendMessage']);
Route::post ('ShowMessage',[StudentController::class,'ShowMessages']);
Route::post ('GoToExam',[StudentController::class,'GoToExam']);
Route::post ('CorrectExam',[StudentController::class,'CorrectExam']);
Route::post ('GoToProfilePhotos',[StudentController::class,'GotoProfilePhotos']);
Route::post ('showPhoto/{id}',[StudentController::class,'showPhoto']);
Route::post ('LikePhoto/{name}',[StudentController::class,'LikePhoto']);
Route::post ('SearchedUserProfile/{name}',[StudentController::class,'ViewProfileOnSearch']);
Route::post ('UserResult/{name}',[StudentController::class,'GetExamResult']);
Route::post ('Like',[StudentController::class,'Like']);
Route::post ('Unlike',[StudentController::class,'Unlike']);
Route::post ('AddPosts',[StudentController::class,'AddPosts']);
Route::post ('ShowPosts/{Name}',[StudentController::class,'ShowPosts']);
