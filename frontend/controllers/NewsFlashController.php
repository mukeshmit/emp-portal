<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Newsflash;
use frontend\models\SearchNewsFlash;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use sammaye\mailchimp\mailchimp;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;


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
		
		/* $mc = new Mailchimp(['apikey' => '5562acdeed1bf2ee829a71b7e6428c5a-us15','opts'=>['verify_ssl'=>false]]);
		// $this->opts = false;
		$userList = $mc->lists->getList(); */
		/* echo "<pre>";
		print_r($userList);
		die; */
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
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
			$image = UploadedFile::getInstance($model,'image');
			if(is_object($image)){
				$model->image = $image->basename . '.'.$image->extension;
			}
			
			if($model->save()){
				if(is_object($image)){
					$image->saveAs('uploads/'.$model->image);
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
		// $clone->image = $obj->image;
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
}
