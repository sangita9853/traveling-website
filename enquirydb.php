<?php

$conn = mysqli_connect('localhost' ,'root');

if($conn){
        echo "Connection is successful";
}
else{
       echo "There is No connection";
}

mysqli_select_db($conn, 'travel1');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile= $_POST['mobile'];
$message= $_POST['message'];

$query = "insert into enquirydb (user, email,mobile,message)
values ('$user','$email','$mobile','$message')";

echo "$query";
mysqli_query($conn,$query);
header('location:index.php');

?>
