<?php
/* @var $this SentsmsController */
/* @var $model sentsms */

$this->breadcrumbs=array(
	'Sentsms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List sentsms', 'url'=>array('index')),
	array('label'=>'Create sentsms', 'url'=>array('create')),
	array('label'=>'View sentsms', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage sentsms', 'url'=>array('admin')),
);
?>

<h1>Update sentsms <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>