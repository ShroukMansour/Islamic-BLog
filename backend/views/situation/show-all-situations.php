<?php

?>

<style>
	section.situation{
		float: right;
		padding-right:10%;
		text-align: right;
		width: 80%;
	}
	section.situation .content{
		font-size: 32px;
		color:#333;
		font-weight: bold;
		padding: 20px;

	}
	section.situation ul li{
		float: right;
		padding:1%;
		font-size: 12px;
		color:#777;

	}
	section.situation ul li span{
		font-size: 17px;
		
		color:#0085A1;
	}
	section.situation ul{
		list-style: none;
	}
	section.situation.user{
		text-align: left;
	} 
	section.situation hr{
		
		height:  1px;
		background: #e2d7d7;
		width: 60%;
		border-radius: 10px;
		margin-top:50px;

	}
	section.situation p.notFound{
		text-align: center;
		font-size: 20px;
	}
	

</style>


	<?php $checkForPost = 0;?>

<section class="situation">

	<?php foreach ($allSituations as $situation):?>
		<?php $checkForPost = 1;?>
		<div class="content">
			<?= $situation['content']; ?>
		</div>
		<ul>
			<li class="info type">النوع :
				<span>	
					<?php
						if($situation['type'] == 0)
							echo "حديث";
						else 
							echo "موقف";

					?> 
				</span>
				</li>
			<li class="info tag">الفضل: <span><?= $situation['tag']; ?></span> </li>
			<li class="info user">بواسطة: 
				<span>
					<?php

					$sitUser = $situation['user'];
					echo $sitUser['name'];
					?>
				</span>
			</li>
			<li class="info date">فى: <span><?= $situation['created_at'];?></span></li>
		</ul><br>
		<hr>
	<?php endforeach;?>
	<?php if($checkForPost == 0):?>
		<p class="notFound">لم يتم العثور على نتيجة</p>
	<?php endif;?>
	
</section>