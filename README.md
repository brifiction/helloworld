# helloworld
this is a hello world package. nothing special, mainly a packagist testing repository.

# installation
open terminal, run `composer require brifiction/helloworld`.

in your laravel application, open & edit `config/app.php`

import the hello world service provider like below and save.

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
