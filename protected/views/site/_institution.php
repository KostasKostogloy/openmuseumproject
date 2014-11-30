<div class="col-lg-6">
    <div class="col-lg-6">
        <img src="<?=($data->thumbnail == NULL)? Yii::app()->baseUrl.'/images/placeholder.png':$data->thumbnail;?>" />
    </div>
    <div class="col-lg-6">
        <h3 style="margin-top:0;"><a href="<?=Yii::app()->createUrl('institute/view',array('id'=>$data->id))?>"><?=$data->NAMEGRK;?></a></h3>
        <p><?=(strlen($data->abstract) > 600) ? substr($data->abstract,0,600).'...' : $data->abstract;?></p>
    </div>
</div>

<?php if ($index%2):?>
<div class="clearfix"></div>
</div><div class="row" style="margin-top: 30px !important;">
<?php endif; ?>
