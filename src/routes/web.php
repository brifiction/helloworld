<?php

// reserved route for helloworld
Route::group(['namespace' => 'brifiction\helloworld\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('helloworld', 'HelloWorldController@index');
});
