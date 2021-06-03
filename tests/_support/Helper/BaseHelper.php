<?php
namespace Helper;

use Faker\Factory;

class BaseHelper extends \Codeception\Module
{
    public function getfaker($locale = 'kk_KZ')
    {
        $faker = Factory::create($locale);
        $faker->addProvider(new CustomFakerProvider($faker));

        return $faker;
    }
    public function getCreditCardNumber($locale)
    {
        $faker = Factory::create($locale);
        $faker->addProvider(new CustomFakerProvider($faker));

        return $faker;
    }
    public function getCCV($locale)
    {
        $faker = Factory::create($locale);
        $faker->addProvider(new CustomFakerProvider($faker));

        return $faker;
    }
}
