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
    <title>Paramétrer votre quizz</title>
    <link rel="stylesheet" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/parametrervotrequizz.css">
</head>
<body>
<div class="entete"  >
  <div  style="margin-left: 0px"> 
     <img src="personnage.PNG" alt="" > 
    </div>
    <div  style="color:azure; margin-left: 500px;">
        <h1>Le plaisir de jouer </h1>
        
    </div>
  </div>
    
    <div class="contain"> <br>
        <div class="contain3">
            <h1>Créer et parametrer votre quizz</h1>
            <input class="btn btn-primary" type="submit" value="Déconnexion" style="margin-left: 800px; margin-top: -80px; background-color: #39DDD6;border: none;">
        </div>

        <div class="contain_2">
            
            <div class="contain4">
                <div class="container4b">
                    <div class="cercle">
                        <div class="cercle2">
                        </div>
                    </div>
                    <div>
                        <p style="margin-top: 15px;">AA</p>
                        <p style="margin-top: -20px; margin-left: 15px;">BBB</p>
                    </div>
                 
                </div>
                <ul id="navigation">
                    <li><a href="#" title="aller à la section 1" style="background-image:url(../images/ic-liste.png);background-repeat:no-repeat; background-position: 240px;" >Liste Question</a></li>
                    <li><a href="#" title="aller à la section 2" style="background-image:url(../images/ic-ajout.png);background-repeat:no-repeat; background-position: 240px;">Créer Admin</a></li>
                    <li><a href="#" title="aller à la section 3" style="background-image:url(../images/ic-liste.png);background-repeat:no-repeat; background-position: 240px;">Liste joueur</a></li>
                    <li><a href="#" title="aller à la section 4" style="background-image:url(../images/ic-ajout-active.png);background-repeat:no-repeat; background-position: 240px;">Créer Question</a></li>
                  </ul>
            </div>
            <div class="contain_5">
                <div class="container_5b">
                    <h1>Nbre de questions/jeu 
                        <input type="text" style="width: 50px;">
                        <a href=""></a>
                        <button type="button" class="btn btn-primary" style="margin-top: -8px; margin-left: 10px; background-color:#5e90af; border: none;">OK</button>
                    </h1>
                    <div>
                      <h4 style="color: gray; font-weight: bold;">1.Les languages Web
                      </h4>
                      <label class="container" style=" font-weight: bold;">
                        <input type="checkbox">
                        <span class="checkmark"></span>HTML
                      </label>
                      <label class="container" style=" font-weight: bold;">
                        <input type="checkbox" >
                        <span class="checkmark"></span>R
                      </label>
                      <label class="container" style=" font-weight: bold;"> 
                        <input type="checkbox" name="reponse1">
                        <span class="checkmark"></span>Java
                      </label>
                     <h4 style="color: gray; font-weight: bold;">2-D'où vient le corona </h4>
                     <div class="boxes">
                        <input type="radio" id="box-1" name="choix2" >
                        <label for="box-1" style=" font-weight: bold;">Italie</label>
                        <br>
                        <input type="radio" id="box-2" checked name="choix2">
                        <label for="box-2" style=" font-weight: bold;">Chine</label>
                      
                      </div>
                     <h4 style="color: gray; font-weight: bold;">3.Quel terme définit langage qui s'adapte sur
                        Android et sur los ? </h4>
                        <input type="text" style="width:300px ;margin-left: 10px;">
                     <h4 style="color: gray; font-weight: bold;">4.Quelle est la première école de codage gratuite
                        au Sénégal?</h4> 
                        <div class="boxes">
                            <input type="radio" id="box-1" name="choix4">
                            <label for="box-1" style=" font-weight: bold;">Simpolon</label>
                            <br>
                            <input type="radio" id="box-2" checked name="choix4">
                            <label for="box-2" style=" font-weight: bold;">Orange digital center</label>
                          
                          </div>
                     <h4 style="color: gray; font-weight: bold;">5.Les précurseurs de la révolution digitale</h4>
                     <div class="boxes">
                        <input type="radio" id="box-1" name="choix5">
                        <label for="box-1" style=" font-weight: bold;">GAFAM</label>
                        <br>
                        <input type="radio" id="box-2" checked name="choix5">
                        <label for="box-2" style=" font-weight: bold;">CIA-FBI</label>
                      
                      </div>
                    </div>
                    
                </div>
                <button type="button" class="btn btn-primary" style="float: right; background-color: #39DDD6; border: none; margin-top: 7px;">Suivant</button>
            </div>
           
        </div>
    </div>
</body>
</html>