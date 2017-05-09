<?php
/* @var $this PhongController */
/* @var $model Phong */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_phongchieu'); ?>
		<?php echo $form->textField($model,'id_phongchieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenPhong'); ?>
		<?php echo $form->textField($model,'tenPhong',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loaiPhong'); ?>
		<?php echo $form->textField($model,'loaiPhong'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soHangMax'); ?>
		<?php echo $form->textField($model,'soHangMax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soCotMax'); ?>
		<?php echo $form->textField($model,'soCotMax'); ?>
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