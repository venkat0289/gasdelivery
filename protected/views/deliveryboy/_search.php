<?php
/* @var $this DeliveryboyController */
/* @var $model deliveryboy */
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
		<?php echo $form->label($model,'delivery_boy_name'); ?>
		<?php echo $form->textField($model,'delivery_boy_name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_number'); ?>
		<?php echo $form->textField($model,'contact_number',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assigned_area'); ?>
		<?php echo $form->textField($model,'assigned_area',array('size'=>60,'maxlength'=>250)); ?>
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