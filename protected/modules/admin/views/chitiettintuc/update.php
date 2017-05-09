<?php
/* @var $this ChitiettintucController */
/* @var $model Chitiettintuc */

$this->breadcrumbs=array(
	'Chitiettintucs'=>array('index'),
	$model->id_chitiettintuc=>array('view','id'=>$model->id_chitiettintuc),
	'Update',
);

$this->menu=array(
	array('label'=>'List Chitiettintuc', 'url'=>array('index')),
	array('label'=>'Create Chitiettintuc', 'url'=>array('create')),
	array('label'=>'View Chitiettintuc', 'url'=>array('view', 'id'=>$model->id_chitiettintuc)),
	array('label'=>'Manage Chitiettintuc', 'url'=>array('admin')),
);
?>

<h1>Update Chitiettintuc <?php echo $model->id_chitiettintuc; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'data'=>$data)); ?>