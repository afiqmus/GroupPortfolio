<?php
require_once("connection.php");

if (isset($_POST["btnSummary"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $text = mysqli_real_escape_string($conn, $_POST["text"]);

    $sql = "INSERT INTO summary (name, text) VALUES ('{$name}' , '{$text}')";
    
    
    
    
    if(count($errors)==0){


        
        mysqli_query($db, $query);
        $_SESSION['name'] = $name;
    
        header('location: index.php');
    
    }
    



    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('You are now logged in')</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
    }

    $conn->close();
}
?>