<?php
include 'db/db.php';
session_start();
if(isset($_POST['message'])){

    // filter data yang diinputkan
    $userguest= $_POST["userguest"];
    $emailguest= $_POST["emailguest"];
    $phoneguest= $_POST["phoneguest"];
    $message= $_POST["message"];
    $answere= $_POST["answere"];
    $tanggal = date("Y-m-d H:i:s");

    $sql = "INSERT INTO tb_question (userguest, emailguest, phoneguest, message, answere, tanggal)
    VALUES ('".$userguest."','".$emailguest."','".$phoneguest."','".$message."','".$answere."','".$tanggal."')";

    if ($conn->query($sql) === TRUE) {
        header("location:info.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

   
    // if($saved) header("Location: index.php");
}

?>
