<?php

namespace Tests\Acceptance;

use Faker\Factory;
use Helper\CustomFakerProvider;
use Page\Fill;

/**
 * класс для тестинга формы
 */
class FillFieldsCest
{
    /**
     * тест на заполнение полей формы фейкером
     * @group test2
     */
    public function checkFillField(\AcceptanceTester $I)
    {
        $faker = Factory::create('kk_KZ');
        $faker->addProvider(new CustomFakerProvider($faker));

        $name = $faker -> firstName;
        $lastName = $faker -> lastName;
        $email = $faker -> email;
        $phoneNumber = $I->getfaker()->getPhoneKz();
        var_dump($phoneNumber);
        $address = $faker -> address;
        $city = $faker -> city;
        $state = $faker -> region;
        $postal = $faker -> postcode;
        $creditFirstName = $faker -> firstName;
        $creditLastName = $faker -> lastName;
        $CreditCardNumber = $I->getfaker()->getCreditCardNumber();
        var_dump($CreditCardNumber);
        $CCVnumber = $I->getfaker()->getCCV();
        var_dump($CCVnumber);



        $I->amOnPage('');
        $I->fillField(Fill::$firstName, $name);
        $I->fillField(Fill::$lastName, $lastName);
        $I->fillField(Fill::$email, $email);
        $I->fillField(Fill::$phoneNumber, $phoneNumber);
        $I->fillField(Fill::$address, $address);
        $I->fillField(Fill::$city, $city);
        $I->fillField(Fill::$state, $state);
        $I->fillField(Fill::$postal, $postal);
        $I->click(Fill::$paymentTypeButton);
        $I->fillField(Fill::$creditFirstName,  $creditFirstName);
        $I->fillField(Fill::$creditLastName, $creditLastName);
        $I->fillField(Fill::$CreditCardNumber, $CreditCardNumber);
        $I->fillField(Fill::$CCVnumber, $CCVnumber);
        $I->waitForElementClickable('//*[@id="input_32_cc_exp_month"]');
        $I->waitForElementClickable(Fill::$month);
        $I->click(Fill::$selectMonth);
        $I->waitForElementClickable(Fill::$expYear);
        $I->click(Fill::$expYear);
        $I->fillField(Fill::$billingAddress, $address);
        $I->fillField(Fill::$billingCity, $city);
        $I->fillField(Fill::$billingState, $state);
        $I->fillField(Fill::$billingPostal, $postal);
        $I->waitForElementClickable(Fill::$country);
        $I->click(Fill::$selectCountry);
        $I->wait(20);
        $I->click(Fill::$registerButton);
        $I->waitForText('Good job');
    }
}