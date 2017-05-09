<?php
/* @var $this TintucController */
/* @var $model Tintuc */

$this->breadcrumbs=array(
	'Tintucs'=>array('index'),
	$model->id_tintuc=>array('view','id'=>$model->id_tintuc),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tintuc', 'url'=>array('index')),
	array('label'=>'Create Tintuc', 'url'=>array('create')),
	array('label'=>'View Tintuc', 'url'=>array('view', 'id'=>$model->id_tintuc)),
	array('label'=>'Manage Tintuc', 'url'=>array('admin')),
);
?>

<h1>Cập nhật tin tức <?php echo $model->id_tintuc; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>