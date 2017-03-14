<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Situation;

/**
 * Site controller
 */
class SituationController extends Controller
{

	public function beforeAction($action){

		return true;
	}


	
	public function actionAddSituation(){
		$tag = $_POST["tag"];
		$type = $_POST["type"];
		$content = $_POST["content"];
		$userId = $_GET['id'];
		
		$sit = new Situation;
		$sit->tag = $tag;
		$sit->type = $type;
		$sit->content = $content;
		$sit->user_id = $userId;
		
		if($sit->save()){
			
				$allSituations = Situation::find()->all();
		
  
		return $this->render("show-all-situations", ['allSituations'=>$allSituations] );
		}
		else{
			echo $sit->getErrors();
		}
	}
	public function actionShowUpdate()
	{
		$id = $_GET['sitId'];
		$situation = Situation::find()->where(["id" => $id])->One();
		return $this->render('update-situation', ['situation' => $situation]);	
	}
	public function actionUpdate()
	{
		$id = $_GET['id'];
		
		$sit = Situation::find()->where(["id" => $id])->one();
		$sit->content = $_POST['content'];
		$sit->tag = $_POST['tag'];
		if($_POST['type'] == 1)
			$sit->type = 1;
		else
			$sit->type = 0;
		 

		if($sit->save()){	
			$allSituations = Situation::find()->all();
	 		return $this->render("show-all-situations", ['allSituations'=>$allSituations] );
	 		
		}else{
			echo $sit->getErrors();
		}

	}

	public function actionShowAddSituation(){
		return $this->render("show-add-situation");
	}
	public function actionShowUserPost()
	{
		$userId = $_GET['userId'];
		$allSituations = Situation::find()->all();
		
		return $this->render("show-user-post",['allSituations'=>$allSituations, 'userId'=>$userId] );
	}
	
	public function actionShowAll()
	{
		
		$allSituations = Situation::find()->all();
		// SELECT * FROM `customer` WHERE `id` = 123
	 	
  
		return $this->render("show-all-situations", ['allSituations'=>$allSituations] );

	
	}

	public function actionSearch()
	{
		return $this->render("search");
	}

	public function actionSearchByHadees()
	{
		$hadees = $_POST['hadees'];
		$res = Situation::findBySql("SELECT * FROM situation  WHERE content LIKE '%$hadees%' and type = 0; ")->all();
		return $this->render("show-all-situations", ['allSituations'=>$res] );
		

	}
	public function actionSearchByTag()
	{
		$tag = $_POST['tag'];
		$res = Situation::find()->where(["tag" => $tag])->all();	
		return $this->render("show-all-situations", ['allSituations'=>$res] );
		
	}
	public function actionSearchBySituation()
	{
		$situation = $_POST['situation'];
		$res = Situation::findBySql("SELECT * FROM situation  WHERE content LIKE '%$situation%' and type = 1; ")->all();

		return $this->render("show-all-situations", ['allSituations'=>$res] );

	}

}