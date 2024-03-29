<?php

use ShoppingList\Controllers\HomePageControllerFactory;
use ShoppingList\Factories\AddItemControllerFactory;
use ShoppingList\Factories\ItemModelFactory;
use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    // database
    $container['db'] = function (): \PDO {
        $db = new \PDO('mysql:host=127.0.0.1;dbname=ShoppingList2', 'root', 'password');

        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $db;
    };

    $container['ItemModel'] = new \ShoppingList\Factories\ItemModelFactory();

    $container['HomePageController'] = new \ShoppingList\Factories\HomePageControllerFactory();

    $container['AddItemController'] = new AddItemControllerFactory();
};
