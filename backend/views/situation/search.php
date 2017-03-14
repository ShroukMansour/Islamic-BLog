<style type="text/css">
	section.search p{
		text-align: right;
	}
</style>
<section class="search">
	<div class="panel panel-default container col-md-offset-1 col-md-10">
	<div class="panel-body">

	<div class="row">
		<form method="post" action="index.php?r=situation/search-by-hadees">
			<div class="col-md-4">
				<p>بحث فى الاحاديث</p>
				<div class="form-group">
				 	<textarea name="hadees" class="form-control"></textarea>
				 	<input type="submit" value="بحث" class="btn btn-info" />

			 	</div>
			</div>
		</form>	

		<form method="post" action="index.php?r=situation/search-by-situation">		
			<div class="col-md-4">
				<p>بحث ف المواقف</p>
			 	<div class="form-group">
				 	<textarea name="situation" class="form-control"></textarea>
			 		<input type="submit" value="بحث" class="btn btn-info" />
		 		</div>
			</div>
		</form>	 	

		<form method="post" action="index.php?r=situation/search-by-tag">	
			<div class="col-md-4">
				<p>بحث بفضل الذكر</p>
				<div class="form-group">
			 		<textarea name="tag" class="form-control"></textarea>
			 		<input type="submit" value="بحث" class="btn btn-info" />
				</div>
			</div>		
		</form>
	 	



	</div>
	</div>
	</div>

</section>
