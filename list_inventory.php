<?php
    require('connectdb.php');
    session_start();
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
    <title>123200130 - Maulana Daffa Ardiansyah</title>
</head>
<body>

    <!-- Navbar -->
    <div class="fixed-top" style="background-color: lightsteelblue; text-shadow: 2px 2px 3px white">
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
    <div style="padding-top:20px; margin-bottom:100px; margin-top:160px">
    <a href="form_add.php">
        <button style="background-color:lightblue; margin-left:40px">+Add</button>
    </a>
        <table border=1 align="center">
            <thead style="text-align:center; background-color:lightblue" >
                <th width="30px">No</th>
                <th width="60px">Code</th>
                <th width="180px">Name of goods</th>
                <th width="40px">Amount</th>
                <th width="40px">Unit</th>
                <th width="110px">Coming Date</th>
                <th width="80px">Category</th>
                <th width="80px">Status</th>
                <th width="150px">Unit Price</th>
                <th width="150px">Total Price</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
                <?php
                $sqlList = "SELECT * FROM inventory";
                $invent = $mydb->query($sqlList);
                $x=1;
                $total = 0;
                while($row = $invent->fetch_object()){
                    $price_format = number_format($row->price, 2, ".", ",");
                    $total_price = $row->price * $row->amount;
                    $total_format = number_format($total_price, 2, ".", ",");
                    $total = $total+$total_price;
                ?>
                    <tr>
                        <td><?= $x ?></td>
                        <td><?= $row->item_id ?></td>
                        <td><?= $row->item_name ?></td>
                        <td><?= $row->amount ?></td>
                        <td><?= $row->unit ?></td>
                        <td><?= $row->arrival_date ?></td>
                        <td><?= $row->category ?></td>
                        <td><?= $row->item_status ?></td>
                        <td>Rp<?= $price_format ?></td>
                        <td>Rp<?= $total_format ?></td>
                        <td>
                            <a href="form_edit.php?id=<?= $row->item_id ?>">
                                <button class="btn btn-secondary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <a href="form_delete.php?id=<?= $row->item_id ?>">
                                <button class="btn btn-success">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php
                $x++;
                }
                ?>
            </tbody>
        </table>
        <center><p>Total Inventory = Rp. <?= number_format($total, 2, ".", ",") ?></p></center>
    </div>
    
    
    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 ps-4 border-top shadow-sm fixed-bottom"
        style="background-color:lightblue;">
        <div class="d-flex align-items-center">
            <span>Inventory Web 2021</span>
        </div>
    </footer>
    
</body>
</html>