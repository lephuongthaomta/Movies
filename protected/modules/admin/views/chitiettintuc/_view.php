<?php
/* @var $this ChitiettintucController */
/* @var $data Chitiettintuc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_chitiettintuc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_chitiettintuc), array('view', 'id'=>$data->id_chitiettintuc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ten')); ?>:</b>
	<?php echo CHtml::encode($data->ten); ?>
	<br />


</div>