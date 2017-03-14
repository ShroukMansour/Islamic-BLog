<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;


/**
 * Site controller
 */
class UserController extends Controller
{

	public function beforeAction($action){

		return true;
	}
	public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('show-sign-in', [
                'model' => $model,
            ]);
        }
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        Yii::$app->response->redirect(['situation/show-all']);
       
    }
	public function actionShowCreateUser(){
		return $this->render("show-create-user");
	}
	public function actionCreateUser()
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$hash = Yii::$app->getSecurity()->generatePasswordHash($password);
		$user = new User();
		$user->name = $name;
		$user->email = $email;
		$user->password = $password;
		$user->password_hash = $hash;

		if($user->save()){
			\Yii::$app->user->login($user);
			Yii::$app->response->redirect(["situation/show-all"]);
		}
		else{
			echo $user->getErrors();
		}
	}
	public function actionShowAllUsers(){


		$users = User::find()->all();
		return $this->render("show-all-users", ['users'=>$users] );

	}

	public function actionDeleteUser($id){
		
		 $user = User::find()->where(["id" => $id])->one();
		 $user->delete();	
		 $users = User::find()->all();
		 echo "from delete";
		return $this->render("show-all-users", ['users'=>$users] );
	}
	public function actionShowUserPost(){
		$user = new User();
		$id = $_GET['userId'];
	/*	$user = User::findOne($id);
		$situations = $user->situations;*/


		$this->redirect(array('situation/show-user-post', 'userId'=>$id));
	
		/*Yii::$app->response->redirect(['situation/show-user-post', 'situations'=>$situations ] );*/
		//return $this->render("show-user-post", ['situations'=>$situations] );
	}

	public function actionShowValidateUser(){
		$id = $_GET['id'];
		$value= $_GET['value'];
		$user =  User::find()->where(["id"=>$id])->one();
		return $this->render("show-validate-user", ["user"=>$user,"value"=>$value]);
	}
	
	public function actionValidateUser(){
		$email = $_POST['email'];
		$value = $_GET['value'];
		$user = User::find()->where(['email'=>$email])->one();
		$id = $user->id;
		$pass = $_POST['password'];
		$validtePass = $user->password;
		if($pass == $validtePass ){
			if($value==1)
				return $this->render('show-update-user', ['user'=>$user]);
			else if($value == 2)
				{
					$this->actionDeleteUser($id);
				}

		}else{
			echo  "please enter a correct password";
		}
	}
	
	public function actionShowUpdateUser(){
		$id = $_GET['id'];
		$user = User::find()->where(["id" => $id])->one();
		return  $this->render("show-update-user", ['user'=>$user] );

	}

	public function actionUpdateUser(){
		$id = $_GET['id'];
		$user = User::find()->where(["id" => $id])->one();
		$user->email = $_POST['email'];
		$user->name = $_POST['name'];
		$user->password = $_POST['password'];

		if($user->save()){
		//	$this->redirect(\Yii::$app->urlManager->createUrl("users/show-user"));
			$users = User::find()->all();
			return $this->render("show-user", ['user'=>$user] );
		}else{
			echo $user->getErrors();
		}

	}

	public function actionShowCreateSituationByUser()
	{
		return $this->render("show-create-situation-by-user");
	}

	public function actionCreateSituationByUser()
	{
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$user = User::find()->where(["email" => $email])->one();
		$allUsers = User::find()->all();
		if(isset($user)){
			$checkedPass = $user->password;
			if($pass == $checkedPass){
				$userId = $user->id;
				//return $this->render('show-add-situation', ['userId'=> $userId]);
				//$this->redirect(\Yii::$app->urlManager->createUrl("users/show-all-users"));
				
				Yii::$app->response->redirect(['situation/show-add-situation', 'userId'=> $userId] );
				/*Yii::$app->response->redirect(['situation/show-add-situation','allUsers' =>$allUsers, 'userId'=> $userId]);
				/*return $this->render('situation/show-add-situation', ['allUsers'=> $allUsers,'userId'=> $userId] );*/

			}
		}else{
			echo "Please enter a correct email and password";
			//return false; 

		}


	}
}