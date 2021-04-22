<?php 

$con = mysqli_connect('localhost','root');

if($con)
    {
    	echo "Connection Successful";

    }

    else
    {
    	echo "Connection Unsuccessful";
    }


mysqli_select_db($con,'hosteluserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userdata (user, email, mobile, comment) values ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

header('location:indexm.php');


 ?>