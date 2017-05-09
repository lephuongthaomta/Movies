<?php
/* @var $this ChitiettintucController */
/* @var $model Chitiettintuc */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_chitiettintuc'); ?>
		<?php echo $form->textField($model,'id_chitiettintuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ten'); ?>
		<?php echo $form->textField($model,'ten',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->