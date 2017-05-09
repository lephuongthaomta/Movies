<?php
/* @var $this ChitiettintucController */
/* @var $model Chitiettintuc */

$this->breadcrumbs=array(
	'Chitiettintucs'=>array('index'),
	$model->id_chitiettintuc,
);

$this->menu=array(
	array('label'=>'List Chitiettintuc', 'url'=>array('index')),
	array('label'=>'Create Chitiettintuc', 'url'=>array('create')),
	array('label'=>'Update Chitiettintuc', 'url'=>array('update', 'id'=>$model->id_chitiettintuc)),
	array('label'=>'Delete Chitiettintuc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_chitiettintuc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Chitiettintuc', 'url'=>array('admin')),
);
?>

<h1>Xem chi tiết tin tức #<?php echo $model->id_chitiettintuc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_chitiettintuc',
		'ten',
	),
)); ?>
