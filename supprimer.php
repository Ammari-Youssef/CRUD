<?php

 include 'db.php';
 if(isset($_GET['deleteid']))
 {
     $id=$_GET['deleteid'];

     $sql="DELETE FROM produits where id=$id";
     $result=mysqli_query($con,$sql);
     if($result)
     {
        // echo 'Suppression avec Succes';
         header('location:home.php');
     }else {
    die(mysqli_error($con));
}
 }