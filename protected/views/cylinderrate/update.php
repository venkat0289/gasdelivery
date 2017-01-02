<?php
/* @var $this CylinderrateController */
/* @var $model cylinderrate */

$this->breadcrumbs=array(
	'Cylinder Rates'=>array('index'),
	$model->cylinder_type=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List cylinderrate', 'url'=>array('index')),
	array('label'=>'Set New Cylinder Rate', 'url'=>array('create')),
	array('label'=>'View Cylinder Rate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Cylinder Rate List', 'url'=>array('admin')),
);
?>

<h1>Update Cylinder Rate <?php //echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>