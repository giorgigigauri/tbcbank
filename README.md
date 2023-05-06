
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# sdasd

[![Latest Version on Packagist](https://img.shields.io/packagist/v/giorgigigauri/tbcbank.svg?style=flat-square)](https://packagist.org/packages/giorgigigauri/tbcbank)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/giorgigigauri/tbcbank/run-tests?label=tests)](https://github.com/giorgigigauri/tbcbank/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/giorgigigauri/tbcbank/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/giorgigigauri/tbcbank/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/giorgigigauri/tbcbank.svg?style=flat-square)](https://packagist.org/packages/giorgigigauri/tbcbank)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/tbcbank.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/tbcbank)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require giorgigigauri/tbcbank
```

## Enviromental variables .env

```php
TBC_API_URL=
TBC_API_KEY=
TBC_CLIENT_ID=
TBC_CLIENT_SECRET=
TBC_CALLBACK_URL=
```

You should publish the config with:

```bash
php artisan vendor:publish --tag="tbcbank-config"
php artisan optimize:clear
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="tbcbank-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="tbcbank-views"
```

## Usage

```php
import Giorgigigauri\Facades\Tbcbank;
    $amount = [
        'currency' => 'GEL',
        'total' => 546,
        'subTotal' => 400,
        'tax' => 0,
        'shipping' => 0,
    ];
    $payment = TbcBank::setAmount($amount)
        ->setReturnUrl('shopping.ge/callback')
        ->setExtra('Test Text')
        ->createPayment();
    dd($payment);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/giorgigigauri/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Giorgi Gigauri](https://github.com/giorgigigauri)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
