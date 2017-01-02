<?php
/* @var $this ClientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clients',
);

$this->menu=array(
	array('label'=>'Create client', 'url'=>array('create')),
	array('label'=>'Manage client', 'url'=>array('admin')),
);
?>

<h1>Clients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
