<?php include('./partials/header.php'); ?>
<script src="./public/js/changeType.js"></script>
<br><br>
<form action="./create.php" method="POST">
    <div class="container">
        <div class="form-group">
            <label for="formControlSelectCategory">Choose your category:</label>
            <select class="form-control" name="category" onchange="changeItem(this)">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category->category_id; ?>/<?php echo $category->name; ?>"><?php echo $category->name; ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="formControlProductSKU">Enter product <strong>SKU</strong>:</label>
            <input type="text" class="form-control sku" name="product_sku" placeholder="e.g DISC12345">
        </div>
        <div class="form-group">
            <label for="formControlProductName">Enter product <strong>name</strong>:</label>
            <input type="text" class="form-control name" name="product_name" placeholder="e. g Acme disc">
        </div>
        <div class="form-group">
            <label for="formControlProductPrice">Enter product <strong>price &euro;</strong>:</label>
            <input type="text" class="form-control price" name="product_price" placeholder="e.g 100">
        </div>
        <div class="form-group">
            <label id="type-switcher" for="formControlProduct">Enter disc <strong>size</strong>:</label>
            <input type="text" class="form-control type-switcher" name="type_value" placeholder="e.g 700 MB">
        </div>
        <input type="submit" class="btn btn-outline-primary" value="Create Product" name="create"></button>
    </div>
</form>

<?php include('./partials/footer.php'); ?>