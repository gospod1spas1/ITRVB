<?php
class DigitalProduct extends Product
{
    public $fileSize;
    public $format;

    public function __construct($id, $name, $description, $price, $category, $stock, $rating, $fileSize, $format)
    {
        parent::__construct($id, $name, $description, $price, $category, $stock, $rating);
        $this->fileSize = $fileSize;
        $this->format = $format;
    }

    public function getDeliveryDetails()
    {
        return "Продукт доступен для загрузки в формате {$this->format} размером {$this->fileSize} MB.";
    }

    public function warrantyPeriod()
    {
        return "Гарантийный срок: Возврат средств возможен в течение 7 дней с момента покупки";
    }
}
