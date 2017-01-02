<?php
/* @var $this CylinderrateController */
/* @var $model cylinderrate */

$this->breadcrumbs=array(
	'Cylinder Rates'=>array('index'),
	$model->cylinder_type,
);

$this->menu=array(
	//array('label'=>'List cylinderrate', 'url'=>array('index')),
	array('label'=>'Set New Cylinder Rate', 'url'=>array('create')),
	array('label'=>'Update Cylinder Rate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cylinder Rate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Cylinder Rate List', 'url'=>array('admin')),
);
?>

<h1>View Cylinder Rate <?php //echo $model->cylinder_type; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'cylinder_type',
		'price',
		//'flag',
	),
)); ?>
