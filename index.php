<?php
/*Exercice _1.
//function getcwd();retourne le dossier courant 
$url = getcwd(); 
var_dump($url) ;
//scandir — Liste les fichiers et dossiers dans un dossier
$content=scandir($url);
var_dump($content);
foreach($content as $item ){
  var_dump($item);
  }
*/



/*Exercice 2
//repertoire actuel
//is_dir — Indique si le fichier est un dossier

$home="home";
if( !is_dir($home)){
mkdir('home');
}
//chdir — Change de dossier
//chdir() change le dossier courant de PHP en directory.
chdir(getcwd() . DIRECTORY_SEPARATOR . $home);
$url = getcwd();
$content=scandir($url);
// print_r($content)
foreach($content as $item) {
echo $item."<br />";
}*/



/*Exercice 3
$url = getcwd();
$content=scandir($url);
$display_files = [];
foreach($content as $item){
if($item !== "." && $item !== ".."){
echo $item."<br />";
}}*/
//'REQUEST_URI'
//L'URI qui a été fourni pour accéder à cette page. Par exemple : '/index.html'.
//$_SERVER est un tableau contenant des informations comme les en-têtes, dossiers et chemins du script. Les entrées de ce tableau sont créées par le serveur web.
//explode — Scinde une chaîne de caractères en segments
//explode() retourne un tableau de chaînes de caractères, chacune d'elle étant une sous-chaîne du paramètre
$url = getcwd();
$content=scandir($url);
$crumbs = explode('/',$content);
var_dump($crumbs);
foreach($crumbs as $crumb){
    echo ucfirst(str_replace(array(".php","_"),array(""," "),$crumb) . ' ');
}

?>