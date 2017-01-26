<h1>Importer des utilisateurs d'une version concrete6.5</h1>
<?php
// if bug on user after import and impossible to delete it within c5
//$user = \UserInfo::getByID(14);
//$user->delete();

require_once("../config.inc.php");
$db=mysql_connect($zedbHostname,$login,$pass) or  die("Unable  to  select  database");
//mysql_select_db($database_name,$db);
mysql_select_db($database_nameC5,$db);

//first, create passwords
//echo "<pre>   " .$pass ."</pre>"; exit;

$sql="SELECT * FROM `importc56users` WHERE `pwd` = ''";
$result = mysql_query($sql);
if(!$result){
  echo "error sql query importc56: " .mysql_error();
}
$i=0;
while ($i < mysql_num_rows($result)) {
  $username= mysql_result($result, $i, 'Nom_d_utilisateur');
  $pass=passe_mnemo();

$check="UPDATE importc56users SET pwd='$pass' WHERE Nom_d_utilisateur LIKE '".$username ."'";
$check = mysql_query($check);
if(!$check){
  echo "<br>error sql query importc56: " .mysql_error();
}
$i++;
}


$sql="SELECT * FROM `importc56users`";
$result = mysql_query($sql);
if(!$result){
  echo "error sql query importc56: " .mysql_error();
}
echo "<p>Remaining to import: #" .mysql_num_rows($result) ."</p>";
//then insert users
$sql="SELECT * FROM `importc56users` LIMIT 0,49"; //50 at the times otherwise increase time limit
$result = mysql_query($sql);
if(!$result){
  echo "error sql query importc56: " .mysql_error();
}
$i=0;
while ($i < mysql_num_rows($result)) {
  $id= mysql_result($result, $i, 'id');
  $username= mysql_result($result, $i, 'Nom_d_utilisateur');
  $email= mysql_result($result, $i, 'Adresse_electronique');
  $pass= mysql_result($result, $i, 'pwd');
  $nom=mysql_result($result, $i, 'Nom');
  $prenom=mysql_result($result, $i, 'Prenom');
  $Telephone= mysql_result($result, $i, 'Telephone');
  $Taille_de_la_part= mysql_result($result, $i, 'Taille_de_la_part');
  $Numero_du_point_de_distribution= mysql_result($result, $i, 'Numero_du_point_de_distribution');
  $Adresse= mysql_result($result, $i, 'Adresse');
  $Code_postal= mysql_result($result, $i, 'Code_postal');
  $Ville_ou_commune= mysql_result($result, $i, 'Ville_ou_commune');
  $Pays= mysql_result($result, $i, 'Pays');
  $Natel= mysql_result($result, $i, 'Natel');
  $Responsable_PDD= mysql_result($result, $i, 'Responsable_PDD');
  $Date_entree= mysql_result($result, $i, 'Date_entree');
  $No_identifiant_dolibarr= mysql_result($result, $i, 'No_identifiant_dolibarr');
  echo $username;
  echo "<br/>";
//check if users exist
$check="SELECT * FROM Users WHERE uName LIKE '".$username ."'";
$check = mysql_query($check);
if(!$check){
  echo "error sql query importc56: " .mysql_error();
}
if(mysql_num_rows($check)>0){
  echo "<em>&nbsp;&nbsp;user: " .$username ." already registred</em><br>";

  $kill="DELETE FROM importc56users WHERE id = " .$id ;
  echo "<pre>$kill</pre>";
  $kill = mysql_query($kill);
  if(!$kill){
    echo "error sql query importc56: " .mysql_error();
  } else {
    echo "User " .$username ." deleted from import database<br>";
  }

} else {
  echo "<p>create user: " .$username ."</p>";

  $user = \UserInfo::add(['uName' => $username, 'uEmail' => $email, 'uPassword' => $pass]);
  $user = \UserInfo::getByEmail($email);
  $user->setAttribute('nom', $nom);
  $user->setAttribute('prenom', $prenom);
  $user->setAttribute('tel', $Telephone);
  $user->setAttribute('adresse', $Adresse);
  $user->setAttribute('cp', $Code_postal);
  $user->setAttribute('ville', $Ville_ou_commune);
  $user->setAttribute('pays', $Pays);
  $user->setAttribute('natel', $Natel);
  $user->setAttribute('date_entree', $Date_entree);
  $user->setAttribute('dolibarr_uid', $No_identifiant_dolibarr);

  $kill="DELETE FROM importc56users WHERE id = " .$id ;

$kill = mysql_query($kill);
if(!$kill){
  echo "error sql query importc56: " .mysql_error();
} else {
  echo "User " .$username ." deleted from import database<hr>";
}

}
echo "#" .$count;

$i++;
}


 ?>
