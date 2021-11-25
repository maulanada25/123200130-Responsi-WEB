<?php
    require('connectdb.php');
    session_start();

    if(isset($_POST['delete'])){
        $item_name = $_POST['item_name'];

        $sql = "DELETE FROM inventory WHERE item_name='$item_name'";
        $mydb->query($sql);

        header("location:list_inventory.php");
    }
?>