<?php  require_once("./header.php");?>

<?php  if(empty($_SESSION["cart12"]) || count($_SESSION["cart12"])== 0): ;?>
<p class="alert alert-info">There No items in your cart.</p>
<?php else: ?>
<form action="." method="POST">
    <input type="hidden" name="action" value="update">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Item</th>
      <th scope="col"> Item Cost</th>
      <th scope="col">Quantity</th>
      <th scope="col">Item Total</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php foreach($_SESSION["cart12"] as $key => $item): 
    $cost = number_format($item["cost"], 2);
    $total = number_format($item["total"], 2);
  ?>
    <tr>
      <td><?php print $item["name"];?></td>
      <td><?php print $cost;?></td>
      <td>
      <input type="number" name="newqty[<?php print $key;?>]" value="<?php print $item["qty"];?>" aria-label="Search" class="form-control" style="width: 100px">
        
      </td>
      <td>
          <?php print $total;?>
      </td>
    </tr>
<?php endforeach;?>
  </tbody>
  <tbody>
      <tr>
          <td></td>
          <td></td>
          <td>
              <b>Subtotal</b>
        </td>
        <td> <?php  print get_subtotal();?></td>
        </tr>
  </tbody>
</table>
</form>
<?php endif;?>
<p><a href=".?action=show_add_item">Add Item</a></p>
<p><a href=".?action=empty_cart">Empty Cart</a></p>
<?php require_once("./footer.php"); ?>