<?php 
require_once 'db.php';
if(isset($_GET['id']))
    $sql = "SELECT tipusok.id, tipusok.nev, kaliber, kategoriak.nev as knev FROM `tipusok` INNER JOIN kategoriak ON kategoriaID = kategoriak.id; where tipusok.nev = {$_GET['id']}";
else
    $sql = "SELECT tipusok.id, tipusok.nev, kaliber, kategoriak.nev as knev FROM `tipusok` INNER JOIN kategoriak ON kategoriaID = kategoriak.id;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>