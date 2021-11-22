<?php
include 'db/db.php';

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = $_POST["password"];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $no_tlp = filter_input(INPUT_POST, 'no_tlp', FILTER_SANITIZE_STRING);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);


    $sql = "INSERT INTO tb_user (username, password, email, no_tlp, role)
    VALUES ('".$username."', '".$password."', '".$email."', '".$no_tlp."', '".$role."')";

    if ($conn->query($sql) === TRUE) {
        header("location:index.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

   
    // if($saved) header("Location: index.php");
}

?>
