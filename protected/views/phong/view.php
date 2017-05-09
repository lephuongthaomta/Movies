<?php
/* @var $this PhongController */
/* @var $model Phong */

$this->breadcrumbs=array(
	'Phongs'=>array('index'),
	$model->tenPhong,
);

$this->menu=array(
	array('label'=>'List Phong', 'url'=>array('index')),
	array('label'=>'Create Phong', 'url'=>array('create')),
	array('label'=>'Update Phong', 'url'=>array('update', 'id'=>$model->tenPhong)),
	array('label'=>'Delete Phong', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tenPhong),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Phong', 'url'=>array('admin')),
);
?>

<h1>View Phong #<?php echo $model->tenPhong; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_phongchieu',
		'tenPhong',
		'loaiPhong',
		'soHangMax',
		'soCotMax',
		'created_at',
		'updated_at',
	),
)); ?>
