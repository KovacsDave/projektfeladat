<?php 
$id = $_GET["id"];
require_once 'db.php';
$sql = "SELECT tipusok.id as tid, tipusok.nev as tnev, kaliber as cal, kategoriak.id as kid, kategoriak.nev as nev  FROM `tipusok` INNER JOIN kategoriak on kategoriaID = kategoriak.id WHERE kategoriak.id = {$id} order by tipusok.id;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>