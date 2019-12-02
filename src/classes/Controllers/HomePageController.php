<?php


namespace ShoppingList\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class HomePageController
{
    private $model;
    private $view;

    /**
     * HomePageController constructor.
     * @param $model
     * @param $view
     */
    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $allItems = $this->model->getAllItems();
        $this->view->render($response, 'index.phtml', ['items' => $allItems]);
//        return $response->withJson($allItems);
    }
}