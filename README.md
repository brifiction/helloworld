# helloworld
[![Latest Version](https://img.shields.io/github/release/brifiction/helloworld.svg?style=flat-square)](https://github.com/brifiction/helloworld/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/brifiction/helloworld.svg?style=flat-square)](https://packagist.org/packages/brifiction/helloworld)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/dc7a806be57540cbae66c17730c8330d)](https://www.codacy.com/app/brifiction/helloworld?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=brifiction/helloworld&amp;utm_campaign=Badge_Grade)

this is a hello world package. nothing special, mainly a packagist testing repository.

# installation
open terminal, run `composer require brifiction/helloworld`.

in your laravel application, open & edit `config/app.php`

optional: import the hello world service provider like below and save.

````
    'providers' => [
        ...
        brifiction\helloworld\HelloWorldServiceProvider::class,
        ...
    ],
````

then, run `php artisan serve --port 8010`.

type in url [http://localhost:8010/helloworld](http://localhost:8010/helloworld).

that's it! :thumbsup:

# website
company: [https://entwurfhaus.com](https://entwurfhaus.com)

personal: [https://brianngchongeu.com](https://brianngchongeu.com)

# donate
buy me a :coffee: | :beer: , they help me go fast!

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.me/entwurfhaus)
