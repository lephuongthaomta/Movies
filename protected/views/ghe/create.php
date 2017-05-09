<?php
/* @var $this GheController */
/* @var $model Ghe */

$this->breadcrumbs=array(
	'Ghes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ghe', 'url'=>array('index')),
	array('label'=>'Manage Ghe', 'url'=>array('admin')),
);
?>

<h1>Create Ghe</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>