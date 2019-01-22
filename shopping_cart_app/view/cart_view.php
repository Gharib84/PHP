<?php require_once("../view/header.php");?>

        <h3><b>Your Cart</b></h3>
        <?php if (empty($_SESSION['cart13']) || 
                  count($_SESSION['cart13']) == 0) : ?>
            <p class="alert alert-danger">There are no items in your cart.</p>
        
<?php else: ?>
<p class="alert alert-success">Enter a quantity of 0 to remove an item.</p>
            <form action="." method="post">
                <input type="hidden" name="action" value="update">

                <div class="card">
  <div class="card-body">

    <div class="table-responsive">

      <table class="table product-table">

        <thead class="mdb-color light-blue text-white">
          <tr>
            <th></th>
            <th class="font-weight-bold">
              <strong>Product</strong>
            </th>
            <th class="font-weight-bold">
              <strong>Cost</strong>
            </th>
            <th></th>
            <th class="font-weight-bold">
              <strong>QTY</strong>
            </th>
            <th class="font-weight-bold">
              <strong>Total</strong>
            </th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        
        <tbody>

        
          <?php foreach($_SESSION["cart13"] as $key => $item):
                    $cost = number_format($item["cost"], 2);
                    $total = number_format($item["total"], 2); 
                    
                    ?>
          <tr>
                
            <td></td>
            <td>
                    <?php print $item["name"];?>
            </td>
            <td>
                    <?php print $cost;?>
            </td>
            <td></td>
            <td>
              <input type="number" name="newqty[<?php print $key;?>]" value="<?php print $item["qty"];?>"  class= "form-control" style="width: 100px">
            </td>
            <td class="font-weight-bold">
              <strong>$ <?php print $total;?></strong>
            </td>
            <td>
            <a href=".?action=empty_cart" class="btn btn-sm btn btn-orange">X</a>
            </td>
          </tr>
          <?php endforeach;?>
          <tr>
            <td colspan="3"></td>
            <td>
              <h4 class="mt-2">
                <strong>Total</strong>
              </h4>
            </td>
            <td class="text-right">
              <h4 class="mt-2">
                <strong>$<?php print Cart\get_subtotal();?></strong>
              </h4>
            </td>
            <td colspan="3" class="text-right">
                <input type="submit" class="btn btn-indigo btn-rounded form-control" value="Update Cart">
            </td>
          
          </tr>
          
     
        </tbody>
        

      </table>

    </div>
    

  </div>

</div>
    </form>        
 <?php endif; ?>
<?php require_once("../view/footer.php");?>
