<?php
/* @var $this GheController */
/* @var $model Ghe */

$this->breadcrumbs=array(
	'Ghes'=>array('index'),
	$model->id_ghe=>array('view','id'=>$model->id_ghe),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ghe', 'url'=>array('index')),
	array('label'=>'Create Ghe', 'url'=>array('create')),
	array('label'=>'View Ghe', 'url'=>array('view', 'id'=>$model->id_ghe)),
	array('label'=>'Manage Ghe', 'url'=>array('admin')),
);
?>

<h1>Update Ghe <?php echo $model->id_ghe; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>