<?php
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $priority = $_POST['priority'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    //$attachments[] = $_POST['attachments[]'];

    //database connection
    $conn = new mysqli('localhost','root','','ez complaint');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into registration(subject, name, email, gender, department, priority, service, message)
            values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss",$subject, $name, $email, $gender, $department, $priority, $service, $message);
        $stmt->execute();
        echo "registration successfully.....";
        $stmt->close();
        $conn->close();
    }


?>