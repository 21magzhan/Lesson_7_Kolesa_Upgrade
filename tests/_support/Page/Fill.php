<?php
namespace Page;
/**
 * pageObject для страницы заполнения (формы)
 */
class Fill
{
    /**
     * locator of the firstName
     */
    public static $firstName = "//*[@id='firstName']";
    /**
     * locator of the lastName
     */
    public static $lastName = "//*[@id='lastName']";
    /**
     * email locator
     */
    public static $email = "//*[@type='email']";
    /**
     * phoneNumber locator
     */
    public static $phoneNumber = "//*[@id='phoneNumber']";
    /**
     * address locator
     */
    public static $address = "//*[@id='address']";
    /**
     * city locator
     */
    public static $city ="//*[@id='city']";
    /**
     * state locator
     */
    public static $state = "//*[@id='state']";
    /**
     * postal code or zip locator
     */
    public static $postal = "//*[@id='postal']";

    /**
     * credit card locator button
     */
    public static $paymentTypeButton = "//*[@value='credit']";

    /**
     * credit card firstName locator
     */
    public static $creditFirstName = "//*[@data-component='cc_firstName']";

    /**
     * credit card lastName locator
     */
    public static $creditLastName = "//*[@data-component='cc_lastName']";

    /**
     * credit card number
     */
    public static $CreditCardNumber = "//*[@data-component='cc_number']";

    /**
     * ccv locator
     */
    public static $CCVnumber = "//*[@id='input_32_cc_ccv']";

    /**
     * month selector
     */
    public static $month = "//*[@id='input_32_cc_exp_month']";

    /**
     * select month
     */
    public static $selectMonth = "//*[@value='March']";

    /**
     * select expiration year
     */
    public static $expYear = "//*[@value='2024']";

    /**
     * billing address
     */
    public static $billingAddress = "//*[@id='input_32_addr_line1']";

    /**
     * billing adress city
     */
    public static $billingCity = "//*[@id='input_32_city']";

    /**
     * billing adress state
     */
    public static $billingState = "//*[@id='input_32_state']";

    /**
     * billing adress postal
     */
    public static $billingPostal = "//*[@id='input_32_postal']";

    /**
     * select Country
     */
    public static $country = "//*[@id='input_32_country']";
    public static $selectCountry = "//*[@value='Kazakhstan']";

    /**
     * register button selector
     */
    public static $registerButton = "//button[@type='submit']";
}
