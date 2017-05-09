<?php
/* @var $this PhongController */
/* @var $model Phong */

$this->breadcrumbs=array(
	'Phongs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Phong', 'url'=>array('index')),
	array('label'=>'Manage Phong', 'url'=>array('admin')),
);
?>

<h1>Create Phong</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>