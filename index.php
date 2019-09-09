<!DOCTYPE html>
<html>
<head> 
<title>Seymur Shop</title>    
<link rel="stylesheet" href="css/bootstrap.min.css" />                       
<link rel="stylesheet" href="main.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <div class="container">
            <a href="index.php" class="navbar-brand" id="text">Seymur Shop</a>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" id="text">Men<span class="caret"><span></a>
                <ul class="dropdown-menu" >
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Shoes</a></li>
                </ul>
                </li>
            <ul>
        </div>
</nav>
        <div id="background-image">
        <div id="image-1"></div>
        <div id="image-2"></div>
        </div>
        
        <div class="col-md-9">
        <div class="row">
        <h2 class="text-center">Clothing Products</h2>
        <div class="col-md-2"><br><br>
        <h5>Denim Jeans</h5>
        <img src="jeans.jpg" alt="Jeans" id="images"/>
        <p class="list-price text-danger">List Price: <s>$26.99</s></p>
        <p class="price">Our Price: $22.00</p>
        <button type="button" class="btn" data-toggle="modal" data-target="#details-1">Details</button>
       </div>
      
        <div class="col-md-2"><br><br>
        <h5>Denim Jeans</h5>
        <img src="jn1.jpg" alt="Jeans" id="images"/>
        <p class="list-price text-danger">List Price: <s>$29.99</s></p>
        <p class="price">Our Price: $25.00</p>
        <button type="button" class="btn btn-sucess" data-toggle="modal" data-target="#myDetails">Details</button>
        </div>
        
        <div class="col-md-2"><br><br>
        <h5>Denim Jeans</h5>
        <img src="jn2.jpg" alt="Jeans" id="images"/>
        <p class="list-price text-danger">List Price: <s>$39.99</s></p>
        <p class="price">Our Price: $30.00</p>
        <button type="button" class="btn btn-sucess" data-toggle="modal" data-target="#details-3">Details</button>
        </div>
        <div class="col-md-2"><br><br>
        <h5>Denim Jeans</h5>
        <img src="jn2.jpg" alt="Jeans" id="images"/>
        <p class="list-price text-danger">List Price: <s>$44.99</s></p>
        <p class="price">Our Price: $35.00</p>
        <button type="button" class="btn btn-sucess" data-toggle="modal" data-target="#details-4">Details</button>
        </div>
        </div>
        </div>
 <?php include 'details-modal-LevisJeans.php'; ?>       
        
</body>
</html>
