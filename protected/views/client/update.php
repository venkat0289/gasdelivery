<?php
/* @var $this ClientController */
/* @var $model client */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->client_name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List client', 'url'=>array('index')),
	array('label'=>'Add New Client', 'url'=>array('create')),
	array('label'=>'View Client', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Clients List', 'url'=>array('admin')),
);
?>

<h1>Update Client <?php //echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>