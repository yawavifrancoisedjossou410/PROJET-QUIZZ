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
    <title>Inscription</title>
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
    
    <div class="contain" style="display: flex; flex-direction: row;"> <br>
        
            
        <div class="contain_4"> <br>
        <h2 style="font-weight:bold; margin-left:40px; margin-top:-10px;">S'INSCRIRE</h2>
            <p style="margin-left:40px; margin-top:-5px; color: gray; font-size: large; ">Pour tester votre niveau de culture générale</p>
            <div class="trait_dessus"></div>
            <div class="circle" style="display: flex; flex-direction: row; margin-right: 30px; margin-bottom: 50px;">
                <div class="circle2">   
                </div>
           
            </div>
            <form>
                <div class="form-group" style="width: 400px; border-radius: 2px; margin-left: 40px;height: 50px;">
                  <label for="name" style="color: gray; font-weight: 500; ">Prénom</label>
                  <input type="name" class="form-control" id="" aria-describedby="">
                  
                </div>
                <div class="form-group" style="width: 400px; border-radius: 2px; margin-left: 40px; height: 50px;">
                    <label for="name" style="color: gray; font-weight: 500; ">Nom</label>
                    <input type="name" class="form-control" id="" aria-describedby="">
                    
                </div>
                <div class="form-group" style="width: 400px; border-radius: 2px; margin-left: 40px;height: 50px;">
                    <label for="name" style="color: gray; font-weight: 500; ">Login</label>
                    <input type="name" class="form-control" id="" aria-describedby="">
                   
                </div>
                <div class="form-group" style="width: 400px; border-radius: 2px; margin-left: 40px;height: 50px;">
                  <label for="exampleInputPassword1" style="color: gray; font-weight: 500; ">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group" style="width: 400px; border-radius: 2px; margin-left: 40px; height: 50px;">
                    <label for="exampleInputPassword1" style="color: gray; font-weight: 500; ">Confirmer Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="" style="display: flex; flex-direction: row;">
                    <p style="margin-left:45px; margin-top: 20px; color: black; font-size: large; font-weight: 500;">Avatar</p>
                    <button class="btn btn-primary" type="submit" style="margin-left: 200px; background-color: aqua; border: none; height: 35px; margin-top: 20px;">Choisir un fichier</button>
                </div>
                    <button class="btn btn-primary" type="submit" style="margin-left: 190px; margin-bottom: 50px; background-color: aqua; border: none; height: 35px;">Créer compte</button>
                </form>
                
                
        </div>
    </div>
</body>
</html>