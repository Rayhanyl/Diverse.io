<?php
include 'db/db.php';

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $name_user = filter_input(INPUT_POST, 'name_user', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = $_POST["password"];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);


    $sql = "INSERT INTO tb_user (username, password, name_user, email, phone, address ,role)
    VALUES ('".$username."', '".$password."', '".$name_user."', '".$email."', '".$phone."', '".$address."', '".$role."')";

    if ($conn->query($sql) === TRUE) {
        header("location:index.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

   
    // if($saved) header("Location: index.php");
}

?>
