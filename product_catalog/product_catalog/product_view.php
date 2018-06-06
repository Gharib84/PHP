<?php include '../view/header.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                <h3 class="text-success">Categories.</h3>
                <?php foreach($categories as $category): ?>
                <a href="?category_id=<?php print $category[0]; ?>" class="list-group-item  waves-light"><?php print $category[1]; ?></a>
<?php endforeach;?>
                </div>                
            </div>
            <div class="col-md-4">
                        <h4> <?php print $name;?></h4>
                        <img  class="img-fluid" src="<?php print $image_filename;?>" alt="<?php print $image_alt;?>">

            </div><!--end column-->
            <div class="col-md-5">
                  <label for="" >List Price:<span></span> <?php echo($list_price . "$"); ?></label><br> 
                  <label for="" >Discount:<span></span> <?php print $discount_percent. "%"; ?></label><br>
                  <label for="" >Your Price:<span></span> <?php print $unit_price_f; ?>(You save <?php echo $discount_amount_f. "$"; ?>)</label><br>
                  <form action="<?php echo '../cart' ?>" method="post">
                     <input type="hidden"  class="form-control" name="action" value="add">
                    <input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id; ?>">
                    <b>Quantity:</b>
                <input id="quantity" class="form-control" type="text" name="quantity" value="1" size="2">
                <br><br>
                <input  class="btn btn-secondary btn-lg "type="submit" value="Add to Cart">
            </form>                  

            </div>
          </div>
    </div>

<?php include '../view/footer.php'; ?>