<?php

namespace Tests\Models;

use PHPUnit\Framework\TestCase;
use ShoppingList\Models\ItemModel;

class ItemModelTest extends TestCase
{
    public function testConstruct()
    {
        $db = $this->createMock(\PDO::class);
        $case = new ItemModel($db);
        $expected = ItemModel::class;
        $this->assertInstanceOf($expected, $case);
    }
}
