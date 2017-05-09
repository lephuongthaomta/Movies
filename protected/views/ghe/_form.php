<?php
/* @var $this GheController */
/* @var $model Ghe */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ghe-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ghe'); ?>
		<?php echo $form->textField($model,'id_ghe'); ?>
		<?php echo $form->error($model,'id_ghe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_loaighe'); ?>
		<?php echo $form->textField($model,'id_loaighe'); ?>
		<?php echo $form->error($model,'id_loaighe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_trangthai'); ?>
		<?php echo $form->textField($model,'id_trangthai'); ?>
		<?php echo $form->error($model,'id_trangthai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soLuongGhe'); ?>
		<?php echo $form->textField($model,'soLuongGhe'); ?>
		<?php echo $form->error($model,'soLuongGhe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soHang'); ?>
		<?php echo $form->textField($model,'soHang'); ?>
		<?php echo $form->error($model,'soHang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soCot'); ?>
		<?php echo $form->textField($model,'soCot'); ?>
		<?php echo $form->error($model,'soCot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->