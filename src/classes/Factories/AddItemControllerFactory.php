<?php


namespace ShoppingList\Factories;

use ShoppingList\Controllers\AddItemController;

class AddItemControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('ItemModel');

        return new AddItemController($model);
    }

}