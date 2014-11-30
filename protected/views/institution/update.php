<?php
/* @var $this InstitutionController */
/* @var $model Institution */

$this->breadcrumbs=array(
	'Institutions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Institution', 'url'=>array('index')),
	array('label'=>'Create Institution', 'url'=>array('create')),
	array('label'=>'View Institution', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Institution', 'url'=>array('admin')),
);
?>

<h1>Update Institution <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>