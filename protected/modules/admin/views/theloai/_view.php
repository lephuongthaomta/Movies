<?php
/* @var $this TheloaiController */
/* @var $data Theloai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_theloai')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_theloai), array('view', 'id'=>$data->id_theloai)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenLoad')); ?>:</b>
	<?php echo CHtml::encode($data->tenLoad); ?>
	<br />


</div>