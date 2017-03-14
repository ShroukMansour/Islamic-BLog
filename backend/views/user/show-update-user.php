<div class="panel panel-default container col-md-offset-3 col-md-8">
<div class="panel-body">

<form method="post" action="index.php?r=user/update-user&id=<?= $user['id']; ?>">



	<div class="row">
		<div class="col-md-4">
			name
		</div>
		<div class="col-md-6">
		 	<div class="form-group">
		 		<input type="text" name="name" id="" class="form-control" value="<?php echo $user['name'];?>">
		 	</div>
	 	</div>
 	</div>
 	<div class="row">
 			<div class="col-md-4">
				email
			</div>
			<div class="col-md-6">
	 			<div class="form-group">
		 			<input type="text" name="email" id="" class="form-control" value="<?php echo $user['email'];?>">
		 		</div>
 			</div>
 	</div>
 	<div class="row">
 			<div class="col-md-4">
				password
			</div>
			<div class="col-md-6">
	 			<div class="form-group">
		 			
		 			<input type="password" name="password" id="" class="form-control" value="<?php echo $user['password'];?>">
		 		</div>
 			</div>
 	</div>

 	<input type="submit" value="Update" class="btn btn-info	" />
 	<!-- <span class="glyphicon glyphicon-send" aria-hidden="true"></span> -->
 	 


</form>

</div>
</div>