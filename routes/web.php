<?php
 
Route::view('/', 'common/web/home');
Route::view('/home/{lang?}', 'common/web/home');
Route::view('/services/{lang?}', 'common/web/services');

Route::view('/driver-data', 'common/driver_data');

Route::get('/pages/{type}', function ($type) {
    return view('common/web/cmspage', compact('type'));
});

Route::get('/faq', function () {
    return view('common/web/faq');
});

Route::get('/howitworks', function () {
    return view('common/web/howitworks');
});

Route::get('/news/post/{id}', function ($id) {
    return view('common/web/homenewspost', compact('id'));
});

Route::get('/news/{id}', function ($id) {
    return view('common/web/homenews', compact('id'));
});

Route::get('/access-denied', function () {
    abort('403');
});




Route::get('/track/{id}', function ($id) {
    return view('common.admin.track', compact('id'));
});

Route::get('/limit', function () {
    return view('common.admin.limit.index');
});