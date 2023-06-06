# faker-czech-rep-admin-units

A Faker module for generating a hierarchy of Czech Republic administrative units: Region > County > Municipality > Cadastral territory.

## Usage

Install the package:

```bash
composer require hyneks/faker-provider-administrative-units-czech-republic
```

Then:

```php
<?php
require_once 'vendor/autoload.php';

use HynekS\AdministrativeUnitsCzechRepublic;

$faker = \Faker\Factory::create();
$faker->addProvider(new AdministrativeUnitsCzechRepublic($faker));

print_r($faker->hierarchy());

/*
* Array
*(
*    [region] => Jihomoravský kraj
*    [district] => Blansko
*    [municipality] => Crhov
*    [cadastral_territory] => Crhov u Olešnice
*)
*/
```
