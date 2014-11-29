<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);
?>

<h2><?=Yii::t('user','Νέος Χρήστης')?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>