<?php

$nom = htmlspecialchars($_POST['chpNom']);
$prenom = htmlspecialchars($_POST['chpPrenom']);
$email = htmlspecialchars($_POST['chpEmail']);

$listIdent = file_get_contents("ident.json");
$listArray = json_decode($listIdent,true);

echo "<pre>" . var_export($listArray) . "</pre>";
echo "<h1>" . count($listArray['liste']) . "</h1>";

echo "<ul><li>" . $nom . "<li>" . $prenom . "<li>" . $email . "</ul>";

array_push ($listArray['liste'], array('nom'=>$nom,'prenom'=>$prenom,'email'=>$email));

$newListArray = json_encode($listArray);
file_put_contents("ident.json", $newListArray);

?>