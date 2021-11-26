<?php
    require('connectdb.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Page</title>
</head>

<body>
    <!-- Navbar -->
    <div style="background-color: lightblue; text-shadow: 2px 2px 3px white">
        <center>
            <h1>LIST OF INVENTORY <br>EVERYTHING OFFICE</h1>
        </center>
    </div>

    <!-- Content -->
    <div class="container p-5 d-flex justify-content-center">
        <div class="box p-5 pb-4" style="background-color: #e0cbaf; min-width: min-content; min-height: min-content; border-radius: 5%">
            <div class="boxContent">
                <h1 class="text-center" style="text-shadow: 2px 2px 3px white; font-size: 50px;">Login</h1>
                <form action="" method="POST">
                    <div class="input pt-3" style="font-size: 20px;"> 
                        <label for="username">Username</label><br>
                        <input type="text" name="username" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;"><br>
                        <label for="password">Password</label><br>
                        <input type="password" name="password" class="mb-3 mt-1 p-2 rounded shadow-sm" style="width: 430px; border: none;"><br>
                    </div>
                    <div class="d-flex justify-content-center pt-3">
                        <!-- <input type="submit" name="back" value="Back" class="btn btn-danger shadow-sm text-light fs-5 px-4 mx-2" style="min-width: min-content;">                             -->
                        <input type="submit" name="login" value="Login" class="btn btn-primary shadow-sm text-light fs-5 px-4" style="min-width: min-content;">         
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 ps-4 border-top shadow-sm"
        style="background-color:lightblue;">
        <div class="d-flex align-items-center">
            <span>Inventory Web 2021</span>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sqlName = "SELECT * FROM staff WHERE username='$user' AND password='$pass'";
        $name = $mydb->query($sqlName);
        while($row = $name->fetch_object()){
            $full_name = $row->full_name;
            // echo $full_name;
        }

        $sql=mysqli_query($mydb, "Select * from staff where username='$user' and password='$pass'");
        $check = mysqli_num_rows($sql);
        // $check = 1;
        

        if($check>0){
            session_start();
            $_SESSION['username']=$user;
            $_SESSION['password']=$pass;
            $_SESSION['full_name']=$full_name;
            header("location:home.php");
        }
        else{
            header("location:login_failed.php");
        }
    }
?>