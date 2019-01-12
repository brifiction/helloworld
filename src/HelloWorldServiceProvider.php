<?php
namespace brifiction\helloworld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // brifiction\helloworld\src\HelloWorldServiceProvider.php
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // brifiction\helloworld\src\HelloWorldServiceProvider.php
        $this->loadViewsFrom(__DIR__.'/resources/views', 'helloworld');
    }

    public function register()
    {

    }
}
