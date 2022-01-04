<?php
require_once "db.php";
$nev=$_GET['nev'];
echo "Szerver oldalon megvan az adat: ".$nev;
$sql = "insert into tipusok values (null, '{$nev}', '','')";
$stmt = $db->exec($sql);
echo $stmt;
?>