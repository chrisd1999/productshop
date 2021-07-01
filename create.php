<?php
include_once('./config/init.php');
include_once('./helpers/validatePrice.php')
?>

<?php
if (isset($_POST['create'])) {
    $data = array();
    $error = false;

    $entries = array('product_sku', 'product_name', 'product_price');

    $category = explode("/", $_POST['category']);
    $category_id = $category[0];
    $category_name = $category[1];

    $data['category_id'] = $category_id;

    foreach ($entries as $field) {
        if (empty($_POST[$field])) {
            $error = true;
        } else {
            $data[$field] = $_POST[$field];
        }
    }

    if ($error or validatePrice($data['product_price'])) {
        redirect('index.php', 'Something went wrong adding item', 'error');
    }

    /* Better solution than blindly allowing user to 
       instantiate arbitary and possibly vulnerable classes.

        $product_type = 'Product_' . $category_name;
        if (is_subclass_of($product_type, 'Product')) {
            $product = new $product_type($data, $_POST['type_value']);
        } else {
            redirect('index.php', 'Something went wrong adding item', 'error');
        }
    */

    $product_type = 'Product_' . $category_name;
    $product = new $product_type($data, $_POST['type_value']);

    if ($product->create()) {
        redirect('index.php', 'Your product sucessfully added', 'success');
    } else {
        redirect('index.php', 'Something went wrong adding item', 'error');
    }
}

$template = new Template('templates/createProduct.php');
$category = new Category;

$template->title = 'Create Product';
$template->categories = $category->getCategories();

echo $template;
