<style type="text/css">
	button.sign-up{
		display: block;
		margin: 0 auto;
	}
</style>
<div class="panel panel-default container col-md-offset-3 col-md-6">
<div class="panel-body">

<form method="post" action="index.php?r=user/create-user">



		<div class="row">
			<div class="col-md-offset-2 col-md-8">
	 			<div class="form-group">
		 			<input type="text" name="name" id="" required="" class="form-control">
		 		</div>
 			</div>
 			<div class="col-md-1 form-tags">
				الاسم
			</div>
 	</div>
 	<div class="row">
			<div class="col-md-offset-2 col-md-8">
	 			<div class="form-group">
		 			<input type="text" name="email" id="" required="" class="form-control">
		 		</div>
 			</div>
 			<div class="col-md-1 form-tags">
				الايميل
			</div>
 	</div>
 	<div class="row">
			<div class="col-md-offset-2 col-md-8">
	 			<div class="form-group">
		 			<input type="password" name="password" id="" required="" class="form-control">
		 		</div>
 			</div>
 			<div class="col-md-1 form-tags">
				الباسورد
			</div>
 	</div>
 	<button type="submit" class="btn btn-primary sign-up"  ><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> انشاء الحساب </button>
 	
 	<!-- <span class="glyphicon glyphicon-send" aria-hidden="true"></span> -->
 	 


</form>


</div>
</div>