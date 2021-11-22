<?php
include 'db/db.php';
session_start();
if(isset($_POST['confirm'])){

    // filter data yang diinputkan
    $id_product= $_POST["id_product"];
    $picture= $_POST["picture"];

    $sql = "INSERT INTO tb_booking (product, user, status, picture)
    VALUES ('".$id_product."', '".$_SESSION['id_user']."','Dont Pay Yet','".$picture."')";

    if ($conn->query($sql) === TRUE) {
        header("location:purchase.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

   
    // if($saved) header("Location: index.php");
}

?>
