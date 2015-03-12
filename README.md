# Proton Tools

[![Latest Version](https://img.shields.io/github/release/indigophp/proton-tools.svg?style=flat-square)](https://github.com/indigophp/proton-tools/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/indigophp/proton-tools.svg?style=flat-square)](https://packagist.org/packages/indigophp/proton-tools)


**Helpers to create awesome Proton applications.**


## Install

Via Composer

``` bash
$ composer require indigophp/proton-tools
```


## Usage

In order to inject application into objects, add this to the conttainer:

``` php
$container->inflector('Proton\Tools\AppAware')
	->invokeMethod('setApp', ['app']);
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Márk Sági-Kazár](https://github.com/sagikazarmark)
- [All Contributors](https://github.com/indigophp/proton-tools/contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
