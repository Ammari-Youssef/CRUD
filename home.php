<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Home</title>
</head>
<body>
    <center><h2> Mes Produits <h2> </center>
    <table class="table" >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom du produit</th>
      <th scope="col">prix</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


<?php
//Dans home on trouve nos produits avec leurs prix et ids

include 'db.php';

$sql="SELECT * FROM produits";
$result=mysqli_query($con,$sql);


while($row=mysqli_fetch_assoc($result))
{
    $id=$row['id'];
    $nom=$row['nom'];
    $prix=$row['prix'];

    echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$nom.'</td>
      <td>'.$prix.' MAD'.'</td>
      <td>
        <button class="btn btn-primary"><a href="modifier.php?updateid='.$id.'" class="text-light" >Modifier</a></button>
        <button class="btn btn-danger" ><a href="supprimer.php?deleteid='.$id.'" class="text-light">Supprimer</a></button>
      </td>
      </tr>
      ';
}


?>

 <div class="container">
        <button class="btn btn-primary my-5">
           <a href="ajouter.php" class="text-light"> Add product </a>
        </button>
         appuez sur la bouton pour ajouter un produit . 
</div>

</body>
</html>