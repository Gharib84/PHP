<?php require_once("../view/header.php");?>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <ul class="list-group list-group-flush">
        <?php foreach($categories as $category): ?>
        <li class="list-group-item">
            <a href="?category_id=<?php  print $category[0];?>">
                <?php  print $category[1]; ?>
            </a>
        </li>
<?php endforeach;?>
    </ul>   
            </div>  
        </div>
        <div class="md-col-6">
            <h3><?php  print $category_name;?> </h3>

                <ul class="list-group">
                <?php foreach($products as $product): ?>
                <li class="list-group-item">
                    <a href="?action=view_product&amp;product_id=<?php print $product["productID"]; ?>">
                        <?php  print $product["productName"];?>
                    </a>
                </li>
                <?php endforeach;?>
                </ul>
                                
                
                
        </div>
    </div>
</div>





<?php require_once("../view/footer.php");?>
