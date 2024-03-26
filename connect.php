<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $Contact=$_POST['contact_number'];
    $Email=$_POST['email'];
    $Address=$_POST['address'];

    $con = new mysqli('localhost', 'root', '', 'form2');
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO data (contact, email, address) VALUES ('$Contact', '$Email', '$Address')";

    if ($con->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

    $con->close();


?>
