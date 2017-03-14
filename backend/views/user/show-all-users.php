<style>
	.thead-inverse {
		background: #222;
		color:#fff;
	}
	tr{
		height: 50px;
	}
	
	#first{
		width: 20%;
	}
</style>
<table class="table">
<div class="row">
	<div class="col-md-12">
	  <thead class="thead-inverse">
	    <tr>
	      <th>#</th>
	      <th>Name</th>
	      <th>Email</th>
	      <th>Update</th>
	      <th>Delete</th>
	    </tr>
	  </thead>
	 </div>
</div>
  <tbody>	
<?php foreach ($users as $user):?>
	
	 <tr>
      <th scope="row"><?= $user['id']; ?>  </th>
      <td id="first"><?= $user['name']; ?> </td>
      <td id="second"><?= $user['email']; ?></td>
      <td><a class="btn btn-primary" href="index.php?r=user/show-validate-user&value=1&id=<?= $user['id']; ?>" >Update</a></td>  
      <td><a class="btn btn-danger" href="index.php?r=user/show-validate-user&value=2&id=<?= $user['id']; ?>" >Delete</a></td> 
    </tr>

<?php endforeach;?>
   
   </tbody>
</table>


