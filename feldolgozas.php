
<?php 
session_start();
if($_SERVER["REQUEST_METHOD"] != "POST")
{
    http_response_code(405);
    die();
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feldolgozás</title>
</head>
<body>
    <nav>
        <a href="index.php">Listázás</a>
        <a href="felvetel.php">Felvétel</a>
    </nav>
        <?php 
            $errors= [];
            if(!isset($_POST["nev"])|| empty($_POST["nev"]))
            {
                $errors[] = "Bor nevének megadása kötelező!";
            }

            if (!isset($_POST["boraszat"])|| empty($_POST["boraszat"]))
            {
                $errors[] = "Boraszat megadása kötelező!";
            }

            if (!isset($_POST["szollof"])|| empty($_POST["szollof"]))
            {
                $errors[] = "A szőllő fajtájának megadása kötelező!";
            }

            if (!isset($_POST["evjarat"])|| empty($_POST["evjarat"]))
            {
                $errors[] = "Bor évjáratának megadása kötelező!";
            }

            if (!isset($_POST["ar"])|| empty($_POST["ar"]))
            {
                $errors[] = "Bor árának megadása kötelező!";
            }
            // minden mező ki van-e töltve,
            if(empty($errors)) //ha üres az errors tömb, akkor hajtsa végre a regisztrációt,de ezt a Methods-ből akarom létrehozni
            {
                require_once "WineTableMethods.php"; // importálom
                $database= new  WineTableMethods();
                if (($database->checkNevExists($_POST['nev']))&&($database->checkBoraszatExists($_POST['boraszat']))&&($database->checkSzollofExists($_POST['szollof']))&&($database->checkEvjaratExists($_POST['evjarat']))){
                    $errors[] = "A megadott adatokkal a bor már szerepel a rendszerben!";
                }
                if (empty($errors)){
                    $database->create($_POST); 
                }            
            }

            if (empty($errors)){
                $_SESSION['state']= "success";
                $_SESSION['message']= "Sikeres adatfelvétel!";
                
            }else{
                $_SESSION['state']= "failed";
                $_SESSION['message']= "Hiba történt az adatfelvétel során!";
                $_SESSION['errors']= $errors;   
            }
            header("Location: felvetel.php");
            
        ?>
</body>
</html>