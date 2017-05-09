<?php
/* @var $this GheController */
/* @var $data Ghe */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ghe')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ghe), array('view', 'id'=>$data->id_ghe)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_loaighe')); ?>:</b>
	<?php echo CHtml::encode($data->id_loaighe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_trangthai')); ?>:</b>
	<?php echo CHtml::encode($data->id_trangthai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soLuongGhe')); ?>:</b>
	<?php echo CHtml::encode($data->soLuongGhe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soHang')); ?>:</b>
	<?php echo CHtml::encode($data->soHang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soCot')); ?>:</b>
	<?php echo CHtml::encode($data->soCot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>