<?php require_once("../view/h.php");?>

<div class="container mt-5">
            <div class="row">
                    <div class="col-md-4">
                    <form class="text-center border border-light p-5" action="." method="POST">
                        <p class="h4 mb-4">Add Product</p>
                        <!-- hidden -->
                        <input type="hidden" id="defaultContactFormName" class="form-control mb-4" name="action" value="add_product">
                        <!-- Name -->
                        <label>Category Name:</label>
                        <select class="browser-default custom-select mb-4" name="category_id">
                            <?php foreach($categories as $key => $category):?>

                                <option value="<?php print $category->getID();?>"><?php print $category->getName();?></option>
                            <?php endforeach;?>

                        </select> 
                        <label>Code:</label>
                        <input type="text" id="defaultContactFormName" class="form-control mb-4" name="code">
                        <label>Product Name:</label>
                        <input type="text" id="defaultContactFormName" class="form-control mb-4" name="name">
                        <label>Price:</label>
                        <input type="text" id="defaultContactFormName" class="form-control mb-4" name="price">


                    <!-- Send button -->
                    <button type="submit"  class="btn btn-info btn-block form-control mr-5" id="defaultContactFormName" value="add_product">add product</button>
                    <a href=".?action=list_products" class="btn btn-danger btn-block mt-2">View Product List</a>
                    </form>
                    
            <div>
            <div class="col-md-8">
                        <?php include("..view/product_list.php");?>
            </div>
     </div>

</div>

<?php require_once("../view/f.php");?>