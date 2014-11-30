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
            <strong>Συγχαρητήρια!</strong><br /><br />
            <?php echo $num_records; ?> εγγραφές ενημερώθηκαν με επιτυχία
        </div>
    </div>
</div>