<?php 
require 'Classes/Db.php';
$DB = new Db();


// cacher les erreurs pour la production
ini_set('error_reporting', 0);
// afficher les érreurs lors du developpement 
//ini_set('error_reporting', E_ALL);
 ?>