<?php
/* @var $this PhimController */
/* @var $model Phim */

$this->breadcrumbs=array(
	'Phims'=>array('index'),
	$model->id_phim=>array('view','id'=>$model->id_phim),
	'Update',
);

$this->menu=array(
	array('label'=>'List Phim', 'url'=>array('index')),
	array('label'=>'Create Phim', 'url'=>array('create')),
	array('label'=>'View Phim', 'url'=>array('view', 'id'=>$model->id_phim)),
	array('label'=>'Manage Phim', 'url'=>array('admin')),
);
?>

<h1>Update Phim <?php echo $model->id_phim; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'data'=>$data)); ?>