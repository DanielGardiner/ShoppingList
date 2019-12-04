<?php

namespace Tests\Controllers;

use PHPUnit\Framework\TestCase;
use ShoppingList\Controllers\AddItemController;
use ShoppingList\Models\ItemModel;

class AddItemControllerTest extends TestCase
{
    public function testConstruct()
    {
        $model = $this->createMock(ItemModel::class);
        $case = new AddItemController($model);
        $expected = AddItemController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
