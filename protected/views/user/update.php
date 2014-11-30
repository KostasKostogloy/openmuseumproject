<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<div class="row">
    <div class="col-md-3">
        <?php $this->renderPartial('//user/_sidebar');?>
    </div>
    <div class="col-md-9">
        <h3 class="text-primary" style="margin-top:0;"><?=Yii::t('user','Επεξεργασία χρήστη: ')?> <?php echo $model->username; ?></h3>
        <hr />
        <div class="form form-horizontal">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div> 
    </div>
</div>