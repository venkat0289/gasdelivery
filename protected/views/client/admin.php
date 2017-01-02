<?php
/* @var $this ClientController */
/* @var $model client */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List client', 'url'=>array('index')),
	array('label'=>'Add New Client', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#client-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Clients</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
 -->
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!-- <div class="search-form" style="display:none"> -->
<?php //$this->renderPartial('_search',array('model'=>$model,)); ?>
<!--  </div> -->
<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'client-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'client_name',
		'consumer_number',
		'mobile_number',
		'address',
		'areaname.area_name',
		'cylinderrate.cylinder_type',
		//'type_of_cylinder',
		/*'created_datetime',
		'updated_datetime',
		'flag',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
