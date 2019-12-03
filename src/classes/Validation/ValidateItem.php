<?php


namespace ShoppingList\Validation;


class ValidateItem
{
    static function validateItem($userItem) {
        if (strlen($userItem) <= 256) {
            return true;
        } else {
            return false;
        }
    }
}