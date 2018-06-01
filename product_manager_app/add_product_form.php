<?php

    require_once("database.php");
    $query = "SELECT * FROM categories ORDER BY categoryID";
    $statement = $dbc->prepare($query);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

<div class="container mt-5 mr-5">
        <div class="row">
                <div class="col-md-8">
                    
<!-- Default form login -->
<form action="add_product.php" method="POST">
    <p class="h4 text-center mb-4">Add Product</p>

    <!-- Default input email -->
    <label for="defaultFormLoginEmailEx" class="grey-text">Your Category</label>
    <select  id="defaultFormLoginPasswordEx"   name = "category_id" class="form-control">
    <?php foreach($categories as $category): ?>
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
        <button class="btn btn-indigo" type="submit">Add Product</button>
    </div>
</form>
<a href="view.php">View Product List</a>
<!-- Default form login -->
</div>
    </div>  
        </div>


<!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
                

</body>
</html>