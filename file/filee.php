<?php include 'filesLogic.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="stylef.css">
    <title>Files Upload and Download</title>
    <style>
      
      form{
        background-color:#F0B27A;
      }
    </style>
  </head>
  <body>

  <h2><b> Upload your photo and sign for indentify your proof.</b></h2><hr><br>
  <h3>Upload Documents :-</h3><br>
  

    <div class="container">
      <div class="row">
        <form action="filee.php" method="post" enctype="multipart/form-data" >
          
        
          <label for="photo"><b>marge your sign and photo :  </label>
          <hr>
          <input type="file" name="myfile" id="photo" required> <br>


          <button type="submit" name="save">upload</button>
          
        </form>
        
      </div>
    </div>
    <hr>

    <p><b> You can only upload zip, pdf, or doc file only.</b></p>
  </body>
</html>