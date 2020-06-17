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

        <div class="contain2">
            
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
            <div class="contain5">
                <div class="container5b">
                    <h1>Créer et paramétrer votre quizz votre quizz</h1>
                    <form>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label font-weight-bold" style="font-family:myriad pro; font-size: larger; " >Questions</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" style="width: 300px; height:80px; box-shadow: 1px 1px 0px aqua;">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-4 col-form-label font-weight-bold" style="font-family:myriad pro; font-size: larger; ">Nbre de Points</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputPassword" style="width: 75px; padding-left: 50px; box-shadow: 1px 1px 0px aqua;">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label font-weight-bold" style="font-family:myriad pro; font-size: larger; " >Type de réponses</label>
                  
                            <div class="form-group col-sm-7.5">
                             
                              <select class="form-control" id="exampleFormControlSelect1" style="width: 300px; box-shadow: 1px 1px 0px aqua;">
                                <option>Donner le type de réponse</option>
                                <option>vvvvvvv </option>
                                <option>fffffffffff</option>
                      
                              </select>
                            </div>
                          <div class="form-group col-sm-0.5" style="margin-left: 20px;"> 
                          <a href="#"> <img src="ic-ajout-réponse.png" alt="" > </a>
                          </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label font-weight-bold" style="font-family:myriad pro; font-size: larger; " >Réponse 1 </label>
                            <div class="col-sm-7.5">
                              <input type="text" class="form-control" id="inputPassword" style="width: 300px; box-shadow: 1px 1px 0px aqua; ">
                            </div>
                            <div class="btn-group col-sm-0.5" data-toggle="buttons" style="margin-left: 10px;">
                              <label class="">
                                <input type="checkbox" name="" id="" >
                              </label>
          
                            </div>

                            <div class="btn-group col-sm-0.5" data-toggle="buttons" style="margin-left: 10px;">
                              <label class="">
                                <input type="radio" name="" id="" autocomplete="off">
                              </label>
                        
                            </div>
                            <div class="form-group col-sm-0.5" style="margin-left: 20px;"> 
                              <a href="#"> <img src="ic-supprimer.png" alt="" > </a>
                              </div>
                          </div>
                          <input class="btn btn-primary" type="submit" value="Enregistrer" style="float: right;background-color: #39DDD6; border: none;margin-right: 50px;">
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>