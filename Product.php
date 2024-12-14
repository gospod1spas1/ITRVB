<?php
class Product
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $category;
    public $stock;
    public $rating;

    public function __construct($id, $name, $description, $price, $category, $stock, $rating)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->stock = $stock;
        $this->rating = $rating;
    }

    public function updateStock($quantity)
    {
        $this->stock = $quantity;
    }

    public function applyDiscount($percentage)
    {
        $this->price -= $this->price * ($percentage / 100);
    }

    public function getDeliveryDetails()
    {
        return "Этот продукт будет доставлен в стандартной упаковке";
    }

    public function warrantyPeriod()
    {
        return "Гарантийный срок: Вы можете вернуть товар в течение 30 дней для безвозмездного устранения неполадок";
    }
}
