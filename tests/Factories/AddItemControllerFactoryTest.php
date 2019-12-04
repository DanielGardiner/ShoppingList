<?php

namespace Tests\Factories;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use ShoppingList\Controllers\AddItemController;
use ShoppingList\Factories\AddItemControllerFactory;
use ShoppingList\Models\ItemModel;

class AddItemControllerFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $model = $this->createMock(ItemModel::class);
        $container = $this->createMock(ContainerInterface::class);
        $container->method('get')->willReturn($model);
        $addItemControllerFactory = new AddItemControllerFactory();
        $case = $addItemControllerFactory($container);
        $expected = AddItemController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
