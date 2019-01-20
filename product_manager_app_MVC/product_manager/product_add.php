<?php  include("../view/header.php");?>


<div class="container mt-5 mr-5">
        <div class="row">
                <div class="col-md-8">
                    
<!--Default form-->
<form action="index.php" method="POST">
<input type="hidden" name="action" value="add_product">
    <p class="h4 text-center mb-4">Add Product</p>

    <!--Default input-->
    <label for="defaultFormLoginEmailEx" class="grey-text">Your Category</label>
    <select  id="defaultFormLoginPasswordEx"   name = "category_id" class="form-control">
    <?php foreach($categories as  $category): ?>
    <option value="<?php print $category[0]; ?>"><?php print $category[1]; ?></option>
<?php endforeach; ?>
    </select>
    <br>
    <!-- Default input code -->
    <label for="defaultFormLoginPasswordEx" class="grey-text">Code</label>
    <input type="text" id="defaultFormLoginPasswordEx"  name ="code" class="form-control">
    <br>
    <label for="defaultFormLoginPasswordEx" class="grey-text">Name</label>
    <input type="text" id="defaultFormLoginPasswordEx"  name= "name" class="form-control">
    <br>
    <label for="defaultFormLoginPasswordEx" class="grey-text">Price</label>
    <input type="text" id="defaultFormLoginPasswordEx"  name="price" class="form-control">

    <div class="text-center mt-4">
        <button class="btn btn-indigo" type="submit" name="add_product">Add Product</button>
    </div>
</form>
        <a href="index.php?action=list_products">View Product List</a>
<!--Default form--> 
        </div>
    </div> 
</div>
<?php include("../view/footer.php");?>
