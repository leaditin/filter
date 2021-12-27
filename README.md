# Filter

Programmatically filter and normalize data and files.

[![Build Status][ico-build]][link-build]
[![Code Quality][ico-code-quality]][link-code-quality]
[![Code Coverage][ico-code-coverage]][link-code-coverage]
[![Latest Version][ico-version]][link-packagist]
[![PDS Skeleton][ico-pds]][link-pds]

## Installation

The preferred method of installation is via [Composer](http://getcomposer.org/). Run the following command to install the latest version of a package and add it to your project's `composer.json`:

```bash
composer require leaditin/filter
```

## Usage

**Camel Case**
```php
use \Leaditin\Filter\CamelCase;

$filter = new CamelCase();
echo $filter->filter('my-property');
```

**Humanize**
 ```php
use \Leaditin\Filter\Humanize;

$filter = new Humanize();
echo $filter->filter('my-property');
```

**Plural**
```php
use \Leaditin\Filter\Plural;

$filter = new Plural();
echo $filter->filter('property');
```

**Singular**
```php
use \Leaditin\Filter\Singular;

$filter = new Singular();
echo $filter->filter('properties');
```

**Underscore**
```php
use \Leaditin\Filter\Underscore;

$filter = new Underscore();
echo $filter->filter('my property');
```

## Credits

- [All Contributors][link-contributors]

## License

Released under MIT License - see the [License File](LICENSE) for details.


[ico-version]: https://img.shields.io/packagist/v/leaditin/filter.svg
[ico-build]: https://travis-ci.org/leaditin/filter.svg?branch=master
[ico-code-coverage]: https://img.shields.io/scrutinizer/coverage/g/leaditin/filter.svg
[ico-code-quality]: https://img.shields.io/scrutinizer/g/leaditin/filter.svg
[ico-pds]: https://img.shields.io/badge/pds-skeleton-blue.svg

[link-packagist]: https://packagist.org/packages/leaditin/filter
[link-build]: https://travis-ci.org/leaditin/filter
[link-code-coverage]: https://scrutinizer-ci.com/g/leaditin/filter/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/leaditin/filter
[link-pds]: https://github.com/php-pds/skeleton
[link-contributors]: ../../contributors
