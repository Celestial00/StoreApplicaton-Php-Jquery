<!doctype html>
<html lang="en">
  <head>
   
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MashAllah Electric Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  

</head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/AddProduct.php">MashAllah Electric Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Add product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="DeleteProduct.php">Delete Product</a>
        </li>

        <li class="nav-item">
                    <a class="nav-link" href="ProductList.php">Product List</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="UpdateProduct.php">Update Product</a>
                  </li>

        
        
      </ul>
     
    </div>
  </div>
</nav>

<div class="container mt-4 mb-4">

<h2> Add product </h2>

<form action="" method='post'>

<div class="input-group mb-3 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Product Name</span>
  </div>
  <input type="text" class="form-control" name='ProductName' id='ProductName' aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Product Price</span>
  </div>
  <input type="number" class="form-control" name='ProductPrice' id='ProductPrice' aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3 mt-4">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Product Quantity</span>
  </div>
  <input type="text" class="form-control" name='ProductQuantity' id='ProductQuantity' aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>

<div >

<button type="submit" class="btn btn-dark">Add Product </button>

</div>


</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $ProductName = $_POST['ProductName'];
    $ProductPrice = $_POST['ProductPrice'];
    $ProductQuantity = $_POST['ProductQuantity'];


//Connection 

$USER_NAME = 'root';
$Password = '';
$SERVER = 'localhost';
$DATABASE = 'store';

$conn = mysqli_connect($SERVER, $USER_NAME, $Password, $DATABASE);

$Query = "INSERT INTO `product` (`Name`, `Price`, `Quantity`) VALUES ('$ProductName', '$ProductPrice', '$ProductQuantity')";
$result = mysqli_query($conn, $Query);

if($result){

    echo '<div class="alert alert-success mt-4" role="alert">
    Product added successfull!
  </div>';

}

else{

    echo '<div class="alert alert-danger mt-4" role="alert">
    Something went wrong 
  </div>';

  echo mysqli_error($conn);

}

}

?>


</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  

</body>
</html>