<?php

class SentsmsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function actions()
	{
		return array(
				// captcha action renders the CAPTCHA image displayed on the contact page
				'captcha'=>array(
						'class'=>'CaptchaExtendedAction',
						//'backColor'=>0xFFFFFF,
				),
				// page action renders "static" pages stored under 'protected/views/site/pages'
				// They can be accessed via: index.php?r=site/page&view=FileName
				/* 'page'=>array(
						'class'=>'CViewAction',
				), */
		);
	}
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	
	public function accessRules()
	{
		return array(
			/* array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			), */
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','delete','admin','captcha'),
				'users'=>array('@'),
			),
			/* array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			), */
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new sentsms;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['sentsms']))
		{
			$model->attributes=$_POST['sentsms'];
			
			if ($model->validate())
			{
				if($model->sendsms($_POST['sentsms']))
				{
					$this->redirect(array('admin'));
				}
			} else
			{
				$this->render('create', 
						array('model'=>$model,
						
				),array('errors' => $model->getErrors()));
				
			}
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function displaystatus($data, $row)
	{
		/* if ( $data->status == "I")
			return "Initiated";
		else if ( $data->status == "S" )
			return "Success";
		else if ( $data->status == "F" )
			return "Failure";
		else  */
			return "Success";
	}
	
	public function dateconversion($data, $row)
	{
		$date = date_create($data->created_datetime);
		return date_format($date, 'd/m/Y g:i A');
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['sentsms']))
		{
			$model->attributes=$_POST['sentsms'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->actionCreate();
		/* $dataProvider=new CActiveDataProvider('sentsms');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		)); */
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new sentsms('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['sentsms']))
			$model->attributes=$_GET['sentsms'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return sentsms the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=sentsms::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param sentsms $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sentsms-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
