<?php include("../view/header.php"); ?>

    <div class="container mt-5">
<div class="row">
    <div class="col-md-4">
            <div class="list-group">
            <?php foreach($categories as $category) :?>
            <a href="?category_id=<?php  print $category[0];?>" class="list-group-item waves-light"><?php print $category[1];?></a>
        <?php endforeach;?>
        </div>    
    </div>
    <div class="col-md-8">
        <!--Table-->
        <h3 class="text-success"> <?php  print $category_name ;?></h3>
        <table class="table">
        <thead class="mdb-color darken-3">
        <tr class="text-white">
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
                <?php foreach($products as $product): ?>
                <tr>
                    <td><?php print $product["productCode"]; ?></td>
                    <td><?php print $product["productName"]; ?></td>
                    <td><?php print $product["listPrice"]; ?></td>
                    <td><form action="." method="POST">
                    <input type="hidden" name = "action" value="delete_product">
                    <input type="hidden" name="product_id" value="<?php echo $product["productID"]; ?>">
                    <input type="hidden" name="category_id" value="<?php  echo $product["categoryID"]; ?>">
                    <input type="submit" class="btn btn-secondary btn-sm" value="Delete">
                    </form></td>
                </tr>
        <?php endforeach; ?>

        </tbody>
        </table>
        <a href="?action=show_add_form"class="btn btn-success btn-sm">Add Product</a>
    </div>
</div>
</div>



<?php include("../view/footer.php"); ?>