<?php 
require_once("./header.php");?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
                <hr>
                <h3 class="text-danger">Add Product Item</h3>
                <form action="." method="POST">
                <input type="hidden" name="action" value="add">
                <label for="defaultFormLoginEmailEx" class="grey-text">Name:</label>
                <select  id="defaultFormLoginPasswordEx"   name = "productkey" class="form-control">
                <?php foreach($products as $key => $product): 
                        $cost = number_format($product["cost"], 2);
                        $name = $product["name"];
                        $item = $name . '($' .$cost . ')';

                    ;?>
                    <option value="<?php print  $key;?>"><?php  print $item;?></option>
                    <?php endforeach;?>

                </select>
                <label for="defaultFormLoginEmailEx" class="grey-text mt-3">Quantity:</label>
                <select  id="defaultFormLoginPasswordEx"   name = "itemqty" class="form-control">
                    <?php  for($i = 0; $i<=10; $i++): ;?>
                    <option value="<?php print $i;?>"><?php print $i;?></option>
                <?php endfor;?>
                    </select>
                        <div class="text-center mt-4">
                        <button class="btn btn-indigo" type="submit" name="add_product">Add Product</button>
                        <a href=".?action=show_cart" class="btn btn-indigo">View Cart</a> 
                    </div>
            </form>      
        </div>
        <div class="col-md-8 mt-2">
               <?php include("cart_view.php");?>     
        </div>
    </div>
</div>

<?php require_once("./footer.php"); ?>