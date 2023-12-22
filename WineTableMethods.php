<?php
class WineTableMethods // csatlakozás az adatbázishoz, ide kell a mysqli (objektum orientált)connect!!
{
    private $connection;

    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "", "php_elso_dolgozat");
    }

    function getall() {
        $sql= "SELECT * FROM borok";
        $result= $this->connection->query($sql); //lekérés
        //var_dump($result->fetch_all(MYSQLI_ASSOC)); //beolvasás és fetch-el adatok megjelenítése = tömbön belül tömböt add vissza,
        //var_dump($result->fetch_object()); //ekkor a sorok objektulok lesznek 
        return $result->fetch_all((MYSQLI_ASSOC));
    }  
    
    function create($winedata) //új adat létrehozásához kell
    {
        $sql ="INSERT INTO borok (nev,boraszat,szollof,evjarat,ar) VALUES (?,?,?,?,?)";
        $stmt= $this->connection->prepare($sql);    
        $nev=$winedata['nev'];
        $boraszat=$winedata['boraszat'];
        $szollof=$winedata['szollof'];
        $evjarat=$winedata['evjarat'];
        $ar=$winedata['ar'];
        $stmt->bind_param("sssss", $nev, $boraszat, $szollof, $evjarat, $ar); //lokális változó létrehozása, lefutattsa köv.sor
        $stmt->execute();
    }

    function checkNevExists($nev) {
        $sql= "SELECT * FROM borok WHERE nev = ?";
        $stmt= $this->connection->prepare($sql); 
        $stmt->bind_param("s", $nev);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows ==1;
    }

    function checkBoraszatExists($boraszat) {
        $sql= "SELECT * FROM borok WHERE boraszat = ?";
        $stmt= $this->connection->prepare($sql); 
        $stmt->bind_param("s", $boraszat);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows ==1;
    }

    function checkSzollofExists($szollof) {
        $sql= "SELECT * FROM borok WHERE szollof = ?";
        $stmt= $this->connection->prepare($sql); 
        $stmt->bind_param("s", $szollof);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows ==1;
    }

    function checkEvjaratExists($evjarat) {
        $sql= "SELECT * FROM borok WHERE evjarat = ?";
        $stmt= $this->connection->prepare($sql); 
        $stmt->bind_param("s", $evjarat);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows ==1;
    }
}    
?>