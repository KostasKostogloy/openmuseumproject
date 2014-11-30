<?php
/* @var $this InstitutionsController */

?>

<div class="row">
    <div class="col-md-3">
        <?php $this->renderPartial('//user/_sidebar');?>
    </div>
    <div class="col-md-9">
        <h3 class="text-primary" style="margin-top:0;"><?= Yii::t('data', 'Διαχείρηση Ινστιτούτων'); ?></h3>
        <hr />
        <div class="alert alert-dismissable alert-success">
            <strong>Well done!</strong><br /><br />
            You successfully imported <?php echo $num_records; ?> new records
        </div>
    </div>
</div>