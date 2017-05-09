<?php
/* @var $this KtgController */
/* @var $model Ktg */

$this->breadcrumbs=array(
	'Ktgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ktg', 'url'=>array('index')),
	array('label'=>'Manage Ktg', 'url'=>array('admin')),
);
?>

<h1>Create Ktg</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>