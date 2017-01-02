<?php
/* @var $this AreaController */
/* @var $model area */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'area-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'area_name'); ?>
		<?php echo $form->textField($model,'area_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'area_name'); ?>
	</div>

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'created_datetime'); ?>
		<?php //echo $form->textField($model,'created_datetime'); ?>
		<?php //echo $form->error($model,'created_datetime'); ?>
	<!-- </div> -->

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'updated_datetime'); ?>
		<?php //echo $form->textField($model,'updated_datetime'); ?>
		<?php //echo $form->error($model,'updated_datetime'); ?>
	<!-- </div> -->

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'flag'); ?>
		<?php //echo $form->textField($model,'flag',array('size'=>1,'maxlength'=>1)); ?>
		<?php //echo $form->error($model,'flag'); ?>
	<!-- </div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->