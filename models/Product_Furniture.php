<?php class Product_Furniture extends Product
{
    private $type_value;

    public function __construct($data, $type_value)
    {
        parent::__construct($data);
        $this->setTypeValue($type_value);
    }

    public function setTypeValue($type_value)
    {
        $this->type_value = $type_value;
    }

    public function getTypeValue()
    {
        return $this->type_value;
    }

    public function create()
    {
        if ($this->validateFurniture())
            return parent::createProduct($this->getTypeValue());
        return false;
    }

    private function validateFurniture()
    {
        $reg = '/(\d+?)x(\d+?)x(\d+)\s*(?:mm?|cm|dm|m?)\b/';
        $value = strtolower($this->getTypeValue());

        return preg_match($reg, $value);
    }
}
