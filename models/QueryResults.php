<?php include_once('./config/init.php'); ?>

<?php class QueryResults
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProducts()
    {
        $this->db->query("SELECT products.*, categories.name as cname
                            FROM products
                            INNER JOIN categories
                            ON products.category_id = categories.category_id");

        $results = $this->db->resultSet();
        return $results;
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM products WHERE product_id = :id");
        $this->db->bind('id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
