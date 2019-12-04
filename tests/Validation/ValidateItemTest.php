<?php

namespace Tests\Validation;

use PHPUnit\Framework\TestCase;
use ShoppingList\Validation\ValidateItem;

class ValidateItemTest extends TestCase
{
    public function testValidateItem_Success()
    {
        $userItem = 'short string';
        $case = ValidateItem::validateItem($userItem);
        $expected = true;
        $this->assertEquals($case, $expected);
    }

    public function testValidateItem_Fail()
    {
        $userItem = 'long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string, long string';
        $case = ValidateItem::validateItem($userItem);
        $expected = false;
        $this->assertEquals($case, $expected);
    }
}
