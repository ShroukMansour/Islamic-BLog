<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';

?>
<style type="text/css">
    .submitBtn{
        display: block;
        margin: 0 auto;
    }
    h1{
        text-align: center;
        color: #222;
        font-weight: bold;
    }
    p.sign-up{
        cursor: pointer;
        text-align: center;
        
        
    }
</style>
<div class="site-login">
    <h1>تسجيل الدخول</h1>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
        <div class="signIn">
             <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                  <button type="submit"  name="login-button" value="تسجيل الدخول" class="btn  btn-primary btn-lg submitBtn"><span class="glyphicon glyphicon-send" aria-hidden="true"></span > تسجيل الدخول </button>
                  
                 
                    
                </div>

            <?php ActiveForm::end(); ?>
        </div>
           
        </div>
    </div>
      <p class="sign-up"> <a href="index.php?r=user/show-create-user" >انشاء حساب</a></p> 
</div>
