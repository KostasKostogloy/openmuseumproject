<?php
/* @var $this InstitutionController */
/* @var $model Institution */

$this->breadcrumbs=array(
	'Institutions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Institution', 'url'=>array('index')),
	array('label'=>'Manage Institution', 'url'=>array('admin')),
);
?>

<div class="row">
    <div class="col-md-3">
        <?php $this->renderPartial('//user/_sidebar');?>
    </div>
    <div class="col-md-9">
        <h3 class="text-primary" style="margin-top:0;">Δημιουργία</h3>
        <hr />
        <div class="form form-horizontal well">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div> 
    </div>
</div>
