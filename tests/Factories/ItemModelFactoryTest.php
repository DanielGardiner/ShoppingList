<?php

namespace Tests\Factories;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use ShoppingList\Factories\ItemModelFactory;
use Slim\Exception\ContainerException;

class ItemModelFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $db = $this->createMock(\PDO::class);
        $container = $this->createMock(ContainerInterface::class);
        $container->method('get')->willReturn($db);
        $case = new ItemModelFactory($container);
        $expected = ItemModelFactory::class;
        $this->assertInstanceOf($expected, $case);
    }
}
