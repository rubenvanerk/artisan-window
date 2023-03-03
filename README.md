# A trait to create a fixed-size window in the Artisan console

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rubenvanerk/artisan-window.svg?style=flat-square)](https://packagist.org/packages/rubenvanerk/artisan-window)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rubenvanerk/artisan-window/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rubenvanerk/artisan-window/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rubenvanerk/artisan-window/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rubenvanerk/artisan-window/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rubenvanerk/artisan-window.svg?style=flat-square)](https://packagist.org/packages/rubenvanerk/artisan-window)

A simple trait to create a fixed-size Artisan console window.

## Installation

You can just copy the trait to your own project or install the package via composer:

```bash
composer require rubenvanerk/artisan-window
```

## Usage

In your console command, add the `HasWindows` trait.
Next, you can call the `window` function. It takes three arguments:

- The title of the window
- The max number of lines
- A function

In the function you can output anything you'd like. If the output doesn't fit, it will scroll out of the window.

```php
class Example extends Command
{
    use \RubenVanErk\ArtisanWindow\Traits\HasWindows;
    
    public function handle()
    {
        $this->window('Never Gonna Give You Up', 5, function () {
            // ...
            $this->info('Never gonna give you up');
            $this->info('Never gonna let you down');
            $this->info('Never gonna run around and desert you');
            $this->info('Never gonna make you cry');
            $this->info('Never gonna say goodbye');
            $this->info('Never gonna tell a lie and hurt you');
            // ...
        })    
    }    
}

This wil produce something like this:

[![asciicast](https://asciinema.org/a/pgiWJS9TgVju339xnDfxOycM5.svg)](https://asciinema.org/a/pgiWJS9TgVju339xnDfxOycM5)

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
