<?php

namespace Tests\Factories;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use ShoppingList\Controllers\HomePageController;
use ShoppingList\Factories\HomePageControllerFactory;
use ShoppingList\Models\ItemModel;
use Slim\Views\PhpRenderer;

class HomePageControllerFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $model = $this->createMock(ItemModel::class);
        $view = $this->createMock(PhpRenderer::class);
        $container = $this->createMock(ContainerInterface::class);
        $container->method('get')->willReturn($model);
        $container->method('get')->willReturn($view);
        $homePageControllerFactory = new HomePageControllerFactory();
        $case = $homePageControllerFactory($container);
        $expected = HomePageController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
