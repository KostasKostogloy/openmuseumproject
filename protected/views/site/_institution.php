<div class="col-lg-6">
    <div class="col-lg-6">
        <img src="<?=($data->thumbnail == NULL)? Yii::app()->baseUrl.'/images/placeholder.png':$data->thumbnail;?>" />
    </div>
    <div class="col-lg-6">
        <h3><?=$data->NAMEGRK;?></h3>
        <p><?=$data->abstract;?></p>
    </div>
</div>

<?php if ($index%2):?>
<div class="clearfix"></div>
</div><div class="row" style="margin-top: 30px !important;">
<?php endif; ?>
