<?php
/* @var $this CylinderrateController */
/* @var $model cylinderrate */

$this->breadcrumbs=array(
	'Cylinder Rates'=>array('index'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List cylinderrate', 'url'=>array('index')),
	array('label'=>'Cylinder Rate List', 'url'=>array('admin')),
);
?>

<h1>Set Cylinder Rate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>