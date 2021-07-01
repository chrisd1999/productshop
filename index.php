<?php include_once('./config/init.php'); ?>

<?php

// $data = array('category_id' => 1, 'product_sku' => 'SKU_1001', 'product_name' => 'Acme disc', 'product_price' => 100.5);
// $product = new Product($data);

$template = new Template('./templates/productShop.php');
$queryResults = new QueryResults;

$template->title = 'Scandiweb Productshop';
$template->shopProducts = $queryResults->getProducts();

echo $template;
