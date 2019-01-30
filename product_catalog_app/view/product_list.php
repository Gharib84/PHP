<?php require_once("../view/my_header.php");?>
<input type="hidden" name="category_id">
<div class="container mt-5 ml-5">
        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-danger">Product Catalog Application</div>
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-md-6">
                                         <ul>
                                            <?php foreach($categories as $category):?>
                                            <li>
                                                <a href="?category_id=<?php print $category->getCategoryID();?>">
                                                    <?php print $category->getCategoryName();?>
                                                </a>
                                            </li>
<?php endforeach;?>
                                         </ul>   
                                </div>
                                <div class="col-md-6">
                                             <p class="alert alert-danger black-text">
                                                <?php print $current_category->getCategoryName();?>
                                             </p>
                                        <ol>
                                            <?php foreach($products as $product):?>
                                            <li>
                                                <a href=".?action=product_view&amp;product_id=<?php print $product->getProductID();?>">
                                                    <?php print $product->getProductName();?>
                                                </a>
                                            </li>
<?php endforeach;?>
                                        </ol>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
</div>


<?php require_once("../view/my_footer_php");?>