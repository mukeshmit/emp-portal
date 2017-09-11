<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Newsflash;
use frontend\models\SearchNewsFlash;
use frontend\models\Campaigns;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use sammaye\mailchimp\mailchimp;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
use yii\helpers\Url;


/**
 * NewsFlashController implements the CRUD actions for Newsflash model.
*/

class NewsFlashController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Newsflash models.
     * @return mixed
     */
    public function actionIndex()
    {
		
		
		if(Yii::$app->user->isGuest){
			return $this->redirect(['site/login']);
		}else{
			
			$query = Newsflash::find();

			$pagination = new Pagination([
				'defaultPageSize' => 10,
				'totalCount' => $query->count(),
			]);

			$modelData = $query->orderBy('created_at DESC')
				->offset($pagination->offset)
				->limit($pagination->limit)
				->all();
			
			 $model = new Newsflash();
				
			
			return $this->render('index', [
				'modelDatas' => $modelData,
				'pagination' => $pagination,
				'model' => $model,
			]);
			
		}
		
		
    }

    /**
     * Displays a single Newsflash model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Newsflash model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		
		$model = new Newsflash();

		$model->user_id = Yii::$app->user->identity->id;
		$model->created_at = strtotime(date('d-m-Y H:i:s'));
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
			$image = UploadedFile::getInstance($model,'image');
			if(is_object($image)){
				$model->image = $image->basename . '.'.$image->extension;
			}else{
				$model->image = 'no-image.jpg';
			}
			
			if($model->save()){
				if(is_object($image)){
					$image->saveAs('uploads/'.$model->image);
				}

				


				
				return $this->redirect(['news-flash/index']);
			}else{
				 return $this->renderAjax('update', [
								 'model' => $model,
							    ]);
			}
            
        } else {
			
            return $this->renderAjax('create', [
								 'model' => $model,
							    ]);
			
        }
		
		
		
		
		
        /* $model = new Newsflash();
        $model->user_id = Yii::$app->user->identity->id;
        $model->title = isset(Yii::$app->request->post()['Newsflash']['title'])?Yii::$app->request->post()['Newsflash']['title']:'';
        $model->body = isset(Yii::$app->request->post()['Newsflash']['body'])?Yii::$app->request->post()['Newsflash']['body']:'';
        $model->type = 2;
        $model->image = 'no-image.jpg';
        $model->created_at = strtotime(date('d-m-Y H:i:s'));
		
		if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post()) && $model->save()) {
			// Yii::$app->response->format = Response::FORMAT_JSON;
			 \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			 
			if(!empty(ActiveForm::validate($model))){
				
				return ActiveForm::validate($model);
				
			}else{
				
				return $this->redirect(['news-flash/index']);
				
			}
			
			// return ActiveForm::validate($model);
		}else{
			 // \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			// return ActiveForm::validate($model);
			
			 return $this->renderAjax('create', [
                'model' => $model,
            ]);
		} */
		
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // return $this->redirect(['view', 'id' => $model->id]);
        // } else {
            // return $this->render('create', [
                // 'model' => $model,
            // ]);
        // }
    }

    /**
     * Updates an existing Newsflash model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

		$model->updated_at = strtotime(date('d-m-Y H:i:s'));
		$imagename = $model->image;
		
        if ($model->load(Yii::$app->request->post())) {
			
			$imageInstance 	= UploadedFile::getInstance($model,'image');
			
			$randm 			= rand(278, 99999);
			$fileName 		= "{$randm}-{$imageInstance}";
			
			$image = (empty($imageInstance))? $model->image : $fileName ;
			
			if(empty($imageInstance)){
				$model->image = $imagename;$model->image;
			}else{
				$model->image = $image;				
			}
						
			if($model->save()){
				if(is_object($imageInstance)){
					$imageInstance->saveAs('uploads/'.$image);
				}				
				return $this->redirect(['news-flash/index']);
			}else{
				 return $this->redirect(['news-flash/update',$id]);
			}
            
        } else { 
			
            return $this->renderAjax('update', [
								 'model' => $model,
							    ]);
			
        }
		
    }

    /**
     * Copy an existing Newsflash model.
     * @param integer $id
     * @return mixed
     */
    public function actionCopy($id)
    {
        
		$model = new Newsflash;
		$obj = $model->getSingleData($id);
		
		$clone = new Newsflash;
		
		$clone->id = null;
		$clone->user_id = $obj->user_id;
		$clone->title = $obj->title;
		$clone->body = $obj->body;
		$clone->image = $obj->image;
		$clone->type = $obj->type;
		$clone->created_at = strtotime(date('d-m-Y H:i:s'));
		$clone->isNewRecord = true;
			
		if($clone->save()){
			
			return $this->redirect(['news-flash/index']);
			
		}
		
    }

    /**
     * Deletes an existing Newsflash model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Newsflash model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Newsflash the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Newsflash::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	
	/**
     * Creates a new Newsflash campaign model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreatecampaign()
    {
		
		$mc = new Mailchimp(['apikey' => 'a3cbd818e258031efe11591b96fa3fcc-us16','opts'=>['verify_ssl'=>false]]);
		// $mc = new Mailchimp(['apikey' => '5562acdeed1bf2ee829a71b7e6428c5a-us15','opts'=>['verify_ssl'=>false]]);
		// $this->opts = false;
				
		/* $userList = $mc->lists->getList();
		$listsdata = [];
		if(isset($userList['data']) && !empty($userList['data'])){
			
			foreach ($userList['data'] as $userListData){
				
				$listsdata[$userListData['id']] = $userListData['name']; 
				
			}
			
		} */	
		
		$news_flash_id = isset(Yii::$app->request->post()['Campaigns']['news_flash_id'])?Yii::$app->request->post()['Campaigns']['news_flash_id']:'';
		$mc_camp_list_id = isset(Yii::$app->request->post()['Campaigns']['mc_camp_list_id'])?Yii::$app->request->post()['Campaigns']['mc_camp_list_id']:'';
		$campaignname = isset(Yii::$app->request->post()['Campaigns']['mc_camp_list_id'])?Yii::$app->request->post()['Campaigns']['campaignname']:'';
		
		$model = new Campaigns();
		$model->user_id = Yii::$app->user->identity->id;
		$model->created_by = Yii::$app->user->identity->id;
		$model->campaignname = $campaignname;
		$model->news_flash_id = $news_flash_id;
		$model->mc_camp_list_id = $mc_camp_list_id;
		$model->created_at = strtotime(date('d-m-Y H:i:s'));
		$model->updated_at = strtotime(date('d-m-Y H:i:s'));
		
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
			if($model->save()){		
				
				$newsflashdata = $this->findModel($news_flash_id);
				
				$camp_id = $model->getPrimaryKey();
				
				$html = "Hello User <br />";
				$html .= "<h1>".$newsflashdata->title."</h1>";
				$html .= "<p><img src='https://gallery.mailchimp.com/3e055ae88c03feb23a6db9008/images/d939e22b-594c-4fc1-9f58-bb2b649e470b.png' height='50' width='50'>". $newsflashdata->body . "</p>";
				// $html .= "<p><img src='".Url::home(true).'uploads/' . $newsflashdata->image."' height='50' width='50'>". $newsflashdata->body . "</p>";
				
				$options = ['list_id'=>$mc_camp_list_id,'subject'=>$campaignname,'from_email'=>'mukeshkumar33390@gmail.com','from_name'=>Yii::$app->request->serverName];
					
				$content = ['html'=>$html];
				$type = 'regular';
				
				if($mc->campaigns->create($type, $options, $content)){
					$ret = $mc->campaigns->create($type, $options, $content);
					$cid = $ret['id'];
					$retData = $mc->campaigns->send($cid);
					if($retData){
						
						$model->id = $camp_id;
						$model->mc_camp_id = $cid;
						$model->status = 1;
						$model->updated_at = strtotime(date('d-m-Y H:i:s'));
						$model->save();
					}
					return $this->redirect(['news-flash/index']);
				}else{
					return $this->redirect(['news-flash/index']);
				}
				
			}else{
				 return $this->redirect(['news-flash/index']);
			}
            
        } else {
			
            return $this->renderAjax('campaign/create', [
								 'model' => $model,
							    ]);
			
        }
		
    }
	
	
	
}
