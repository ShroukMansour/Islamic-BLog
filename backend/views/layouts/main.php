<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<?php
    $this->title = 'محمد رسول الله';
  
?>
<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\moic\situations-master1\backend\web\css\font-awesome.min.css">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style >
    div.operation ul.ulDesign{
        float: left;
        list-style: none;
        top:30%;
        left:5%;
        font-size: 30px;
        position: fixed;
        background: #fff; 
        padding:10px;
        border-radius: 10px;
        z-index: 1000;

        /*background: #0273e0;*/
    }
    div.operation ul li{
        margin: 5px 10px;
    }
    div.operation ul li a{
        color: #333;
        text-align: center;
        transition: all ease-in-out 0.2s;
    }
    div.operation ul li a:hover{
        transition: all ease-in-out 0.2s;
        color: #0273e0;
    }
      
    header{
        height: 85%;
        
        background-image:url('../web/images/2.jpg');
        background-size: cover;

    }
    
    </style>
</head>
<body>

<?php $this->beginBody() ?>
<header>
    any data here
</header>
<div class="operation">
<?php
if(!Yii::$app->user->isGuest):?>

    <ul class="ulDesign">
        <li>
            <a href="index.php?r=situation/show-all"  data-toggle="tooltip" title="الصفحة الرئيسية"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
        </li>
        <li>
             <a href="index.php?r=user/show-user-post&userId=<?=Yii::$app->user->id?>"  data-toggle="tooltip" title="الصفحة الشخصية" data-placement="right"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
        </li>
        <li>
            <a href="index.php?r=situation/show-add-situation&userId=<?=Yii::$app->user->id?>"  data-toggle="tooltip" title="اضافة ذكر" data-placement="right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
        </li>
        <li>
            <a href="index.php?r=situation/search" data-placement="right"  data-toggle="tooltip" title="بحث"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
        </li>
        <li>
            <a href="index.php?r=user/logout" data-placement="right" data-toggle="tooltip" title="تسجيل الخروج"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
        </li>
    </ul>
<?php endif?>
 <?php 
 if(Yii::$app->user->isGuest):?>
 <ul class="ulDesign">
     <li><a data-toggle="tooltip" title="تسجيل الدخول" href="index.php?r=user/login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
     <li><a href="index.php?r=situation/search" data-placement="right"  data-toggle="tooltip" title="بحث"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
        </li>
 </ul>
</div>

<?php endif?>
    
</div>

<div class="wrap">
   

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
