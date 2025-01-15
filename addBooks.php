<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_name = $_POST['book_name'];
    $author = $_POST['author'];
    $image_url = $_POST['image_url'];

    $conn = new mysqli("localhost", "root", "", "webtech");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO books (book_name, author, image) VALUES ('$book_name', '$author', '$image_url')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
