# Laravel Respond

This package is provided to be used on laravel framework v5 and upper and it gives clean methods to handle json response with specific predetermined messages.

**The package is in process.**

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

**Some are shown below:**


When request succeeds and contains data to return as a result:
``` php
Respond::succeed( $data );
```

When deletion action succeeds:
``` php
Respond::deleteSucceeded();
```

When updating succeeds:
``` php
Respond::updateSucceeded();
```

When insertion succeeds:
``` php
Respond::insertSucceeded();
```

When deletion action fails:
``` php
Respond::deleteFaild();
```

When updating fails:
``` php
Respond::updateFaild();
```

when insertion fails:
``` php
Respond::insertFaild();
```

Not Found Error:
``` php
Respond::notFound();
```

When db connetion is refused:
``` php
Respond::connectionRefused();
```

When parameters entered are wrong:
``` php
Respond::wrongParameters();
```

When requested method is not allowed:
``` php
Respond::methodNotAllowed();
```

``` php
Respond::requestFieldNotFound();
```

Validation errors:
``` php
Respond::validationErrors( $data );
```
**Note:** If you use laravel FormRequest,to prevnet iteration, we recommond try this method in App\Http\Request.php and override response method of Illuminate FormRequest

###customization
Set custom message for methods is like this:
``` php
Respond::notFound( 'Leave it empty or enter your custom message here' );
```

And you can do more:
``` php
Respond::setStatusCode( 200 )->setStatusText( 'succeed' )->respondWithMessage( 'Your custom message' );
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.