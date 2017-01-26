<?php
/*
 * config values for your system
 * #adapt the following datas to your need
 */

		/*
		 * secret informations for your eyes only
		 * todo: put it into c5 configs
		 */
		$zedbHostname = "localhost";                       //your mysql webserver name, usually localhost
		$login= "username";                              // user name for you database
		$pass= "password";                             // pass word to the database if you dont have a password
		$database_nameC5="dbname";                     //name of the database

      function passe_mnemo(){
      	#Description :
      #Génère un mot de passe prononçable, pour faciliter sa mémorisation, mais malgré tout très compliqué.
      #Par exemple :
      #ZbleUrg (prononçable, mais difficile).
      #Auteur : Damien Seguy
      #Url : http://www.nexen.net
       if (func_num_args() == 1){ $nb = func_get_arg(0);} else { $nb = 8;}

        // on utilise certains chiffres : 1 = i, 5 = S, 6=b, 3=E, 9=G, 0=O
        $lettre = array();
        $lettre[0] = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
        'j', 'k', 'l', 'm', 'o', 'n', 'p', 'q', 'r',
        's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A',
        'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
        'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'D',
        'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '9',
        '0', '6', '5', '1', '3');
        $lettre[1] = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E',
        'I', 'O', 'U', 'Y' , '1', '3', '0' );
        $lettre[-1] = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k',
        'l', 'm', 'n', 'p', 'q', 'r', 's', 't',
        'v', 'w', 'x', 'z', 'B', 'C', 'D', 'F',
        'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P',
        'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z',
        '5', '6', '9');
        $retour = "";
        $prec = 1;
        $precprec = -1;
        srand((double)microtime()*20001107);
        while(strlen($retour) < $nb){
        // pour genere la suite de lettre, on dit : si les deux lettres sonts
        // des consonnes (resp. des voyelles) on affiche des voyelles (resp, des consonnes).
        // si les lettres sont de type differents, on affiche une lettre de l'alphabet
        $type = ($precprec + $prec)/2;
        $r = $lettre[$type][array_rand($lettre[$type], 1)];
        $retour .= $r;
        $precprec = $prec;
        $prec = in_array($r, $lettre[-1]) - in_array($r, $lettre[1]);

        }
        return $retour;

      }
?>
