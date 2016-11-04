# geocode

[![Build Status](https://travis-ci.org/SapioBeasley/geocode.svg)](https://travis-ci.org/SapioBeasley/geocode)
[![Latest Stable Version](https://poser.pugx.org/sapioweb/geocode/v/stable)](https://packagist.org/packages/sapioweb/geocode)
[![Total Downloads](https://poser.pugx.org/sapioweb/geocode/downloads)](https://packagist.org/packages/sapioweb/geocode)
[![Latest Unstable Version](https://poser.pugx.org/sapioweb/geocode/v/unstable)](https://packagist.org/packages/sapioweb/geocode)
[![License](https://poser.pugx.org/sapioweb/geocode/license)](https://packagist.org/packages/sapioweb/geocode)

PHP Address Geocoding for laravel using Google API

## Install

`composer require nkootstra/geocode`

Include `Nkootstra\Geocode\GeocodeServiceProvider::class,` in your `config/app.php`

## Usage

```php
use Nkootstra\Geocode\GeoCode as Geocode;

Route::get('/', function () {

	$address = '1600 Wigwam Pkwy, Henderson, NV 89074';

	$geocode = Geocode::getInformation($address);

	return view('welcome')->with(['geocode' => $geocode]);
});
```

Pull Latitude: `$geocode['lat']`
Pull Longitude: `$geocode['lng']`
