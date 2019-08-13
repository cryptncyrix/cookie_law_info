<?php

/*
 * SetCookie
 */

Route::get('setRedirectCookie', function () {
    return redirect()->back()->withCookie(Cookie::make(config('cookie.cookie.name'), 'success', config('cookie.cookie.life_time')));
})->name('setCookie.setRedirectCookie');

Route::post('setAjaxCookie', function () {
    return response()->json([], 200)->withCookie(Cookie::make(config('cookie.cookie.name'), 'success', config('cookie.cookie.life_time')));
})->name('setCookie.setAjaxCookie');