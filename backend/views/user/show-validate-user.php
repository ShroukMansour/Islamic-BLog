
<div class="row">






</div>
<h3>Please enter your password</h3><br><br>

<div class="row">
<form action="index.php?r=user/validate-user&value=<?php echo $value; ?>" method="POST">
		<div class="col-md-3">
			Your Email is
		</div>
		<div class="col-md-4">
		 	<div class="form-group">
		 		<input type="text" name="email" id="" value="<?php echo $user['email'] ;?>" class="form-control" readonly	>
		 	</div>
	 	</div>
 	</div>
 	<div class="row">
 			<div class="col-md-3">
				Enter the Password
			</div>
			<div class="col-md-4">
	 			<div class="form-group">
	 				<input type="text" name="password" id="" class="form-control">
	 			</div>
 			</div>
 	</div>
 	<input type="submit" value="Send" class="btn btn-primary">
</form>
</div>