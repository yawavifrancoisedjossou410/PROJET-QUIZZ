<?php
session_start();
require_once "fonctions/bdd.php";
include_once "fonctions/contact.php";
$bdd = bdd();
if(!empty($_POST))
    $erreur = contact();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/parametrervotrequizz.css">
</head>
<body>
<div class="entete"  >
  <div  style="margin-left: 0px"> 
     <img src="../images/personnage.PNG" alt="" > 
    </div>
    <div  style="color:azure; margin-left: 500px;">
        <h1>Le plaisir de jouer </h1>
        
    </div>
  </div>
    
    <div class="contain"> <br>
        <div class="contain3" style="width: 500px; margin-top: 70px;">
            <h1>Login From</h1>
            <button type="button" class="close" aria-label="Close" style="margin-top: -40px; margin-right: 30px; color:white;">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>

        <div class="contain9" >
            <div class="form-group" style="padding: 10px;">
                <label for=""></label>
                  <input type="text"
                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="Login" style="background-color:#F0EEF1;background-image: url(../images/ic-login.png) ;background-repeat:no-repeat; background-position: 400px; height: 60px; border: gray solid 0.5px; width: 450px; margin-left: 15px;"><br>
                  <input type="text"
                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="Password" style="background-color:#F0EEF1; background-image: url(../images/ic-cadena.jpg) ;background-repeat:no-repeat; background-position: 390px;height: 60px;border: gray solid 0.5px; width: 450px; margin-left: 15px;">
              </div>
              <div style="padding-left:10px; display: flex;">
                  <button type="button" class="btn btn-primary" style="background-color: #51BFD0; border: none; margin-left: 15px;">Connexion</button>
                  <article style="padding-left: 20px; font-size: large; ">S'inscrire pour jouer ?</article>
              </div>
            
        </div>
    </div>
    
</body>
</html>