<?php class Product_Disc extends Product
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
        if ($this->validateDisc())
            return parent::createProduct($this->getTypeValue());
        return false;
    }

    private function validateDisc()
    {
        $arr = explode(' ', $this->getTypeValue());
        $fields = array('kb', 'mb', 'gb', 'tb');
        return in_array(strtolower($arr[1]), $fields);
    }
}
