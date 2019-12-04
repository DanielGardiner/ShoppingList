<?php


namespace ShoppingList\Controllers;


use ShoppingList\Validation\ValidateItem;
use Slim\Http\Request;
use Slim\Http\Response;

class AddItemController
{
    private $model;

    /**
     * AddItemController constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $userAddedItem = $request->getParsedBody();

        if (ValidateItem::validateItem($userAddedItem['userInput'])) {
            $this->model->addItem($userAddedItem['userInput']);
            return $response->withJson(["success" => true], 200);
        } else {
            return $response->withJson(["success" => false], 200);
        }
    }
}