<?php

namespace Tests\Factories;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use ShoppingList\Factories\ItemModelFactory;
use ShoppingList\Models\ItemModel;
use Slim\Exception\ContainerException;

class ItemModelFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $db = $this->createMock(\PDO::class);
        $container = $this->createMock(ContainerInterface::class);
        $container->method('get')->willReturn($db);
        $itemModelFactory = new ItemModelFactory();
        $case = $itemModelFactory($container);
        $expected = ItemModel::class;
        $this->assertInstanceOf($expected, $case);
    }
}
