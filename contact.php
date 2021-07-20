<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //database connection
    $conn = new mysqli('localhost','root','','contact us');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into contact(name, email, message)
            values(?,?,?)");
        $stmt->bind_param("sss",$name, $email, $message);
        $stmt->execute();
        echo "registration successfully.....";
        $stmt->close();
        $conn->close();
    }


?>