<?php
require_once 'connection.php';
if (isset($_POST["secret"]) && isset($_POST["username"])) {
    $secret = $_POST["secret"];
    $username = $_POST["username"];

    $sql = "INSERT INTO secrets (secret, username, creation_date) VALUES ('$secret', '$username', CURRENT_TIMESTAMP)";

    if ($conn->query($sql) === TRUE) {
        echo "New record added.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();