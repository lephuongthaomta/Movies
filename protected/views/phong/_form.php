<?php
/* @var $this PhongController */
/* @var $model Phong */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'phong-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_phongchieu'); ?>
		<?php echo $form->textField($model,'id_phongchieu'); ?>
		<?php echo $form->error($model,'id_phongchieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tenPhong'); ?>
		<?php echo $form->textField($model,'tenPhong',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tenPhong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loaiPhong'); ?>
		<?php echo $form->textField($model,'loaiPhong'); ?>
		<?php echo $form->error($model,'loaiPhong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soHangMax'); ?>
		<?php echo $form->textField($model,'soHangMax'); ?>
		<?php echo $form->error($model,'soHangMax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soCotMax'); ?>
		<?php echo $form->textField($model,'soCotMax'); ?>
		<?php echo $form->error($model,'soCotMax'); ?>
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