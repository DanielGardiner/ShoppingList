<?php


namespace ShoppingList\Factories;


use ShoppingList\Controllers\HomePageController;

class HomePageControllerFactory
{
    public function __invoke($container)
    {
        $model = $container['ItemModel'];
        $view = $container['renderer'];

        return new HomePageController($model, $view);
    }
}