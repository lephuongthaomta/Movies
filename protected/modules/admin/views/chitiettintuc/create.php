<?php
/* @var $this ChitiettintucController */
/* @var $model Chitiettintuc */

$this->breadcrumbs=array(
	'Chitiettintucs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Chitiettintuc', 'url'=>array('index')),
	array('label'=>'Manage Chitiettintuc', 'url'=>array('admin')),
);
?>

<h1>Thêm chi tiết tin tức</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>