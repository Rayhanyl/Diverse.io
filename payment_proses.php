<?php
include 'db/db.php';
session_start();
if(isset($_POST['confirm'])){

    // filter data yang diinputkan
    $id_product= $_POST["id_product"];
    $pay_picture= $_POST["pay_picture"];
    $pay_address= $_POST["pay_address"];
    $pay_option= $_POST["pay_option"];

    $sql = "INSERT INTO tb_payment (product, user, pay_status, pay_address, pay_option, pay_picture)
    VALUES ('".$id_product."','".$_SESSION['id_user']."','Dont Pay Yet','".$pay_address."','".$pay_option."','".$pay_picture."')";

    if ($conn->query($sql) === TRUE) {
        header("location:purchase.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

   
    // if($saved) header("Location: index.php");
}

?>
