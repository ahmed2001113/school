<?php

use App\Livewire\Conn;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Grades\GradesController;
use App\Http\Controllers\section\SectionController;
use App\Http\Controllers\Classrooms\ClassroomController;

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
// احنا استخمن الكود ده لانه بيتفظ بالغه الي انت مختارها لو خرجت من الموقع
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
       
Route::group(['middleware'=>['guest']],function(){
Route::get('/', function () {
    return view('auth.login');
});
});

Route::group(['middleware'=>['auth'] , 'prefix'=>'dashboard'],function(){

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('teachers', TeacherController::class);
Route::resource('grades', GradesController::class);
Route::resource('classroom', ClassroomController::class);
Route::post('delete_all', [ClassroomController::class,'delete'])->name('delete_all');
Route::post('Filter_Classes', [ClassroomController::class,'Filter_Classes'])->name('Filter_Classes');
Route::resource('Sections', SectionController::class);
// ده راوت خاص بالاجاكس في صفحه السيكشن
Route::get('/classes/{id}', [SectionController::class,'getclasses']);
Route::get('/live',function(){
    return view('pages.live.empty');
} );
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
});
// لازم الراوتس بتاعت اللارافيل تكون كده 
    Route::get('ar/dashboard/add-parent',function(){
    return view('livewire.add-parent');
});
    Route::get('en/dashboard/add-parent',function(){
    return view('livewire.add-parent');
});
    Route::get('ar/dashboard/show-form',function(){
    return view('livewire.show-form');
});
    Route::get('en/dashboard/show-form',function(){
    return view('livewire.show-form');
});
