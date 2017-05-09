<?php
/* @var $this PhongController */
/* @var $model Phong */

$this->breadcrumbs=array(
	'Phongs'=>array('index'),
	$model->tenPhong=>array('view','id'=>$model->tenPhong),
	'Update',
);

$this->menu=array(
	array('label'=>'List Phong', 'url'=>array('index')),
	array('label'=>'Create Phong', 'url'=>array('create')),
	array('label'=>'View Phong', 'url'=>array('view', 'id'=>$model->tenPhong)),
	array('label'=>'Manage Phong', 'url'=>array('admin')),
);
?>

<h1>Update Phong <?php echo $model->tenPhong; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>