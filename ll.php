<?php
include('connexion.php');

$stmt = $conn->prepare("INSERT INTO local VALUES (NULL,:NomLocal, :typeLocal, :Effectif, :Etage)");
$stmt->bindParam(':NomLocal', $name);
$stmt->bindParam(':typeLocal', $value);
$stmt->bindParam(':Effectif', $eff);
$stmt->bindParam(':Etage', $type);

// insertion d'une ligne
$name = 'one';
$value = 'TP';
$eff = '150';
$type = '1ere etage';
$stmt->execute();





?>