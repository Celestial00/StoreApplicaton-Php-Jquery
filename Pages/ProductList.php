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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Add product</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="DeleteProduct.php">Delete Product</a>
          </li>


        
          <li class="nav-item">
            <a class="nav-link" href="UpdateProduct.php">Update Product</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Product List</a>
          </li>


        </ul>

        




      </div>
    </div>

  </nav>


  <div class="container mt-5">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>

  <?php 

$USER_NAME = 'root';
$PASSWORD = '';
$SERVER = 'localhost';
$DATABASE = 'store';

$conn = mysqli_connect($SERVER, $USER_NAME, $PASSWORD, $DATABASE);

if(!$conn){

  echo "not connected";

}

$sql = "SELECT * FROM `product`";
$res = mysqli_query($conn, $sql);

$count = 0;

while($rows = mysqli_fetch_assoc($res))

echo "<tr><th scope='row'></th><td>". $rows['Name'] ."</td><td>". $rows['Price']. "</td><td>" .$rows['Quantity']. "</td></tr>"


  ?>

  
   
   
  </tbody>
</table>

  </div>

</body>

</html>