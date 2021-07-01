
<?php abstract class Product
{
    private $db;
    private $category_id;
    private $product_sku;
    private $product_name;
    private $product_price;

    public function __construct($data = array())
    {
        $this->db = new Database;
        $this->setCategoryId($data['category_id']);
        $this->setProductSKU($data['product_sku']);
        $this->setProductName($data['product_name']);
        $this->setProductPrice($data['product_price']);
    }

    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    public function setProductSKU($product_sku)
    {
        $this->product_sku = $product_sku;
    }

    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    public function setProductPrice($product_price)
    {
        $this->product_price = $product_price;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function getProductSKU()
    {
        return $this->product_sku;
    }

    public function getProductName()
    {
        return $this->product_name;
    }

    public function getProductPrice()
    {
        return $this->product_price;
    }

    public function createProduct($type_value)
    {
        $this->db->query('INSERT INTO products (category_id, product_sku, product_name, product_price, type_value) 
                          VALUES (:category_id, :product_sku, :product_name, :product_price, :type_value);');

        $this->db->bind(':category_id', $this->getCategoryId());
        $this->db->bind(':product_sku', $this->getProductSKU());
        $this->db->bind(':product_name', $this->getProductName());
        $this->db->bind(':product_price', $this->getProductPrice());
        $this->db->bind(':type_value', $type_value);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    abstract function create();
}
