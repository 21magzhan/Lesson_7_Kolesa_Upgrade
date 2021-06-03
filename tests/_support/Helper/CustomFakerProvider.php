<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base
{
    protected $phoneCodes = [
        '700',
        '701',
        '702',
        '705',
        '707'
    ];
    /**
     * random phone number prefixes (700, 701 and etc)
     */
    public function getPhoneKz()
    {
        return sprintf
        (
            '+7(%d)-%d-%d-%d',
            $this->phoneCodes[array_rand($this->phoneCodes)],
            random_int(100, 999),
            random_int(10,99),
            random_int(10, 99)
        );
    }



    protected $CreditCardNumber = [
        '5159',
        '4648'
    ];
    /**
     * random credit card prefixes
     */
    public function getCreditCardNumber()
    {
        return sprintf
        (
            '%d-%d-%d-%d',
            $this->CreditCardNumber[array_rand($this->CreditCardNumber)],
            random_int(1000, 9999),
            random_int(1000, 9999),
            random_int(1000, 9999)
        );
    }



    protected $CCVnumber = [
        '1',
        '2',
        '3'
    ];
    /**
     * random credit card CCV's
     */
    public function getCCV()
    {
        return sprintf
        (
            '%d-%d-%d',
            $this->CCVnumber[array_rand($this->CCVnumber)],
            random_int(1, 9),
            random_int(1, 9),
            random_int(1, 9)
        );
    }

}
