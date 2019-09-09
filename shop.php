<?php
    $connect = new PDO("mysql:host=localhost; dbname=phpecom", "root", "");
?>
<!DOCTYPE html>
<html>
<head> 
<title>Web Shop</title>    
<link rel="stylesheet" href="css/bootstrap.min.css" />  
<link rel="stylesheet" href="main.css" />                     
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
    *{
        font-family: sans-serif;
    }
    .product{
        border: 1px solid #eaeaec;
        margin: -1px 19px 3px -1px;
        padding: 10px;
        text-align: center;
        background-color: #efefef;
    }
    table, th, tr{
        text-align: center;
        color: #66afe9;
        background-color: #efefef;
        padding: 2%;
    }
    h2{
        text-align: center;
        color: #66afe9;
        background-color: #efefef;
        padding: 2%;
    }
    table th{
        background-color: #efefef;
    }
</style>
</head>
<body>
<div class="container" style="width: 65%">
    <h2>shopping Cart</h2>
    <?php
        $query = "SELECT * FROM product ORDER BY id ASC";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll() ;
        foreach($result as $row)   
        {
    ?>
    <div class="col-md-3">
            <form method="post" action="Shop.php?action-add&id=<?php echo $row["id"] ?>">
                <div class="product">
                    <img src="<?php echo $row['image']; ?>" class="img-responsive">
                    <h5 class="text-info"><?php $row['name']; ?></h5>
                    <h5 class="text-danger"><?php $row['price']; ?></h5>
                    <input type="text" name="quantity" class="form-control" value="1">
                    <input type="hidden" name="hidden_item" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">
                    <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-sucess" value="Add to Cart">

                </div>
            </form>
    </div>
    <?php
        }
    <div style="clear: both"></div>
    <h3 class="title2">Shopping Cart Details</h3>
    <div class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details Name</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value)}
                        ?>
                <tr>
                    <td><?php echo $value["item_name"]; ?></td>
                    <td><?php echo $value["item_quantity"]; ?></td>
                    <td><?php echo $value["product_price"]; ?></td>
                    <td><?php echo number_format(number $value["item_quantity"] * $value["product_price"], decimal: 2) ?></td>
                    <td><a href="Shop.php?action=delet&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>
                </tr>
                <?php
                    $total = $total + ($value["item_quantity"] * $value["product_price"]);
                ?>
                <tr>
                    <td colspan="3" text-align="right">Total</td>
                    <th text-align="right">$ <?php echo number_format($total, decimal:2); ?></th>
                    <td></td>
                </tr>
        </div>
</div>
</body>
</html>
