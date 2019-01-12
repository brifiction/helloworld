<?php

namespace brifiction\helloworld\Http\Controllers;

use App\Http\Controllers\Controller;
use brifiction\helloworld\Models\HelloWorld;

class HelloWorldController extends Controller {

    public function index()
    {

        $helloworld = new HelloWorld();
        $msg = $helloworld->message;

        return view('helloworld::index', compact('msg'));
    }

}
