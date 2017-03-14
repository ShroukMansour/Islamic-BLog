

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
	section.situation ul.sitInfo li{
		float: right;
		padding:1%;
		font-size: 12px;
		color:#777;

	}
	section.situation ul.sitInfo li span{
		font-size: 17px;
		
		color:#0273e0;
	}
	section.situation ul.sitInfo{
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
	section.situation ul.userUpdates{
		float: left;
		list-style: none;	
	}
	section.situation ul.userUpdates li{
		float:left;
		margin:6px;
		background: #222;
		padding:10px;
		border-radius: 50%;
		font-size: 18px;
		transition: all ease-in-out 0.3s;
	}
	section.situation ul.userUpdates a li{
		color:#fff;
	}
	section.situation ul.userUpdates li.pencil:hover{
		background: #0273e0;
		transition: all ease-in-out 0.3s;
	}
	section.situation ul.userUpdates li.trash:hover{
		background: #c9302c;
		transition: all ease-in-out 0.3s;
	}
	section.situation .dropdown-menu{

	    right: 0px;
	    left: 80%;
	    float: left;
	    width: 160px;
	    text-align: right; 
	}
	section.situation p{
		text-align: center;
		font-size: 20px;
	}
	.dropdown{
		  cursor: pointer;
		  font-size: 30px;
		  color:#afabab;
		  margin-right:-17%;
		  margin-top:-15px;
	}
	.dropdown ul li.userName{
		font-size: 20px;
		font-weight: bold;
		text-align: center;
		color:#0273e0;
	} 


</style>

<?php $checkForPost = 0; ?>
<section class="situation">
	<div class="dropdown">
		<div class=" dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" 	aria-expanded="true">
		<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
	</div>
 
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="index.php?r=user/show-update-user&id=<?=Yii::$app->user->id;?>">تعديل الحساب</a></li>
    <li><a href="index.php?r=user/logout" >تسجيل الخروج</a></li>
    <li><a href="#">مسح الحساب</a></li>
    <li role="separator" class="divider"></li>
    <li class="userName"><?=Yii::$app->user->identity->name;?></li>
  </ul>
</div>
	<?php foreach ($allSituations as $situation):?>
		<?php if($situation['user_id'] == $userId):?>
			<?php $checkForPost = 1; ?>
			<div class="content">
				<?= $situation['content']; ?>
			</div>
			<ul class="sitInfo">
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
			</ul>

			<ul class="userUpdates">
				<a href="index.php?r=situation/show-update&sitId=<?=$situation['id'];?>">
					<li class="trash" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></li>
				</a>
				<a href="index.php?r=situation/show-update&sitId=<?=$situation['id'];?>">
					<li  class="pencil"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></li>
				</a>

			</ul>
			
			
			<hr>
					<?php endif?>
	<?php endforeach;?>
	<?php if($checkForPost == 0):?>
		<p>لم تقم بادخال اى ذكر عن النبى ختى الان <br> <a href="index.php?r=situation/show-add-situation&userId=<?= Yii::$app->user->id;?>">اضغط هنا</a> للاضافة</p>
	<?php endif;?>
	
</section>