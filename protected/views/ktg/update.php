<?php
/* @var $this KtgController */
/* @var $model Ktg */

$this->breadcrumbs=array(
	'Ktgs'=>array('index'),
	$model->id_KTG=>array('view','id'=>$model->id_KTG),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ktg', 'url'=>array('index')),
	array('label'=>'Create Ktg', 'url'=>array('create')),
	array('label'=>'View Ktg', 'url'=>array('view', 'id'=>$model->id_KTG)),
	array('label'=>'Manage Ktg', 'url'=>array('admin')),
);
?>

<h1>Update Ktg <?php echo $model->id_KTG; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>