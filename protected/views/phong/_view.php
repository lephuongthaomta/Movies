<?php
/* @var $this PhongController */
/* @var $data Phong */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenPhong')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tenPhong), array('view', 'id'=>$data->tenPhong)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_phongchieu')); ?>:</b>
	<?php echo CHtml::encode($data->id_phongchieu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loaiPhong')); ?>:</b>
	<?php echo CHtml::encode($data->loaiPhong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soHangMax')); ?>:</b>
	<?php echo CHtml::encode($data->soHangMax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soCotMax')); ?>:</b>
	<?php echo CHtml::encode($data->soCotMax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />


</div>