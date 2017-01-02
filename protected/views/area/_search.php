<?php
/* @var $this AreaController */
/* @var $model area */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_name'); ?>
		<?php echo $form->textField($model,'area_name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_datetime'); ?>
		<?php echo $form->textField($model,'created_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_datetime'); ?>
		<?php echo $form->textField($model,'updated_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flag'); ?>
		<?php echo $form->textField($model,'flag',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->