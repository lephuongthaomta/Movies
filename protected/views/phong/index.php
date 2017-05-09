<?php
/* @var $this PhongController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Phongs',
);

$this->menu=array(
	array('label'=>'Create Phong', 'url'=>array('create')),
	array('label'=>'Manage Phong', 'url'=>array('admin')),
);
?>

<h1>Phongs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
