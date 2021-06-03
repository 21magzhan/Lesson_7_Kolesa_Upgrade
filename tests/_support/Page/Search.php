<?php
namespace Page;

class Search
{
    /**
     * locator of the cars link on the main page
     */
    public static $autoCarsLink = "//*[@data-alias='cars']";

    /**
     * локатор ссылки расширенного поиска
     */
    public static $optionalSearchLink = "//*[@class='btn set-optional']";

    /**
     * локатор поля с выбором типа кузова
     */
    public static $carBodyTypeField = "//*[@data-for='auto-car-body']";

    /**
     * локатор типа кузова седан
     */
    public static $carBodyType = "//*[@data-alias='%s']";

    /**
     * кнопка поиска
     */
    public static $searchButton = "//*[@type='submit']";
}
