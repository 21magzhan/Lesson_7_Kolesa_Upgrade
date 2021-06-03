<?php
namespace Page;
/**
 * choose random header elements
 */
class Choose
{
    /**
     * header element - Разработка
     */
    public static $develop = "//li[@class='nav-links__item'][1]/following-sibling::li[1]";

    /**
     * header element - Администрирование
     */
    public static $admin = "//li[@class='nav-links__item'][2]/following-sibling::li[1]";

    /**
     * header element - Дизайн
     */
    public static $design = "//li[@class='nav-links__item'][3]/following-sibling::li[1]";

    /**
     * header element - Дизайн
     */
    public static $management = "//li[@class='nav-links__item'][4]/following-sibling::li[1]";

    /**
     * header element - Дизайн
     */
    public static $marketing = "//li[@class='nav-links__item'][5]/following-sibling::li[1]";

    /**
     * header element - Дизайн
     */
    public static $popsci = "//li[@class='nav-links__item'][6]/following-sibling::li[1]";

}
