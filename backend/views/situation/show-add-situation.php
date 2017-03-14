<style type="text/css">
	.form-tags{
		float:right;
		text-align: right;
		font-size: 20px;
		font-weight: bold;

	}
	input{
		text-align: right;
	}
	input[type="radio"]{
		margin: 5px;
	}
	input[type="submit"]{
		display: block;
		margin: 0 auto;
	} 
</style>
<div class="panel panel-default container col-md-offset-3  col-md-9">
<div class="panel-body">

<form method="post" action="index.php?r=situation/add-situation&id=<?=$_GET['userId']?>">



	<div class="row">
		
		<div class="col-md-5 col-md-offset-2">
		 	<div class="form-group">
		 	<textarea class="input-lg" cols="60" rows="7" name="content" required="">
		 		
		 	</textarea>
		 		
		 	</div>
	 	</div>
	 	<div class="col-md-3 form-tags">
		 		الذكر		
		</div>
 	</div>
 	<div class="row">
			<div class="col-md-offset-2 col-md-8">
	 			<div class="form-group">
		 			<input type="text" name="tag" id="" required="" class="form-control">
		 		</div>
 			</div>
 			<div class="col-md-1 form-tags">
				الفضل
			</div>
 	</div>
 	<div class="row">	
		<div class=" col-md-offset-6 col-md-2">
 			<div class="form-group">
		 		<select name="type" class="form-control">
		 			<option value="0">حديث</option>
		 			<option value="1">موقف</option>
		 		</select> <br>
	 		</div>
			</div>
			<div class="col-md-4 form-tags">
			النوع
		</div>
 	</div>
 	
 	<button type="submit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> اضافة </button>
 	
 	<!-- <span class="glyphicon glyphicon-send" aria-hidden="true"></span> -->
 	 


</form>

</div>
</div>



