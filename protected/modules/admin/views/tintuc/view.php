<?php
/* @var $this TintucController */
/* @var $model Tintuc */

$this->breadcrumbs=array(
	'Tintucs'=>array('index'),
	$model->id_tintuc,
);

$this->menu=array(
	array('label'=>'List Tintuc', 'url'=>array('index')),
	array('label'=>'Create Tintuc', 'url'=>array('create')),
	array('label'=>'Update Tintuc', 'url'=>array('update', 'id'=>$model->id_tintuc)),
	array('label'=>'Delete Tintuc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tintuc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tintuc', 'url'=>array('admin')),
);
?>

<h1>Xem tin tức #<?php echo $model->id_tintuc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tintuc',
		'id_chitiettintuc',
		'tieude',
		'trangthai',
		'mota',
		'binhluan',
		'date_add',
		'date_upd',
		'id_thanhvien',
		'soluongBL',
		'image_description',
		'image_content',
	),
)); ?>
