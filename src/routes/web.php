<?php

// reserved route for helloworld
Route::get('helloworld', function(){
    return view('helloworld::index');
});
