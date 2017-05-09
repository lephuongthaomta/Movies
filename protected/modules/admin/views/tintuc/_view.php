<?php
/* @var $this TintucController */
/* @var $data Tintuc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tintuc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tintuc), array('view', 'id'=>$data->id_tintuc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_chitiettintuc')); ?>:</b>
	<?php echo CHtml::encode($data->id_chitiettintuc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tieude')); ?>:</b>
	<?php echo CHtml::encode($data->tieude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trangthai')); ?>:</b>
	<?php echo CHtml::encode($data->trangthai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mota')); ?>:</b>
	<?php echo CHtml::encode($data->mota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('binhluan')); ?>:</b>
	<?php echo CHtml::encode($data->binhluan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_add')); ?>:</b>
	<?php echo CHtml::encode($data->date_add); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_upd')); ?>:</b>
	<?php echo CHtml::encode($data->date_upd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_thanhvien')); ?>:</b>
	<?php echo CHtml::encode($data->id_thanhvien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soluongBL')); ?>:</b>
	<?php echo CHtml::encode($data->soluongBL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_description')); ?>:</b>
	<?php echo CHtml::encode($data->image_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_content')); ?>:</b>
	<?php echo CHtml::encode($data->image_content); ?>
	<br />

	 ?>

</div>