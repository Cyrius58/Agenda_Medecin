<?php

/*
 * Database
 */
define('DB_HOST', 'localhost');		// Le serveur MySQL de votre BDD : à modifier
define('DB_NAME', 'videotheque');	// Votre base de donn�es : à modifier
define('DB_USER', 'root');		    // Votre login : à modifier
define('DB_PWD', '');               // Votre mot de passe : à modifier



/*
 * Paths
 */
define('URL_PATH', 'http://localhost/');		// Path de l'application : à modifier
define('STATIC_PATH', URL_PATH . 'static/');	// Path des médias

/*
*constante globale de sécurité:
*/

//$pattern = "/£|€|¤|¨|\(|{|\[|~|!|@|#|[$]|%|\^|&|§|°|\*|_|-|\+|=|'|\||:|;|\"|'|<|>|,|`|\.|\?|\\\|\/|]|}|\)|\n/i";
            ///£ € ¤ ¨ \( { \[ ~ ! @ # [$] % \^ & § ° \* _ - \+ = ' \| : ; \" ' < > , ` \. \? \\\ \/ ] } \) \n       //liste des caractères rejetés
define('ANTI_INJEC_SQL',"/£|€|¤|¨|\(|{|\[|~|!|@|#|[$]|%|\^|&|§|°|\*|_|-|\+|=|'|\||:|;|\"|'|<|>|,|`|\.|\?|\\\|\/|]|}|\)|\n/i");
define('LISTE_INTERDITE',"<br>Liste interdite :<br>£ € ¤ ¨ () {} [] <>~ ! @ # $ % ^ & § ° * _ - + = ' | : ; \" ' , ` . \? \\ / \n");


?>
