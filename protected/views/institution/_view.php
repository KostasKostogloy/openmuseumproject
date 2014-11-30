<?php
/* @var $this InstitutionController */
/* @var $data Institution */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GID')); ?>:</b>
	<?php echo CHtml::encode($data->GID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMEGRK')); ?>:</b>
	<?php echo CHtml::encode($data->NAMEGRK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PHONE')); ?>:</b>
	<?php echo CHtml::encode($data->PHONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIMOS')); ?>:</b>
	<?php echo CHtml::encode($data->DIMOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NEWCAT')); ?>:</b>
	<?php echo CHtml::encode($data->NEWCAT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NEWSUBCAT')); ?>:</b>
	<?php echo CHtml::encode($data->NEWSUBCAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dbpedia_url')); ?>:</b>
	<?php echo CHtml::encode($data->dbpedia_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abstract')); ?>:</b>
	<?php echo CHtml::encode($data->abstract); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wikipedia')); ?>:</b>
	<?php echo CHtml::encode($data->wikipedia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />

	*/ ?>

</div>