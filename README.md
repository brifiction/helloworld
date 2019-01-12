# helloworld
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

type in url http://localhost:8010/helloworld.

that's it! :thumbsup:

# website
company: https://entwurfhaus.com

personal: https://brianngchongeu.com
