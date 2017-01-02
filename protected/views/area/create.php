<?php
/* @var $this AreaController */
/* @var $model area */

$this->breadcrumbs=array(
	'Areas'=>array('index'),
	'Add',
);

$this->menu=array(
	//array('label'=>'List area', 'url'=>array('index')),
	array('label'=>'Area List', 'url'=>array('admin')),
);
?>

<h1>Add New Area</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>