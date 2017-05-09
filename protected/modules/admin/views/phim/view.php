<?php
/* @var $this PhimController */
/* @var $model Phim */

$this->breadcrumbs=array(
	'Phims'=>array('index'),
	$model->id_phim,
);

$this->menu=array(
	array('label'=>'List Phim', 'url'=>array('index')),
	array('label'=>'Create Phim', 'url'=>array('create')),
	array('label'=>'Update Phim', 'url'=>array('update', 'id'=>$model->id_phim)),
	array('label'=>'Delete Phim', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_phim),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Phim', 'url'=>array('admin')),
);
?>

<h1>View Phim #<?php echo $model->id_phim; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_phim',
		'tenPhim',
		'anhDaiDien',
		'id_theloai',
		'thoiLuong',
		'khoiChieu',
		'daoDien',
		'dienVienChinh',
		'noiDung',
		'Trailer',
		'dinhDang',
		'id_nhanvien',
		'created_at',
		'updated_at',
	),
)); ?>
