<?php


namespace ShoppingList\Factories;


use ShoppingList\Controllers\HomePageController;

class HomePageControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('ItemModel');
        $view = $container->get('renderer');

        return new HomePageController($model, $view);
    }
}