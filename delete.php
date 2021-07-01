<?php include_once('config/init.php'); ?>

<?php
$queryResults = new QueryResults;

if (isset($_POST['checkbox'])) {

    foreach ($_POST['checkbox'] as $item) {
        $queryResults->delete($item);
    }
    redirect('index.php', 'You have sucessfully deleted products.', 'success');
} else {
    redirect('index.php', 'You have not selected any field.', 'error');
}
