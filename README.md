# faker-czech-rep-admin-units
A Faker module for generating a hierarchy of Czech Republic administrative units: Region > County > Municipality > Cadastral territory.

## Usage

Install faker:
```
composer require fakerphp/faker
```
Then:

```php
<?php
require_once 'vendor/autoload.php';

use Hyneks\AdministrativeUnitsCzechRepublic;

$faker = \Faker\Factory::create();
$faker->addProvider(new AdministrativeUnitsCzechRepublic($faker));

print_r($faker->hierarchy());
```
