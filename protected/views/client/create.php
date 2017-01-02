<?php
/* @var $this ClientController */
/* @var $model client */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Add New Client',
);

$this->menu=array(
	//array('label'=>'List client', 'url'=>array('index')),
	array('label'=>'Clients List', 'url'=>array('admin')),
);
?>

<h1>Add New Client</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>