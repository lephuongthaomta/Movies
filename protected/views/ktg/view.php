<?php
/* @var $this KtgController */
/* @var $model Ktg */

$this->breadcrumbs=array(
	'Ktgs'=>array('index'),
	$model->id_KTG,
);

$this->menu=array(
	array('label'=>'List Ktg', 'url'=>array('index')),
	array('label'=>'Create Ktg', 'url'=>array('create')),
	array('label'=>'Update Ktg', 'url'=>array('update', 'id'=>$model->id_KTG)),
	array('label'=>'Delete Ktg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_KTG),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ktg', 'url'=>array('admin')),
);
?>

<h1>View Ktg #<?php echo $model->id_KTG; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_KTG',
		'ngaychieu',
		'giochieu',
		'created_at',
		'updated_at',
	),
)); ?>
