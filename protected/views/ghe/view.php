<?php
/* @var $this GheController */
/* @var $model Ghe */

$this->breadcrumbs=array(
	'Ghes'=>array('index'),
	$model->id_ghe,
);

$this->menu=array(
	array('label'=>'List Ghe', 'url'=>array('index')),
	array('label'=>'Create Ghe', 'url'=>array('create')),
	array('label'=>'Update Ghe', 'url'=>array('update', 'id'=>$model->id_ghe)),
	array('label'=>'Delete Ghe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ghe),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ghe', 'url'=>array('admin')),
);
?>

<h1>View Ghe #<?php echo $model->id_ghe; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ghe',
		'id_loaighe',
		'id_trangthai',
		'soLuongGhe',
		'soHang',
		'soCot',
		'created_at',
		'updated_at',
	),
)); ?>
