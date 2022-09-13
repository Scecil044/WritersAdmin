

<?php include('includes/header.inc.php');?>
    <div class="container">
    	<div class="row top">
    		<div class="shadow p-3 mb-5 bg-white rounded col-md-6">
    			<form action="includes/login.inc.php" method="POST">
    				<img src="images/logo.png" class="img-fluid logo center">
    				<div class="form-group">
    					<input type="text" name="name" placeholder="Username/Email" class="form-control" value="" required>
    					<input type="text" name="password" placeholder="Enter Password" class="form-control" value="" required>
    				</div>
    				<input type="submit" name="submit" value="LOGIN" class="btn btn-danger btn-sm create">
    			</form>
    		</div>
    	</div>
    </div>

<?php include('includes/footer.inc.php');?>