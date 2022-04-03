<?php

 include 'db.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM  produits WHERE id=$id";
$row=mysqli_fetch_assoc(mysqli_query($con,$sql));

$name=$row['nom'];
$prix=$row['prix'];


 if(isset($_POST['submit']))
 {
     $product=$_POST['nom'];
     $prix=$_POST['prix'];

     $sql="UPDATE produits SET id=$id,nom='$product' ,prix='$prix' WHERE id=$id";

     $result=mysqli_query($con,$sql);

     if($result)
     {
         header("location:home.php");
     }else{
         die(mysqli_error($con));
     }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Add Product</title>
  </head>
  
  <body>
      <h2><center>Modification du Produit</center></h2>
    <div class="container my-5">
        <form method="post">
    <div class="mb-3">
  <label>Produit</label>
  <input type="text" class="form-control" placeholder="Entrer le nouveau nom du produit " name="nom" autocomplete="off" value=<?php echo $name;?>>  
    </div>

 

 <div class="container">
        <form method="post">
  <div class="mb-3">
  <label>Prix</label>
  <input type="text" class="form-control" placeholder="Entrer le prix" name="prix" autocomplete="off" value=<?php echo $prix;?>>  
</div>

 
  <button type="submit" class="btn btn-primary" name="submit">Mise à jour</button>
</form>
    </div>

    
  </body>
</html>