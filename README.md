KtwFvd - Font Variant Description for PHP
=========================================

Fvd (Font Variant Description) is "a way to unambiguously, compactly
and clearly describe a set of @font-face properties."  KtwFvd is a
PHP port of the [Typekit Fvd](https://github.com/typekit/fvd) library.

[![Build Status](https://travis-ci.org/kevintweber/KtwFvd.png?branch=master)](https://travis-ci.org/kevintweber/KtwFvd)

## Documentation

This little library offers three static functions for your enjoyment:

#### `Fvd::Compact()`

Given a font description (in CSS), `Compact` will return the FVD code:

`Fvd::Compact('font-style:italic;font-weight:bold;')` will return `i7`.

#### `Fvd::Expand()`

Given a FVD code, `Expand` will return the CSS code:

`Fvd::Expand('n5')` will return `font-style:normal;font-weight:500;`.

#### `Fvd::Parse()`

Given a FVD code, `Parse` will return an array of CSS code:

`Fvd::Parse('o4')` will return `array('font-style' => 'oblique', 'font-weight' => 400)`.

## Authors

Kevin Weber - kevintweber@gmail.com

## License

KtwFvd is licensed under the MIT license.  See `LICENSE` for
more details.
