<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactForm;
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
//-----------index controller--------
Route::get('/', 'App\Http\Controllers\indexController@index');
Route::get('/index', 'App\Http\Controllers\indexController@index');
Route::get('/home', 'App\Http\Controllers\indexController@index');

//about page
Route::get('/about-us', 'App\Http\Controllers\indexController@aboutPage');


//---------cause------------------
Route::get('/causes', 'App\Http\Controllers\indexController@causePageView');

Route::get('/causes/{id}', 'App\Http\Controllers\indexController@causesView');
Route::post('/causesData', 'App\Http\Controllers\indexController@causesData');
Route::post('/causesComment', 'App\Http\Controllers\indexController@causesComment');



//-------------events-----------
Route::get('/events', function () {
    return view('events');
});
Route::get('/eventsPageView', 'App\Http\Controllers\indexController@eventPageView');
Route::get('/eventsView', 'App\Http\Controllers\indexController@eventsView');
Route::get('/events/{id}', 'App\Http\Controllers\indexController@eventsViewId');
Route::post('/eventsData', 'App\Http\Controllers\indexController@eventsData');
Route::post('/eventsComment', 'App\Http\Controllers\indexController@eventsComment');




//-------------blogs--------------
Route::get('/blogs', 'App\Http\Controllers\indexController@blogssideView');
Route::get('/blogsView', 'App\Http\Controllers\indexController@blogsView');
Route::get('/blogs/{id}', 'App\Http\Controllers\indexController@blogsViewId');
Route::post('/blogsData', 'App\Http\Controllers\indexController@blogsData');
Route::post('/blogsComment', 'App\Http\Controllers\indexController@blogsComment');
Route::post('/blogLikes', 'App\Http\Controllers\indexController@blogLikes');
Route::get('/footerBlog', 'App\Http\Controllers\indexController@footerBlog');
Route::get('/blogsPageView', 'App\Http\Controllers\indexController@blogsPageView');



//-----------contact page------
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/emails', function () {
    Mail::to('sayyedasif444@gmail.com')->send(new contactForm());
   return new contactForm();
});
Route::post('/contactForm', 'App\Http\Controllers\indexController@contactForm');



//-----------footer--------------------------
Route::post('/subscriberForm', 'App\Http\Controllers\indexController@subscriberForm');












Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/event-details', function () {
    return view('event-details');
});
Route::get('/donate', function () {
    return view('donation');
});
Route::get('/gallery', function () {
    return view('gallery');
});





//-----------------------Admin panel ------------------------------------------------------------------------------------------
Route::get('/admin/index', function () {
    return view('admin.index');
});

Route::get('/admin/pages', function () {
    return view('admin.pages');
});


//------------------event-------
Route::get('/admin/events/add-events', function () {
    return view('admin.add-events');
});
Route::get('/admin/events', 'App\Http\Controllers\eventController@index');
Route::post('addEvents', 'App\Http\Controllers\eventController@addEvent');
Route::get('eventDetails', 'App\Http\Controllers\eventController@eventDetails');
Route::post('deleteEvent', 'App\Http\Controllers\eventController@deleteEvent');
Route::get('/admin/events/{id}', 'App\Http\Controllers\eventController@editEventData');
Route::post('editEvents', 'App\Http\Controllers\eventController@editEvents');
Route::post('eventResponse', 'App\Http\Controllers\eventController@eventResponse');


//-------------blog-----------------
Route::get('/admin/blogs/add-blogs', function () {
    return view('admin.add-blogs');
});
Route::get('/admin/blogs', 'App\Http\Controllers\blogsController@index');
Route::post('addBlogs', 'App\Http\Controllers\blogsController@addBlog');
Route::get('blogDetails', 'App\Http\Controllers\blogsController@blogDetails');
Route::post('deleteBlog', 'App\Http\Controllers\blogsController@deleteBlog');
Route::get('/admin/blogs/{id}', 'App\Http\Controllers\blogsController@editBlogData');
Route::post('editBlogs', 'App\Http\Controllers\blogsController@editBlogs');
Route::post('blogResponse', 'App\Http\Controllers\blogsController@blogResponse');
Route::post('deleteBlogcomment', 'App\Http\Controllers\blogsController@deleteBlogcomment');


//-------------Cause-----------------
Route::get('/admin/causes/add-causes', function () {
    return view('admin.add-causes');
});
Route::get('/admin/causes', 'App\Http\Controllers\causeController@index');
Route::post('addCauses', 'App\Http\Controllers\causeController@addCause');
Route::get('causeDetails', 'App\Http\Controllers\causeController@causeDetails');
Route::post('deleteCause', 'App\Http\Controllers\causeController@deleteCause');
Route::get('/admin/causes/{id}', 'App\Http\Controllers\causeController@editCauseData');
Route::post('editCauses', 'App\Http\Controllers\causeController@editCauses');
Route::post('causeResponse', 'App\Http\Controllers\causeController@causeResponse');
Route::post('deleteCausecomment', 'App\Http\Controllers\causeController@deleteCausecomment');



Route::post('/addMetaData', 'App\Http\Controllers\metaDataController@addMetaData');
