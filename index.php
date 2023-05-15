<?php
require __DIR__ . '/vendor/autoload.php';

use Hyneks\AdministrativeUnitsCzechRepublic;

$faker = \Faker\Factory::create();
$faker->addProvider(new AdministrativeUnitsCzechRepublic($faker));

print_r($faker->hierarchy());