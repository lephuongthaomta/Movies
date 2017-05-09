<?php
/* @var $this TheloaiController */
/* @var $model Theloai */

$this->breadcrumbs=array(
	'Theloais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Theloai', 'url'=>array('index')),
	array('label'=>'Manage Theloai', 'url'=>array('admin')),
);
?>

<h1>Create Theloai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>