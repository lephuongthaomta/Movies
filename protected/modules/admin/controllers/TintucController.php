<?php

class TintucController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

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

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
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
		$model=new Tintuc;
		 
		$tintuc = Tintuc::getAllTintuc();

		$data=CHtml::listData($tintuc,"id_chitiettintuc","ten");
		$path = Yii::getPathOfAlias('webroot').'/uploads';
	//	$temTime = time();//lấy thời gian để tránh bị trùng
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tintuc']))
		{
			$model->attributes=$_POST['Tintuc'];
			$image_description = CUploadedFile::getInstance($model,'image_description');
                        if($image_description){
                        $tem=rand(0,9999).time().$image_description->name;
                        $image_description->saveAs($path.'/'.$tem);
                        $model->image_description = 'uploads/'.$tem;
                        }

             $image_content = CUploadedFile::getInstance($model, 'image_content');
                        if($image_content){
                        $tem=rand(0,9999).time().$image_content->name;
                        $image_content->saveAs($path.'/'.$tem);
                        $model->image_content = 'uploads/'.$tem;
                        }
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tintuc));
		}

		$this->render('create',array(
			'model'=>$model,
			'data'=>$data,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$tintuc = Tintuc::getAllTintuc('id_chitiettintuc','ten');
		$data=CHtml::listData($tintuc,"id_chitiettintuc","ten");

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$path = Yii::getPathOfAlias('webroot').'/uploads'; 
		$temTime = time();
		if(isset($_POST['Tintuc']))
		{
			$model->attributes=$_POST['Tintuc'];
			$old_img = $model->image_description;
            $old_image_content=$model->image_content;
            $image_description = CUploadedFile::getInstance($model, 'image_description');
            if(!empty($image_description->name)){
                $tem=rand(0,9999).time().$image_description->name;
                $image_description->saveAs($path.'/'.$temTime);
                $model->image_description = 'uploads/'.$temTime;
            }else{
                $model->image_description=$old_img;
            }
            $image_content = CUploadedFile::getInstance($model, 'image_content');
            if(!empty($image_content->name)){
                $tem=rand(0,9999).time().$image_content->name;
                $image_content->saveAs($path.'/'.$temTime);
                $model->image_content = 'uploads/'.$temTime;
            }else{
                $model->image_content=$old_image_content;
            }
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tintuc));
		}

		$this->render('update',array(
			'model'=>$model,
			'data'=>$data,
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
		$dataProvider=new CActiveDataProvider('Tintuc');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tintuc('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tintuc']))
			$model->attributes=$_GET['Tintuc'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tintuc the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tintuc::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tintuc $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tintuc-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
