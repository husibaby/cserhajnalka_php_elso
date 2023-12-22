<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Listázás</title> 
</head>
<body>
  <div class="container">
        <?php
        require_once "WineTableMethods.php";
        $database = new WineTableMethods();
        $wine= $database->getAll();
        ?>
        <nav>
            <a href="index.php">Listázás</a>
            <a href="felvetel.php">Felvétel</a>
        </nav>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>#</th>
                <th>Név</th>
                <th>Borászat</th>
                <th>Szőllőfajta</th>
                <th>Évjárat</th>
                <th>Ár</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($wine as $wine): ?>
                    <tr>
                        <td><?php echo $wine['id'] ?></td>
                        <td><?php echo $wine['nev'] ?></td>
                        <td><?php echo $wine['boraszat'] ?></td>
                        <td><?php echo $wine['szollof'] ?></td>
                        <td><?php echo $wine['evjarat'] ?></td>
                        <td><?php echo $wine['ar'] ?></td>
                    </tr>
                <?php endforeach; ?>  
            </tbody>
        </table>
    </div>    
</body>
</html>