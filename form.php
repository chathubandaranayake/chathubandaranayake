<?php
    $nameInput = $_POST['nameInput'];
    $emailInput = $_POST['emailInput'];
    $messageInput = $_POST['messageInput'];

    //Database connection
    $conn = new mysqli('localhost','root','','website');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into validationform(nameInput, emailInput, messageInput) values(?, ?, ?)");
        $stmt->bind_param("sss",$nameInput, $emailInput, $messageInput);
        $stmt->execute();
        echo "registration Successfully....";
        $stmt->close();
        $conn->close();
    }


?>