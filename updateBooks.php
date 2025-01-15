<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_name = $_POST['books'];
    $author = $_POST['author'];
    $image_url = $_POST['image_url'];

    $conn = new mysqli("localhost", "root", "", "webtech");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE books SET author = '$author', image = '$image_url' WHERE book_name = '$book_name'";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
