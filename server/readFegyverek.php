<?php 
require_once 'db.php';
if(isset($_GET['id']))
    $sql = "SELECT tipusok.id, tipusok.nev, kaliber, kategoria.nev as knev FROM `tipusok` INNER JOIN kategoria ON kategoriaID = kategoria.id; where tipusok.nev = {$_GET['id']}";
else
    $sql = "SELECT tipusok.id, tipusok.nev, kaliber, kategoria.nev as knev FROM `tipusok` INNER JOIN kategoria ON kategoriaID = kategoria.id;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>