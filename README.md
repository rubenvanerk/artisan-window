# A trait to create a fixed-size window in the Artisan console

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rubenvanerk/artisan-window.svg?style=flat-square)](https://packagist.org/packages/rubenvanerk/artisan-window)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rubenvanerk/artisan-window/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rubenvanerk/artisan-window/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rubenvanerk/artisan-window/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rubenvanerk/artisan-window/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rubenvanerk/artisan-window.svg?style=flat-square)](https://packagist.org/packages/rubenvanerk/artisan-window)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/artisan-window.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/artisan-window)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require rubenvanerk/artisan-window
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="artisan-window-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="artisan-window-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="artisan-window-views"
```

## Usage

```php
$artisanWindow = new RubenVanErk\ArtisanWindow();
echo $artisanWindow->echoPhrase('Hello, RubenVanErk!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ruben van Erk](https://github.com/rubenvanerk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
