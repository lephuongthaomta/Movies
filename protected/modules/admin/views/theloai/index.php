<?php
/* @var $this TheloaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Theloais',
);

$this->menu=array(
	array('label'=>'Create Theloai', 'url'=>array('create')),
	array('label'=>'Manage Theloai', 'url'=>array('admin')),
);
?>

<h1>Theloais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
