<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MashAllah Electric Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<body>



    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/AddProduct.php">MashAllah Electric Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AddProduct.php">Add product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="DeleteProduct.php">Delete Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="UpdateProduct.php">Update Product</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="ProductList.php">Product List</a>
                    </li>

                </ul>




            </div>
        </div>

    </nav>

    <div class="container mt-4 mb-4">

<h2> Update </h2>

<form action="" method='post'>

<label for="ListItem" class="form-label">Select Item</label>
<input class="form-control  mb-4" list="datalistOptions" id="ListItem" name="ListItem" placeholder="Type to search...">
<datalist id="datalistOptions">


<?php 


$USER_NAME = 'root';
$Password = '';
$SERVER = 'localhost';
$DATABASE = 'store';

$conn = mysqli_connect($SERVER, $USER_NAME, $Password, $DATABASE);
$sql = "SELECT * FROM `product`";

$result = mysqli_query($conn, $sql);


    while($rows = mysqli_fetch_assoc($result)){

           $name = $rows['Name'];
           echo "<option value='$name'> $name </option>";
    }

?>


</datalist>


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



<div >

<button type="submit" name='submit' class="btn btn-dark">Update Product</button>

</div>


</form>

<?php

    
if(isset($_POST['submit'])){

$Selected_item = $_POST['ListItem'];
$newProduct_name = $_POST['ProductName'];
$newProduct_price = $_POST['ProductPrice'];
$newProduct_quantity = $_POST['ProductQuantity'];

$DelQuery = "UPDATE `product` SET `Name`='$newProduct_name',`Price`='$newProduct_price',`Quantity`='$newProduct_quantity' WHERE '$Selected_item' = `Name`";

$DelRes = mysqli_query($conn,$DelQuery);

if($DelRes){

  echo '<div class="alert alert-success mt-4" role="alert">
  product updated successfull!
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
    


</body>

</html>