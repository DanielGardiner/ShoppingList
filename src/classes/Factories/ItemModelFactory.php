<?php


namespace ShoppingList\Factories;


use ShoppingList\Models\ItemModel;

class ItemModelFactory
{
    public function __invoke($container)
    {
        $db = $container['db'];
        return new ItemModel($db);
    }
}