<?php include('./partials/header.php'); ?>
<script src="./public/js/selectAll.js"></script>
<div class="album py-5 bg-light">
    <div class="container">
        <?php displayMessage() ?>
        <form action="delete.php" method="post">
            <div class="d-flex flex-row-reverse">
                <div class="p-2">
                    <input type="button" id="select-all" class="btn btn-outline-info btn-sm" value="Select All" onclick="clickAll()"></input>
                    <input type="submit" class="btn btn-outline-danger btn-sm" value="Delete Products" name="delete""></input>
            </div>
        </div>
        <div class=" row">
                    <?php foreach ($shopProducts as $product) : ?>
                        <div class="col-md-3">
                            <div class="card mb-3 box-shadow text-center">
                                <div class="card-body">
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="checkbox">
                                            <input class="checkbox" name="checkbox[]" type="checkbox" value="<?php echo $product->product_id; ?>">Delete</input>
                                        </label>
                                    </div>
                                    <h5 class="card-title"><?php echo $product->product_name; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->product_sku; ?></h6>
                                    <h7 class="card-subtitle mb-2 text-muted"><?php echo $product->product_price; ?> &euro;</h7>
                                    <p class="card-text mb-2 text-muted"><strong><?php echo $product->type_value; ?></strong></p>
                                </div>
                            </div>
                        </div>
                        <!--- End class col-md-3 --->
                    <?php endforeach; ?>
        </form>
    </div>
</div>
</div>
<?php include('./partials/footer.php'); ?>