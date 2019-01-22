<?php  require_once("../view/header.php");?>  


<div class="container mt-5">
    <div class="row">
            <div class="col-md-4">
                    <!--defualt form-->
                    <!-- Default form contact -->
                            <form class="text-center border border-light p-5" action="." method="POST">

                            <p class="h4 mb-4">Add Product</p>

                            <!-- hidden -->
                            <input type="hidden" id="defaultContactFormName" class="form-control mb-4" name="action" value="add">
                            <!-- Name -->
                            <label>Name:</label>
                            <select class="browser-default custom-select mb-4" name="productkey">
                                <?php foreach($products as $key => $product): 
                                    $cost = number_format($product["cost"], 2);
                                    $name = $product["name"];
                                    $item = $name . $cost ;
                                    ?>

                                    <option value="<?php print $key;?>"><?php print $item;?></option>
                                <?php endforeach;?>

                            </select> 
                             <!-- Quantity -->
                             <label>Quantity:</label>
                            <select class="browser-default custom-select mb-4" name="itemqty">
                                <?php for($i = 1; $i <= 10; $i++):?>
                                <option value="<?php print $i;?>"><?php print $i;?></option>
<?php endfor;?>
                                
                            </select>
                            <!-- Send button -->
                            <button type="submit"  class="btn btn-info btn-block form-control mr-5" id="defaultContactFormName" value="add product">add product</button>
                            <a href=".?action=show_cart" class="btn btn-danger btn-block mt-2">View Cart</a>
                    </form>
<!-- Default form contact -->
        </div>
        <div class="col-md-8">
                      <?php include("../view/cart_view.php");?>              
        </div>
    </div>
</div>


<?php require_once("../view/footer.php");