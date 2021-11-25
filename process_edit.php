<?php
    require('connectdb.php');
    session_start();

    if(isset($_POST['save'])){
        $oldCode = $_POST['oldCode'];
        $item_id = $_POST['item_id'];
        $item_name = $_POST['item_name'];
        $amount = $_POST['amount'];
        $unit = $_POST['unit'];
        $arrival_date = $_POST['arrival_date'];
        $category = $_POST['category'];
        $item_status = $_POST['item_status']; 
        $price = $_POST['price'];
        
        $sqlEdit = "UPDATE inventory SET item_id='$item_id', item_name='$item_name', amount=$amount, unit='$unit', arrival_date='$arrival_date', category='$category', item_status='$item_status', price=$price WHERE item_id='$oldCode'";
        $exe = $mydb->query($sqlEdit);
        if($exe){
            header("location:post_edit.php?status=Success");
        }else{
            header("location:post_edit.php?status=Failed");
        }
    }
?>