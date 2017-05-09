<?php
/* @var $this PhimController */
/* @var $model Phim */

$this->breadcrumbs=array(
	'Phims'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Phim', 'url'=>array('index')),
	array('label'=>'Manage Phim', 'url'=>array('admin')),
);
?>

<h1>Thêm Phim</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'data'=>$data)); ?>