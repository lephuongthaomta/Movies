<?php
/* @var $this KtgController */
/* @var $data Ktg */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_KTG')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_KTG), array('view', 'id'=>$data->id_KTG)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ngaychieu')); ?>:</b>
	<?php echo CHtml::encode($data->ngaychieu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('giochieu')); ?>:</b>
	<?php echo CHtml::encode($data->giochieu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />


</div>