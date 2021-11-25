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
        </nav>
    </div>

    <!-- Content -->
    <div style="padding-top:20px">
        <form action="process_add.php" method="POST">
            <table align="center" border="1">
                <thead style="text-align:center; background-color:lightblue" >
                    <th colspan="2">Add Inventory Data</th>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td width="200px">a</td>
                        <td width="400px">c</td>
                    </tr> -->
                    <tr>
                        <td width="200px">Item code</td>
                        <td width="280px"><input type="text" name="item_id" placeholder="Item code"></td>
                    </tr>
                    <tr>
                        <td width="200px">Name of goods</td>
                        <td><input type="text" name="item_name" placeholder="Name of goods" width="300px"></td>
                    </tr>
                    <tr>
                        <td width="200px">Amount</td>
                        <td><input type="text" name="amount" placeholder="Amount"></td>
                    </tr>
                    <tr>
                        <td width="200px">Unit</td>
                        <td><input type="text" name="unit" placeholder="Unit"></td>
                    </tr>
                    <tr>
                        <td width="200px">Coming Date</td>
                        <td><input type="date" name="arrival_date"></td>
                    </tr>
                    <tr>
                        <td width="200px">Category</td>
                        <td>
                            <select name="category">
                                <option value="Buildings">Buildings</option>
                                <option value="Vehicles">Vehicles</option>
                                <option value="Office Stationery">Office Stationery</option>
                                <option value="Electronic">Electronic</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="200px">Status</td>
                        <td>
                            <label>
                                <input type="radio" name="item_status" value="Well">
                                Well
                            </label>
                            <label>
                                <input type="radio" name="item_status" value="Maintenance">
                                Maintenance
                            </label>
                            <label>
                                <input type="radio" name="item_status" value="Damaged">
                                Damaged
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td width="200px">Unit Price</td>
                        <td><input type="text" name="price" placeholder="Unit price"></td>
                    </tr>
                </tbody>
            </table>
            <div colspan="2" class="d-flex justify-content-center pt-2">
                <input type="submit" name="add" value="Submit"  style="background-color:blue; color:white">
            </div>
        </form>
        
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