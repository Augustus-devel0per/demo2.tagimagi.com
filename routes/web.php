<?php


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
    return Redirect::to('/home');
});

Route::get('/admin', function () {
    return Redirect::to('admin/home');
});

Route::namespace('Website')
    ->group(function () {
        Route::get('/{slug}', PageController::class )->name('page');
        Route::post('/verify-a-tag-profile/review', 'TagProfileController@verifyForTagProfileDataOne' )->name('verify.form-one');
        Route::post('/save-a-tag-profile', 'TagProfileController@SaveTagProfileDataOne' )->name('save.form-one');
    });

Route::prefix('admin')
->group(function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::namespace('Admin')
    ->middleware(['auth'])
    ->as('admin.')
    ->prefix('admin')

    ->group(function () {
        Route::get('change-password', 'ChangePasswordController@index')->name('change.password.show');
        Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
        
        Route::resource('/form-ones', FormOneController::class)->except(['create', 'show', 'edit', 'udpate', 'store']);
        Route::resource('/form-twos', FormTwoController::class)->except(['create', 'show', 'edit', 'udpate', 'store']);
        Route::resource('/form-threes', FormThreeController::class)->except(['create', 'show', 'edit', 'udpate', 'store']);

        Route::resource('/setting', SettingController::class)->except(['index','create', 'show', 'destroy', 'store']);
    });
