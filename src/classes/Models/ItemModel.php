<?php


namespace ShoppingList\Models;


class ItemModel
{
    private $db;

    /**
     * ItemModel constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllItems(): array
    {
        $query = $this->db->prepare("SELECT `id`, `item` FROM `Items`");
        $query->execute();
        return $query->fetchAll();
    }

    public function addItem($item) {
        $query = $this->db->prepare("INSERT INTO `Items`(`item`) VALUES (:item);");
        $query->bindParam(':item', $item);
        return $query->execute();
    }
}