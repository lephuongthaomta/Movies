<?php
/* @var $this KtgController */
/* @var $model Ktg */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_KTG'); ?>
		<?php echo $form->textField($model,'id_KTG'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ngaychieu'); ?>
		<?php echo $form->textField($model,'ngaychieu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'giochieu'); ?>
		<?php echo $form->textField($model,'giochieu'); ?>
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