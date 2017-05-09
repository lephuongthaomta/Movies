<?php
/* @var $this TheloaiController */
/* @var $model Theloai */

$this->breadcrumbs=array(
	'Theloais'=>array('index'),
	$model->id_theloai,
);

$this->menu=array(
	array('label'=>'List Theloai', 'url'=>array('index')),
	array('label'=>'Create Theloai', 'url'=>array('create')),
	array('label'=>'Update Theloai', 'url'=>array('update', 'id'=>$model->id_theloai)),
	array('label'=>'Delete Theloai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_theloai),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Theloai', 'url'=>array('admin')),
);
?>

<h1>View Theloai #<?php echo $model->id_theloai; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_theloai',
		'tenLoad',
	),
)); ?>
