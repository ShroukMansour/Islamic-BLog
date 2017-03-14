<?php
/*echo "yes iam from view";
foreach ($allSituations as $row ) {
				
			echo $row['tag'] . "      " . $row['type'] . "      " . $row['content'] ."<br>"; 
			}

*/

?>
<style>
	.thead-inverse
	{
		background: #222;
		color:#fff;

	}
	thead th{
		text-align: center;
	}
	tr{
		height: 50px;
		
		
	}
	
	#first{
		width: 20%;
		text-align: center;
	}
</style>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>	

	
	 <tr>
      <th scope="row"><?= $user['id']; ?></th>
      <td id="first"><?= $user['name']; ?></td>
      <td id="second"><?= $user['email']; ?></td>
      
    </tr>


   
   </tbody>
</table>


