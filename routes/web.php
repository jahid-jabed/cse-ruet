<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/library', [
    'uses' => 'MyController@libraryManagement',
    'as' => 'library'
]);


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/admin', [
    
    'middleware' => ['auth', 'admin'],
    'uses' => 'HomeController@adminPage',
    'as' => 'admin'
]);

Route::get('/faq',[
    'uses' => 'HomeController@faqPage',
    'as' => 'faq'
]);

Route::post('/add_comment',[
    'uses' => 'HomeController@addComment',
    'as' => 'add.comment'
]);

Route::get('/make-admin', [
    
    'middleware' => ['auth', 'admin'],
    'uses' => 'HomeController@makeAdmin',
    'as' => 'make.admin'
]);

Route::get('/add', [
    'uses' => 'HomeController@libraryAddBook',
    'as' => 'add-book'
]);

Route::post('/reply/{id}', [
    'uses' => 'HomeController@postReply',
    'as' => 'post.reply'
]);

Route::post('/form-fillup/{id}', [
    'uses' => 'HomeController@examFormFillUp',
    'as' => 'form.fillup'
]);

Route::post('/add', [
    'middleware' => ['auth', 'admin'],
    'uses' => 'HomeController@libraryAddNewBook',
    'as' => 'add.book'
]);

Route::get('/book-file/{filename}', [
   'uses' => 'MyController@getBookFile',
    'as' => 'book.pdf'
]);

Route::get('/profile/{id}/{user}', [
   'uses' => 'HomeController@getDetailProfile',
    'as' => 'full.profile'
]);

Route::get('/update/admitcard/{id}/{user}', [
    'middleware' => ['auth', 'admin'],
    'uses' => 'HomeController@infoAdmit',
    'as' => 'info.admit'
]);

Route::post('/update/admit_card', [
   'uses' => 'HomeController@updateAdmit',
    'as' => 'update.admit'
]);

Route::post('/edit-name', [
   'uses' => 'HomeController@postEditName',
    'as' => 'edt.name'
]);

Route::post('/edit-roll', [
   'uses' => 'HomeController@postEditRoll',
    'as' => 'edt.roll'
]);

Route::post('/edit-email', [
   'uses' => 'HomeController@postEditEmail',
    'as' => 'edt.email'
]);

Route::post('/edit-image', [
   'uses' => 'HomeController@postEditImage',
    'as' => 'edt.image'
]);

Route::post('/edit-blood', [
   'uses' => 'HomeController@postEditBlood',
    'as' => 'edt.blood'
]);

Route::post('/edit-mobile', [
   'uses' => 'HomeController@postEditMobile',
    'as' => 'edt.mobile'
]);

Route::post('/edit-birth', [
   'uses' => 'HomeController@postEditBirth',
    'as' => 'edt.birth'
]);

Route::post('/edit-present-address', [
   'uses' => 'HomeController@postEditPreAdd',
    'as' => 'edt.pre_address'
]);

Route::post('/edit-permanent-address', [
   'uses' => 'HomeController@postEditPerAdd',
    'as' => 'edt.per_address'
]);

Route::get('/user-image/{filename}', [
   'uses' => 'HomeController@getUserImage',
    'as' => 'get.image'
]);

Route::get('/admitcard/{id}', [
    'uses' => 'HomeController@admitCardManagement',
    'as' => 'admit_card'
]);

Route::get('/course_registration', [
    'uses' => 'HomeController@courseReg',
    'as' => 'course_reg'
]);

Route::get('/form_fillup', [
    'uses' => 'HomeController@formFillUp',
    'as' => 'exam'
]);

Route::get('/view/{filename}', [
   'uses' => 'MyController@viewPdfFile',
    'as' => 'pdf.viewer'
]);

Route::post('/course_registration/{id}', [
    'uses' => 'HomeController@coursePostReg',
    'as' => 'course.reg'
]);

Route::get('/download/admit_card/{roll}/{name}', [
    'uses' => 'HomeController@downAdmit',
    'as' => 'down.admit'
]);

//Route::get('/', [
//   'uses' => 'HomeController@getUserData',
//    'as' => 'data'
//]);

Route::get('/home', 'MyController@index');


