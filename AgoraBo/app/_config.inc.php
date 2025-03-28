<?php 
/** 
 * paramètres de configuration de l'application AgoraBo 
 * 
 * @package default 
 * @author md 
 * @version 1.0 
 */ 
// gestion d'erreur 
ini_set('error_reporting', E_ALL);  // en phase de développement 
ini_set('error_reporting', 0);    // en phase de production 

// constantes pour l'accès à la base de données 
define('DB_SERVER', 'localhost'); // serveur MySql 
define('DB_DATABASE', 'jeux'); // nom de la base de données 
define('DB_USER', 'root');   // nom d'utilisateur 
define('DB_PWD', ''); // mot de passe 
define('DSN','mysql:dbname='.DB_DATABASE.';host='.DB_SERVER); 
?>