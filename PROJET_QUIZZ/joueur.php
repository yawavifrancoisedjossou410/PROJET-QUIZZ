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
                            <div class="col-md-4">
                            <?php
                            if(isset($erreurs)) :
                            if($erreurs) :
                            foreach($erreurs as $erreur) :
                            ?>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="message erreur"><?= $erreur ?></div>
                                </div>
                            </div>
                            <?php
                            endforeach;
                            else :
                            ?>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">
                                    <div class="message confirmation">Merci! On vous contactera dés que possible</div>
                                </div>
                            </div>
                            <?php
                            endif;
                            endif;
                            ?>
                    <div class="buy-ticket-form">
                        <form id='contactform' action="" method="POST" name="contactform">
                            <h5></h5>
                            <ul class="form-cover">
                                <li class="inp-cover inp-name"><input id="name" name="name" type="text" name="your-name" placeholder="Name" value="<?php if(isset($_POST["name"])) echo $_POST["name"] ?>"></li>                    
                                <li class="inp-cover inp-name"><input id="prenom" name="prenom" type="text" name="your-name" placeholder="Prénom" value="<?php if(isset($_POST["prenom"])) echo $_POST["prenom"] ?>"></li>
                                <li class="inp-cover inp-email"><input id="niveau" name="niveau" type="text" name="your-email" placeholder="Niveau" value="<?php if(isset($_POST["niveau"])) echo $_POST["niveau"] ?>"></li>
                                <li class="inp-cover inp-email"><input id="email" name="email" type="email" name="your-email" placeholder="E-mail" value="<?php if(isset($_POST["email"])) echo $_POST["email"] ?>"></li>
                                <li class="inp-text"><textarea id="comments" value="<?php if(isset($_POST["comments"])) echo $_POST["comments"] ?>" name="your-text" placeholder="Vos motivations..."></textarea></li>
                            </ul>
                            <br><br><br>
                            <div class="btn-form-cover">
                            </div>
                        </form>
                        <div id="message"></div>
                    </div>
                </div>
                <div class="col-md-2">
                    <p></p>
                </div>
            </div>
        </div>
    </section>
            <div class="contain5">
                <div class="container5b">
                    <h1>Liste des joueurs par score</h1>
                    <table style="width: 300px;">
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Score</th>
                        </tr>
                     
                        <tr>
                            <td>Carmen</td>
                            <td>victor</td>
                            <td>456329</td>
                        </tr>
                        <tr>
                            <td>Michelle</td>
                            <td>rodrigue</td>
                            <td>755586</td>
                        </tr>
                        <tr>
                            <td>Hilary</td>
                            <td>DUCOBU</td>
                            <td>155555pts</td>
                        </tr>
                        <tr>
                            <td>Carmen</td>
                            <td>ANCIENA</td>
                            <td>6678pts</td>
                        </tr>
                        <tr>
                            <td>Carmen</td>
                            <td>Le mogo</td>
                            <td>594963pts</td>
                        </tr>
                        <tr>
                            <td>Carmen</td>
                            <td>Le mogo</td>
                            <td>594963pts</td>
                        </tr>
                     </table>
                     <input class="btn btn-primary" type="submit" value="Suivant" style="float: right;background-color: #39DDD6; border: none;margin-right: 50px;margin-top: 50px;border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
</body>
</html>