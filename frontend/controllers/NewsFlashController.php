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
                    'delete' => ['POST'],
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
		// die();
		
		/* $mc = new Mailchimp(['apikey' => '5562acdeed1bf2ee829a71b7e6428c5a-us15','opts'=>['verify_ssl'=>false]]);
		// $this->opts = false;
		$userList = $mc->lists->getList(); */
		/* echo "<pre>";
		print_r($userList);
		die; */
		
		$query = Newsflash::find();

        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
        ]);

        $modelData = $query->orderBy('created_at')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
		
		return $this->render('index', [
            'modelDatas' => $modelData,
            'pagination' => $pagination,
        ]);
		
		
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
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
