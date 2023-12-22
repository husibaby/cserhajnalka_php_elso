<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felvétel</title>
</head>
<body>
    <nav>
        <a href="index.php">Listázás</a>
        <a href="felvetel.php">Felvétel</a>
    </nav>
    <?php
    if(isset($_SESSION['state'])){
        echo"<p>".$_SESSION['message']."</p>";
        switch ($_SESSION['state']){
            case 'success':
                break;
            case 'error':
                foreach ($_SESSION['errors']as$error){
                    echo "<p>$error</p>";
                    }
                break;      
        }
        }
    ?>
    <div class="container">
        <form action="feldolgozas.php" method="POST">
                <div class="mb-3">
                    <label for="nev" class="form-label">Bor neve</label>
                    <input type="text" name="nev" id="nev" class="form-control" required>
                </div><br>
                <div class="mb-3">
                    <label for="boraszat" class="form-label">Borászat</label>
                    <input type="text" name="boraszat" id="boraszat" class="form-control" required>
                </div><br>
                <div class="mb-3">
                    <label for="szollof" class="form-label">Szőllő fajta</label>
                    <input type="text" name="szollof" id="szollof" class="form-control" required>
                </div><br>
                <div class="mb-3">
                    <label for="evjarat" class="form-label">Évjárat</label>
                    <input type="number" name="evjarat" id="evjarat" class="form-control" required>
                </div><br>
                <div class="mb-3">
                    <label for="ar" class="form-label">Ár</label>
                    <input type="number" name="ar" id="ar" class="form-control" required>
                </div><br>
                <button type="submit" class="btn btn-outline-success">Elküld</button>
        </form>
    </div>
</body>
</html>