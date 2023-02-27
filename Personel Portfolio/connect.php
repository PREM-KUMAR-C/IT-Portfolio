<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection failed:' .$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into contact(fullname,email,subject,message) values(?, ?, ?, ?)");
                $stmt->bind_param("ssss",$fullname,$email,$subject,$message);
                $stmt->execute();
    echo "registration successfull...";
    $stmt->close();
    $conn->close();
}
?>