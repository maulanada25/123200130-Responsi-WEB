<?php
    require('connectdb.php');
    session_start();

    $id = $_GET['id'];
    $sql = "SELECT * FROM inventory WHERE item_id='$id'";
    $select = $mydb->query($sql);

    while($row = $select->fetch_object()){
        $item_name = $row->item_name;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
    <div style="background-color: lightsteelblue; text-shadow: 2px 2px 3px white">
        <center>
            <h1 style="background-color: lightblue">LIST OF INVENTORY <br>EVERYTHING OFFICE</h1>
        </center>
        <nav class="navbar navbar-expand-lg navbar-light bg-">
            <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                <li class="nav-item">
                    <a class="nav-link" href="list_inventory.php">List Inventory</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    List Per-Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="list_buildings.php">Buildings</a></li>
                    <li><a class="dropdown-item" href="list_vehicles.php">Vehicles</a></li>
                    <li><a class="dropdown-item" href="list_office.php">Office Inventory</a></li>
                    <li><a class="dropdown-item" href="list_electronic.php">Electronic</a></li>
                </ul>
                </li>
            </ul>
            </div>
            </div>
            <a href="process_logout.php">
                <button style="background-color:red; color:white; margin-right:40px">Logout</button>
            </a>
        </nav>
        
    </div>

    <!-- Content -->
    <h1>Are You Sure Want To Remove The <h1 style="color:blue"><?= $item_name ?></h1></h1>
    <form action="process_delete.php" method="POST">
        <input type="hidden" name="item_name" value=<?= $item_name ?>>
        <input type="submit" name="delete" value="YES">
    </form>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 ps-4 border-top shadow-sm fixed-bottom"
        style="background-color:lightblue;">
        <div class="d-flex align-items-center">
            <span>Inventory Web 2021</span>
        </div>
    </footer>
</body>
</html>