<?php
/* @var $this TheloaiController */
/* @var $model Theloai */

$this->breadcrumbs=array(
	'Theloais'=>array('index'),
	$model->id_theloai=>array('view','id'=>$model->id_theloai),
	'Update',
);

$this->menu=array(
	array('label'=>'List Theloai', 'url'=>array('index')),
	array('label'=>'Create Theloai', 'url'=>array('create')),
	array('label'=>'View Theloai', 'url'=>array('view', 'id'=>$model->id_theloai)),
	array('label'=>'Manage Theloai', 'url'=>array('admin')),
);
?>

<h1>Update Theloai <?php echo $model->id_theloai; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>