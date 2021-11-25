<?php
    require('connectdb.php');
    session_start();

    if(isset($_POST['add'])){
        $item_id = $_POST['item_id'];
        $item_name = $_POST['item_name'];
        $amount = $_POST['amount'];
        $unit = $_POST['unit'];
        $arrival_date = $_POST['arrival_date'];
        $category = $_POST['category'];
        $item_status = $_POST['item_status']; 
        $price = $_POST['price'];
        
        $sqlAdd = "INSERT INTO inventory (item_id, item_name, amount, unit, arrival_date, category, item_status, price) VALUES ('$item_id', '$item_name', $amount, '$unit', '$arrival_date', '$category', '$item_status', $price)";
        $exe = $mydb->query($sqlAdd);
        if($exe){
            header("location:post_add.php?status=Success");
        }else{
            header("location:post_add.php?status=Failed");
        }
    }
?>