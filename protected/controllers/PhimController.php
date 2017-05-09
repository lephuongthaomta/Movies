<?php

class PhimController extends Controller
{
	public function actionIndex()
	{

		$this->render('index');
	}

	public function actionlistPhim($id)
	{
		//$idCat = Yii::app()->request->getParam('idCat');
		$data = Phim::getChitietphimByID($id);
		$this->render("listPhim",array('data'=>$data));

	}
}