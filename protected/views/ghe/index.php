<?php
/* @var $this GheController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ghes',
);

$this->menu=array(
	array('label'=>'Create Ghe', 'url'=>array('create')),
	array('label'=>'Manage Ghe', 'url'=>array('admin')),
);
?>

<h1>Ghes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
