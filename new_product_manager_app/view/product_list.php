<?php 
require_once("h.php");?>


<div class="container mt-5">
        <div class="row">
             <div class="col-md-3">
                    <h4 class="ml-2"><b>Categories</b></h3>
                <div class="nav flex-column nav-pills list-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php foreach($categories as $category): ?>

                <a class="nav-link list-group-item " id="v-pills-home-tab" href="?category_id=<?php print $category->getID();?>">
                    <?php print $category->getName();?>
                </a>
<?php endforeach;?>
             </div>
         </div>
         <div class="col-md-9">
         <div class="tab-content" id="v-pills-tabContent">
                            <p class="alert alert-success">
                              <?php print $current_category->getName();?>
                            </p>
                            <table class="table">
                                        <thead class="white black-text">
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product Code</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Product Price</th>
                                            <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($products as $key => $product): ?>
                                            <tr>
                                            <th scope="row"><?php print $key+= 1;?></th>
                                            <td><?php print $product->getCode();?></td>
                                            <td><?php print $product->getName();?></td>
                                            <td><?php  print $product->getPriceFormatted();?></td>
                                            <td>
                                                <form action="." method="POST">
                                                        <input type="hidden" class="from-control" name="action" value="delete_product">
                                                        <input type="hidden" class="form-control" name="product_id" value="<?php print $product->getID();?>">
                                                        <input type="hidden" class="from-control" name="category_id" value="<?php print $current_category->getID();?>">
                                                         <input type="submit" class="form-control btn btn-sm btn-info" value="Delete" >
                                                </form>
                                            </td>
                                        
                                    </tr>    
<?php endforeach;?>          
                            </tbody>
                    </table>
                     
                          <!-- end -->
                          <a href=".?action=show_add_form" class="btn btn-pink">Add Product</a>
                </div> 
         </div>
    </div>
</div>


<?php require_once("f.php"); ?>