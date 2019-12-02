<?php

namespace Tests\Factories;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use ShoppingList\Factories\HomePageControllerFactory;

class HomePageControllerFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $db = $this->createMock(\PDO::class);
        $container = $this->createMock(ContainerInterface::class);
        $container->method('get')->willReturn($db);
        $case = new HomePageControllerFactory($container);
        $expected = HomePageControllerFactory::class;
        $this->assertInstanceOf($expected, $case);
    }
}
