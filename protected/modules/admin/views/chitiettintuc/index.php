<?php
/* @var $this ChitiettintucController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Chitiettintucs',
);

$this->menu=array(
	array('label'=>'Create Chitiettintuc', 'url'=>array('create')),
	array('label'=>'Manage Chitiettintuc', 'url'=>array('admin')),
);
?>

<h1>Chi tiết tin tức</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
