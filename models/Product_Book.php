<?php class Product_Book extends Product
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
        if ($this->validateBook())
            return parent::createProduct($this->getTypeValue());
        return false;
    }

    private function validateBook()
    {
        $arr = explode(' ', $this->getTypeValue());
        var_dump($arr);
        $fields = array('mg', 'g', 'kg', 't');
        return in_array(strtolower($arr[1]), $fields);
    }
}
