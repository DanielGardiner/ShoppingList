<?php

namespace Tests\Controllers;

use PHPUnit\Framework\TestCase;
use ShoppingList\Controllers\HomePageController;
use ShoppingList\Models\ItemModel;
use Slim\Views\PhpRenderer;

class HomePageControllerTest extends TestCase
{
    public function testConstruct()
    {
        $model = $this->createMock(ItemModel::class);
        $view = $this->createMock(PhpRenderer::class);
        $case = new HomePageController($model, $view);
        $expected = HomePageController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
