<!DOCTYPE html>	
<html>
<head>
	<title>Registration Form</title>


 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>


<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="userrrr.php" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." name="userf" class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." name="userl" class="form-control" required>
							</div>

							<div class="col-sm-6 form-group">
								<label>Birth Date</label>
								<input type="date" placeholder="Enter Birth Date Here.." name="birth" class="form-control" required>
							</div>

							<div class="col-sm-6 form-group">
								<label>Adhar Number</label>
								<input type="text" placeholder="Enter Your Adhar Card Number Here.." name="adharr" class="form-control" required>
							</div>


						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" name="address" class="form-control" required></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" placeholder="Enter City Name Here.." name="city" class="form-control" required>
							</div>	     
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" placeholder="Enter State Name Here.." name="state" class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Pin code</label>
								<input type="text" placeholder="Enter Pin Code Here.." name="pincode" class="form-control" required>
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Last School Name</label>
								<input type="text" placeholder="Enter School Name Here.." name="lsn" class="form-control" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Religion</label>
								<input type="text" placeholder="Enter Religion Name Here.." name="religion" class="form-control" required>
							</div>	
						</div>	
						
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Phone Number</label>
								<input type="text" placeholder="Enter Phone Number Here.." name="phonenumber" class="form-control" required>
							</div>		
							<div class="col-sm-6 form-group">
								<label>Last Year Percentage</label>
								<input type="text" placeholder="Enter Your percenttage Here.." name="percentages" class="form-control" required>
							</div>	
						</div>


							
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" placeholder="Enter Email Address Here.." name="email" class="form-control" required>
					</div>	
					<div class="form-group">
						<label>Family Annual Income </label>
						<input type="text" placeholder="Enter Family Annual Income Here..." name="income" class="form-control" required>
					</div>

					   <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" required>
                                    I accept the <a href="term.html">terms and conditions</a>.
                                </label>
                            </div>
                        </div>
                    </div>
                   
					<button type="Submit" value="Submit" class="btn btn-lg btn-info">Submit</button>	
					<button type="Reset" value="Reset" class="btn btn-lg btn-info">Reset</button>
					<button type="Next" value="Next" class="btn btn-lg active"><a href="file/filee.php">Next</a></button>				
				</div>	
				</form> 
				</div>
	</div>
	</div>

</body>
</html>