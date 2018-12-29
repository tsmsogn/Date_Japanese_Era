# Date_Japanese_Era

[![Build Status](https://travis-ci.org/tsmsogn/Date_Japanese_Era.svg?branch=master)](https://travis-ci.org/tsmsogn/Date_Japanese_Era)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tsmsogn/Date_Japanese_Era/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tsmsogn/Date_Japanese_Era/?branch=master)
[![codecov](https://codecov.io/gh/tsmsogn/Date_Japanese_Era/branch/master/graph/badge.svg)](https://codecov.io/gh/tsmsogn/Date_Japanese_Era)

## Installation

```shell
composer install tsmsogn/date_japanese_era
```

## Usage

```php
<?php
$era = new \Date_Japanese_Era\Date_Japanese_Era(array(2009, 7, 11));
echo $era->name; // 平成
echo $era->gengou; // name のエイリアス
echo $era->year;   // 21
echo $era->nameAscii; // heisei
```

```php
<?php
$era = new \Date_Japanese_Era\Date_Japanese_Era(array('平成', 21));
echo $era->gregorianYear; // 2009
```
