
<?php include('includes/header.inc.php');?>
    <div class="container">
    	<div class="row top">
    		<div class="shadow p-3 mb-5 bg-white rounded col-md-6">
    			<form action="includes/code.inc.php" method="POST">
    				<img src="images/logo.png" class="img-fluid logo center">
    				<div class="form-group">
    					<input type="text" name="first_name" placeholder="First Name" class="form-control" value="" required>
    					<input type="text" name="last_name" placeholder="Last Name" class="form-control" value="">
                        <input type="text" name="user_name" placeholder="Username" class="form-control" value="">
    					<input type="text" name="email" placeholder="Email" class="form-control" value="">
    					<input type="password" name="password" placeholder="Enter Password" class="form-control" value="">
    					<input type="password" name="password2" placeholder="Confirm Password" class="form-control" value="">
    				</div>
    				<input type="submit" name="submit" value="SUBMIT" class="btn btn-danger btn-sm create">
    			</form>
    		</div>
    	</div>
    </div>
<?php include('includes/footer.inc.php');?>