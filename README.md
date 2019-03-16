# Laravel5-voipms



## Installation

Begin by installing this package through Composer. Run this command from the Terminal:

```bash
    composer require csmillie/laravel5-voipms
```

## Laravel integration

To wire this up in your Laravel project, you need to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

```php
 'Voipms\Laravel5VoipmsServiceProvider',
```

Then, add a Facade for more convenient usage. In `app/config/app.php` add the following line to the `aliases` array:

```php
'Voipms'    => 'Voipms\Facades\Voipms',
```


To add new connections just publish your config file using command and go to your config folder.

```php
php artisan vendor:publish
```

## Dont't forget to import facades to controllers. ##

Sending a SMS Message

```php
<?php

Use Voipms;

Voipms::sms('+18085551212', 'Message text');
```

Creating a Call

```php
<?php

Use Voipms;
Voipms::call('+18085551212', 'http://foo.com/call.xml');
```
