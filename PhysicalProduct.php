<?php
class PhysicalProduct extends Product
{
    public $weight;
    public $height;

    public function __construct($id, $name, $description, $price, $category, $stock, $rating, $weight, $height)
    {
        parent::__construct($id, $name, $description, $price, $category, $stock, $rating);
        $this->weight = $weight;
        $this->height = $height;
    }

    public function getDeliveryDetails()
    {
        return "Вес продукта в упаковке {$this->weight} кг. и его высота {$this->height}";
    }

    public function warrantyPeriod()
    {
        return "Гарантийный срок: Гарантийный срок: Вы можете вернуть товар в течение 6 месяцев при наличии оригинальной упаковки и чека для безвозмездного устранения неполадок";
    }
}
