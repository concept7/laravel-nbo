# Integrate NieuwbouwOffice API into a Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/concept7/laravel-nbo.svg?style=flat-square)](https://packagist.org/packages/concept7/nieuwbouwoffice)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/concept7/laravel-nbo/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/concept7/nieuwbouwoffice/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/concept7/laravel-nbo/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/concept7/nieuwbouwoffice/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/concept7/laravel-nbo.svg?style=flat-square)](https://packagist.org/packages/concept7/nieuwbouwoffice)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require concept7/laravel-nbo
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-nbo-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$nieuwbouwOffice = new Concept7\NieuwbouwOffice();
echo $nieuwbouwOffice->echoPhrase('Hello, Concept7!');
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

- [Jan Henk Hazelaar](https://github.com/jhhazelaar)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
