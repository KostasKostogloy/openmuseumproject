<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-lg-6">
                <img src="<?= ($data->thumbnail == NULL) ? Yii::app()->baseUrl . '/images/placeholder.png' : $data->thumbnail; ?>" />
            </div>
            <div class="col-lg-6">
                <h3 style="margin-top:0;"><a href="<?= Yii::app()->createUrl('institution/view', array('id' => $data->id)) ?>"><?= $data->NAMEGRK; ?></a></h3>
                <p><?= (strlen($data->abstract) > 200) ? mb_substr($data->abstract, 0, 200, 'utf-8') . ' ...' : $data->abstract; ?></p>
                <p>
                    <span class="label label-primary"><?= $data->DIMOS ?></span>
                    <span class="label label-info"><?= $data->NEWCAT ?></span>
                    <span class="label label-warning"><?= $data->NEWSUBCAT ?></span>
                </p>
            </div>
        </div>
    </div>
</div>

<?php if ($index%2):?>
<div class="clearfix"></div>
</div><div class="row" style="margin-top: 30px !important;">
<?php endif; ?>
