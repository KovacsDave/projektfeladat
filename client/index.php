<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tűzfegyver enciklopédia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Főoldal</a></li>
                <li class="nav-item"><a href="index.php?program=kategoriak.php" class="nav-link">Kategóriák</a></li>
                <li class="nav-item"><a href="index.php?program=tipusok.php" class="nav-link">Típusok</a></li>
                <li class="nav-item"><a href="index.php?program=kattip.php" class="nav-link">Kategóriákon belüli fegyvertípusok</a></li>
                <li class="nav-item"><a href="index.php?program=torles.php" class="nav-link">Fegyver törlése</a></li>
                <li class="nav-item"><a href="index.php?program=modositas.php" class="nav-link">Kaliber módosítása</a></li>
                <li class="nav-item"><a href="index.php?program=ujfegyver.php" class="nav-link">Új fegyver felvétele</a></li>

            </ul>
        </nav>
    </div>

    <div class="container">
        <?php 
            if(isset($_GET["program"]))
                include $_GET["program"];
            else
                include "fooldal.php";    
        
        ?>
    </div>
</body>
</html>