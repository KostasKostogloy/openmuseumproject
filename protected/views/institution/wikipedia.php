<?php
/* @var $this InstitutionsController */
?>

<div class="row">
    <div class="col-md-3">
        <?php $this->renderPartial('//user/_sidebar');?>
    </div>
    <div class="col-md-9">
        <h3 class="text-primary" style="margin-top:0;"><?php echo $model->NAMEGRK;?></h3>
        <hr />
        <div class="form form-horizontal">
            <img src="<?php echo $model->thumbnail;?>" style="float: left;padding-right: 20px;"/>
            <?php echo $model->abstract;?>
        </div> 
    </div>
</div>