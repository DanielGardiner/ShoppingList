<?php


namespace ShoppingList\Validation;


class ValidateItem
{
    static function validateItem($userItem): bool {
        if (strlen($userItem) <= 255) {
            return true;
        } else {
            return false;
        }
    }
}