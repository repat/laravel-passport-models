# laravel-passport-models
[![Latest Version on Packagist](https://img.shields.io/packagist/v/repat/laravel-passport-models.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-passport-models)
[![Total Downloads](https://img.shields.io/packagist/dt/repat/laravel-passport-models.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-passport-models)

**laravel-passport-models** contains Eloquent models for the tables `oauth_` table created by the [Laravel Passport](https://laravel.com/docs/7.x/passport) migrations.

## Installation
`$ composer require repat/laravel-passport-models`

## Documentation

#### Casting
There is a casting to `\Carbon\Carbon` objects for: `expires_at` and a casting to boolean for `revoked`, `personal_access_client` and `password_client`.

#### Relationships
There is a `->client` relationship for `client_id` and a `->access_token` relationship for `access_token_id`.

## License
* MIT, see [LICENSE](https://github.com/repat/laravel-passport-models/blob/master/LICENSE)

## Version
* Version 0.1.1

## Contact
#### repat
* Homepage: https://repat.de
* e-mail: repat@repat.de
* Twitter: [@repat123](https://twitter.com/repat123 "repat123 on twitter")

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=repat&url=https://github.com/repat/laravel-passport-models&title=laravel-passport-models&language=&tags=github&category=software)
