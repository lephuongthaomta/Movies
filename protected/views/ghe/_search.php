<?php
/* @var $this GheController */
/* @var $model Ghe */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ghe'); ?>
		<?php echo $form->textField($model,'id_ghe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_loaighe'); ?>
		<?php echo $form->textField($model,'id_loaighe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_trangthai'); ?>
		<?php echo $form->textField($model,'id_trangthai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soLuongGhe'); ?>
		<?php echo $form->textField($model,'soLuongGhe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soHang'); ?>
		<?php echo $form->textField($model,'soHang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soCot'); ?>
		<?php echo $form->textField($model,'soCot'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->