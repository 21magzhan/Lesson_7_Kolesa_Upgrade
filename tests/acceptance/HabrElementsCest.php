<?php

namespace Tests\Acceptance;

use Page\Choose;
use Page\Fill;

/**
 * класс для тестинга элементов хабр
 */
class HabrElementsCest
{
    /**
     * тест на рандомное выбор элементов хэдера
     * @group test3
     */
    public function checkHabrElementsCest(\AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->click(Choose::$develop);
        $I->click(Choose::$admin);
        $I->click(Choose::$design);
        $I->click(Choose::$management);
        $I->click(Choose::$marketing);
        $I->click(Choose::$popsci);
    }
}