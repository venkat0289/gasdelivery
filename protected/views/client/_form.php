<?php
/* @var $this ClientController */
/* @var $model client */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'client_name'); ?>
		<?php echo $form->textField($model,'client_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'client_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consumer_number'); ?>
		<?php echo $form->textField($model,'consumer_number',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'consumer_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'mobile_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area'); ?>
		<?php //echo $form->textField($model,'area',array('size'=>60,'maxlength'=>250)); 
			echo $form->dropDownList($model,'area',CHtml::listData(area::model()->findAll(array('order' => 'area_name ASC')), 'id', 'area_name'), array('empty'=>'--Select--'));?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_cylinder'); ?>
		<?php //echo $form->textField($model,'type_of_cylinder'); 
				echo $form->dropDownList($model,'type_of_cylinder',CHtml::listData(cylinderrate::model()->findAll(array('order' => 'cylinder_type ASC')), 'id', 'cylinder_type'), array('empty'=>'--Select--'));?>
		<?php echo $form->error($model,'type_of_cylinder'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add Client' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->