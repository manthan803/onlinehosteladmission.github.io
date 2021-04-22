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


mysqli_select_db($con,'registerationdata');


// $id = $_POST['id'];
$userf = $_POST['userf'];
$userl = $_POST['userl'];
$birth = $_POST['birth'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$lsn = $_POST['lsn'];
$religion = $_POST['religion'];
$adhar = $_POST['adharr'];
$percentage = $_POST['percentages'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$income = $_POST['income'];





$query ="insert into userrdata (userf, userl, birth, address, city, state, pincode, lsn, religion, phonenumber, email, income, adhar, percentage) values 
('$userf','$userl','$birth','$address','$city','$state','$pincode','$lsn','$religion','$phonenumber','$email','$income','$adhar','$percentage')";

mysqli_query($con,$query);

header('location:registrationm.php');
?>
