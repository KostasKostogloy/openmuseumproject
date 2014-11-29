<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);
?>

<h2><?=Yii::t('user','Προβολή χρήστη ')?><?php echo $model->username; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'email',
		'role',
	),
	'htmlOptions' => array(
		'class'=> 'table table-condensed table-striped',
	),
)); ?>
