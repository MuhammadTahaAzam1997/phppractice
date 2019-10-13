<?php

$servername ='localhost';
$username='root';
$password=""; // password should be blank while root as username

$database="practicephpdb";
//creating db connection

$conn = mysqli_connect($servername,$username,$password,$database);

// check connection

if(!$conn){
    die("Failed to connect" .mysqli_connect_error() );

}
else{
    echo "connection succesfull!!!";
}


$sql= " INSERT INTO `users` (`sno`, `name`, `age`, `salary`) VALUES ('3', 'Muhammad Taha azam', '23', '750000')";

if(mysqli_query($conn,$sql)){
    echo "success";
}

else{
    echo "error".mysqli_error($conn);

}

mysqli_close($conn);
?>