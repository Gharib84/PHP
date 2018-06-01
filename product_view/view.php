<?php require("index.php"); ?>
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
    
<div class="container mt-5">
<div class="row">
    <div class="col-md-4">
            <div class="list-group">
            <?php foreach($catos as $category) :?>
            <a href="?category_id=<?php  print $category[0];?>" class="list-group-item waves-light"><?php print $category[1];?></a>
        <?php endforeach;?>
        </div>    
    </div>
    <div class="col-md-8">
        <!--Table-->
        <h3 class="text-success"> <?php  print $category_name ;?></h3>
        <table class="table">
        <thead class="mdb-color darken-3">
        <tr class="text-white">
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
                <?php foreach($products as $product): ?>
                <tr>
                    <td><?php print $product["productCode"]; ?></td>
                    <td><?php print $product["productName"]; ?></td>
                    <td><?php print $product["listPrice"]; ?></td>
                </tr>
        <?php endforeach; ?>

        </tbody>
        </table>
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