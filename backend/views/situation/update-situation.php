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

<form method="post" action="index.php?r=situation/update&id=<?= $situation['id']; ?>">



	<div class="row">
		
		<div class="col-md-5 col-md-offset-2">
		 	<div class="form-group">
		 	<textarea class="input-lg" cols="60" rows="7" name="content" required="">
		 		<?php echo $situation['content'];?>
		 	</textarea>
		 		
		 	</div>
	 	</div>
	 	<div class="col-md-3 form-tags">
		 		المحتوى			
		</div>
 	</div>
 	<div class="row">
			<div class="col-md-offset-2 col-md-8">
	 			<div class="form-group">
		 			<input type="text" name="tag" id="" required="" class="form-control" value="<?php echo $situation['tag'];?>">
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
		 			<option value="0">Hadees</option>
		 			<option value="1">Situation</option>
		 		</select> <br>
 			</div>
 			<div class="col-md-4 form-tags">
				النوع
			</div>
 	</div>
 	
 	<button type="submit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> تعديل </button>
 	
 	<!-- <span class="glyphicon glyphicon-send" aria-hidden="true"></span> -->
 	 


</form>

</div>
</div>