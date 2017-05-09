<?php
/* @var $this PhimController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Phims',
);

$this->menu=array(
	array('label'=>'Create Phim', 'url'=>array('create')),
	array('label'=>'Manage Phim', 'url'=>array('admin')),
);
?>

<h1>Phims</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
