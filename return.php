<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="col-lg-4">
  <h2>Return Products</h2>
  <form action="" name="form2" method="post" >
  <div class="form-group">  
      <label for="text">Invoice number:</label>
      <input type="text" class="form-control" id="inv_num" placeholder="Invoice number" name="inv_num">
    </div>
    <div class="form-group">
      <label for="text">Product ID:</label>
      <input type="text" class="form-control" id="ProductId" placeholder="product name" name="ProductId">
    </div>
   
    <button type="submit" name="return" class="btn btn-default">Return</button>
  </form>
</div>
</div>
<div class="col-lg-12">

</div>
<?php


if(isset($_POST["return"]))
{
    mysqli_query($link,"insert into returned_list values ((select ProductPrice from product where ProductId = '$_post[ProductId]') , '$_post[ProductId]')  ");
}
?>

</body>
</html>