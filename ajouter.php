<?php

 include 'db.php';

 if(isset($_POST['submit']))
 {
     $product=$_POST['nom'];
     $prix=$_POST['prix'];

     $sql="INSERT INTO produits (nom,prix) 
     VALUES ('$product','$prix')";

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
      <h2><center>Nouveau Produit</center></h2>
    <div class="container my-5">
        <form method="post">
    <div class="mb-3">
  <label>Produit</label>
  <input type="text" class="form-control" placeholder="Entrer le nom du produit" name="nom" autocomplete="off" >  
    </div>

 

 <div class="container">
        <form method="post">
  <div class="mb-3">
  <label>Prix</label>
  <input type="text" class="form-control" placeholder="Entrer le prix" name="prix" autocomplete="off">  
</div>

 
  <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
</form>
    </div>

    
  </body>
</html>