<?php


namespace ShoppingList\Validation;


class ValidateItem
{
    static function validateItem($userItem) {
        if (strlen($userItem) <= 255) {
            return true;
        } else {
            return false;
        }
    }
}