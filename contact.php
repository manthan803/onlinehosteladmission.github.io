<?php

$server='localhost';
$user='root';
$password='';
$dba='contact';

$conn = mysqli_connect($server,$user,$password,$dba);

   



if(isset($_POST['submit'])){
    $name=$_POST['uname'];
    $email=$_POST['e-mail'];
    $umassage=$_POST['massage'];

    $insertquery= "insert into contact_data(name,email,massage) VALUES ('$name','$email','$umassage')";

    $res = mysqli_query($conn,$insertquery);

    if($res){
        ?>
        <script> 
            alert('your comment send successfully');
        </script>
        <?php
    }else{
        ?>
        <script> 
            alert('data dose not insert properly');
        </script>
        <?php
    }
}



?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" rel='text/css' href="contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body >
    <div class="container">
        <header>
            <h1>Contact Us</h1>
            <p>Hostel is a form of low-cost, short-term shared sociable lodging where guests can rent a bed,
		       usually a bunk bed in a dormitory, with shared use of a lounge and sometimes a kitchen.and have private
               or shared bathrooms. Private rooms may also be available,but the property must offer dormitories to be 
               considered a hostel.</p>
        </header>
        <div class="content">
            <div class="content-form">
                <section>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <h2>address</h2>
                    <p>
                        467,sagar camp road,<br>
                        owatonna,minnesota<br>
                        55060
                    </p>
                </section>

                <section>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2>Phone Number</h2>
                    <p>+91 012-325-2589</p>
                </section>

                <section>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2>E-mail</h2>
                    <p>dghdgqd@gmail.com</p>
                </section>
            </div>
        </div>

      <form action="contact.php" method="POST">
        <div class="form">
            <div class="right">
              <div class="contact-form">
                  <input type="text" name='uname' required>
                  <span>Full Name</span>
              </div>
  
              <div class="contact-form">
                  <input type="E-mail" name='e-mail' required>
                  <span>E-mail Id</span>
              </div>
              <div class="contact-form">
                  <textarea type="text" name="massage">
                    
                  </textarea>
                  <span> Type your Message....</span>
              </div>
  
              <div class="contact-form">
                  <input type="submit" name="submit">
              </div>
              </div>
            </div>
          </div>
    </form>
        
    </div>    
</body>
</html>