<?php
include('connection.php');

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])) {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET nama='$nama', email='$email' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
