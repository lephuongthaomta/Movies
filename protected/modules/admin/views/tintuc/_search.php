<?php
/* @var $this TintucController */
/* @var $model Tintuc */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tintuc'); ?>
		<?php echo $form->textField($model,'id_tintuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_chitiettintuc'); ?>
		<?php echo $form->textField($model,'id_chitiettintuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tieude'); ?>
		<?php echo $form->textField($model,'tieude',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trangthai'); ?>
		<?php echo $form->textField($model,'trangthai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mota'); ?>
		<?php echo $form->textArea($model,'mota',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'binhluan'); ?>
		<?php echo $form->textArea($model,'binhluan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_add'); ?>
		<?php echo $form->textField($model,'date_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_upd'); ?>
		<?php echo $form->textField($model,'date_upd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_thanhvien'); ?>
		<?php echo $form->textField($model,'id_thanhvien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soluongBL'); ?>
		<?php echo $form->textField($model,'soluongBL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_description'); ?>
		<?php echo $form->textArea($model,'image_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_content'); ?>
		<?php echo $form->textArea($model,'image_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->