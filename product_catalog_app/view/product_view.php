<?php require_once("../view/my_header.php");?>


<div class="container mt-5">
        <div class="row">
                <div class="col-md-3">
                   <ul class="list-group">
                      <?php foreach($categories as $category):?>
                      <li class="list-group-item"><a href="?category_id=<?php print $category->getCategoryID();?>">
                            <?php print $category->getCategoryName();?>
                      </a>
                      </li>
<?php endforeach;?>
                    </ul>
               </div>
               <div class="col-md-4">
                    <h4> <?php print $product->getProductName();?></h4>
                    <img  class="img-fluid" src="<?php print $product->getImagePath();?>" alt="<?php print $product->getImageAltText();?>">

               </div>
               <div class="col-md-5">
                        <label for="" >List Price:<span></span> <?php print($product->getListPriceFormat() . "$"); ?></label><br> 
                            <label for="" >Discount:<span></span> <?php print $product->getDiscountPercent(). "%"; ?></label><br>
                            <label for="" >Your Price:<span></span> <?php print $product->getDiscuntPrice(); ?>(You save <?php echo $product->getDiscountAmount(). "$"; ?>)</label><br>
                            <form action="." method="post">
                                <input type="hidden"  class="form-control" name="action" value="add">
                                <input type="hidden" class="form-control" name="product_id" value="<?php echo $product->getProductID(); ?>">
                                <b>Quantity:</b>
                            <input id="quantity" class="form-control" type="text" name="quantity" value="1" size="2">
                            <br><br>
                            <input  class="btn btn-secondary btn-lg "type="submit" value="Add to Cart">
                        </form>     
               </div>
        </div>
</div>











<?php require_once("../view/my_footer.php");?>