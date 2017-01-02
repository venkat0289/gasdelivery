<?php
/* @var $this SentsmsController */
/* @var $model sentsms */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sentsms-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->
	
	<p class="note">Please type or paste your customer Ids to send message.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'message_id'); ?>
		<?php //echo $form->textField($model,'message_id'); ?>
		<?php //echo $form->error($model,'message_id'); ?>
	<!-- </div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'sms_content'); ?>
		<?php echo $form->textArea($model,'sms_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sms_content'); ?>
	</div>

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'status'); ?>
		<?php //echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php //echo $form->error($model,'status'); ?>
	<!-- </div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->