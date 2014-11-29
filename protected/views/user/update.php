<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<h2><?=Yii::t('user','Επεξεργασία χρήστη: ')?> <?php echo $model->username; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>