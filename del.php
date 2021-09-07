<?php

function  deleteBD ()
{
  $id = $_GET['id'] ;
  
  //--- Connection au SGBDR 
  include('connect.php');

  // Delete FROM personne where nom='DUPONT' Limit 1;
  $sql = "DELETE From type_livre2 Where id=?;" ;
  //--- Préparation de la requête
  $stmt = mysqli_prepare($DataBase,$sql);
    mysqli_stmt_bind_param($stmt,'s',$id);
	
  //--- Exécution de la requête 
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

 //--- Déconnection de la base de données
  header('Location: index.php');
  
}

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Suppression</title>
    </head>
    <body>
<?php
deleteBD();
?>
    </body>
    </html>