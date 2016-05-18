# Laravel Respond

This package is provided to be used on laravel framework v5 and upper and it gives clean methods to handle json response with specific predetermined messages.

*The package is in process.

## Install

Via Composer

``` bash
$ composer require Anetwork/Respond
```

##Config

Add the following provider to providers part of config/app.php
``` php
Anetwork\Respond\RespondServiceProvider::class
```

and the following Facade to the aliases part 
``` php
'Respond' => Anetwork\Respond\Facades\Respond::class
```

## Usage

You can use these methods in deffernt ways:

There are hot ones for quick usage, besides some provided to manage outputs on your own way

Some are shown below

``` php
Respond::succeed( $data );
```

``` php
Respond::deleteFaild();
```

``` php
Respond::notFound( 'Leave it empty or enter your custom message here' );
```

``` php
Respond::setStatusCode( 200 )->setStatusText( 'succeed' )->respondWithMessage( 'Your custom message' );
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.