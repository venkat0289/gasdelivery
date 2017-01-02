<?php
/* @var $this AreaController */
/* @var $model area */

$this->breadcrumbs=array(
	'Area'=>array('index'),
	$model->area_name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List area', 'url'=>array('index')),
	array('label'=>'Add New Area', 'url'=>array('create')),
	array('label'=>'View area', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Area List', 'url'=>array('admin')),
);
?>

<h1>Update Area <?php //echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>