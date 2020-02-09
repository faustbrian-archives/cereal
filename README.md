# Cereal

[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kodekeep/cereal/run-tests?label=tests)](https://github.com/kodekeep/cereal/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Code Coverage](https://badgen.now.sh/codecov/c/github/kodekeep/cereal)](https://codecov.io/gh/kodekeep/cereal)
[![Minimum PHP Version](https://badgen.net/packagist/php/kodekeep/cereal)](https://packagist.org/packages/kodekeep/cereal)
[![Latest Version](https://badgen.net/packagist/v/kodekeep/cereal)](https://packagist.org/packages/kodekeep/cereal)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/cereal)](https://packagist.org/packages/kodekeep/cereal)
[![License](https://badgen.net/packagist/license/kodekeep/cereal)](https://packagist.org/packages/kodekeep/cereal)

> Serialisers/Deserialisers for various data formats.

## Installation

```bash
composer require kodekeep/cereal
```

## Usage

### Serialise an input

``` php
(new Arr())->serialise($input);
(new Csv())->serialise($input);
(new Ini())->serialise($input);
(new Json())->serialise($input);
(new Value())->serialise($input);
(new Xml())->serialise($input);
(new Yaml())->serialise($input);
(new YamlInline())->serialise($input);
```

### Unserialise an input

``` php
(new Arr())->unserialise($contents, $class);
(new Csv())->unserialise($contents, $class);
(new Ini())->unserialise($contents, $class);
(new Json())->unserialise($contents, $class);
(new Value())->unserialise($contents, $class);
(new Xml())->unserialise($contents, $class);
(new Yaml())->unserialise($contents, $class);
```

### Read a file and unserialise its contents

``` php
(new Arr())->read($path, $class);
(new Csv())->read($path, $class);
(new Ini())->read($path, $class);
(new Json())->read($path, $class);
(new Value())->read($path, $class);
(new Xml())->read($path, $class);
(new Yaml())->read($path, $class);
```

### Serialise an input and write it into a file

``` php
(new Arr())->write($path, $input);
(new Csv())->write($path, $input);
(new Ini())->write($path, $input);
(new Json())->write($path, $input);
(new Value())->write($path, $input);
(new Xml())->write($path, $input);
(new Yaml())->write($path, $input);
(new YamlInline())->write($path, $input);
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 (MPL-2.0). Please see [License File](LICENSE.md) for more information.
