<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?=Yii::t('form','Τα πεδία με ')?><span class="required">*</span><?=Yii::t('form',' είναι υποχρεωτικά.')?></p>

	<?php echo $form->errorSummary($model); ?>


	<div class="form-group row">
		<?php echo $form->labelEx($model,'username',array('for'=>'User_username','class'=> 'col-sm-3'));?>
		<div class="col-sm-9">
			<?php echo $form->textField($model,'username',array('size'=>14,'maxlength'=>14,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'password',array('for' => 'User_password','class'=> 'col-sm-3')); ?>
		<div class="col-sm-9">
			<?php echo $form->passwordField($model,'password',array('size'=>14,'maxlength'=>14,'class'=>'form-control','value'=>'')); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'email',array('for' => 'User_email','class'=> 'col-sm-3')); ?>
		<div class="col-sm-9">
			<?php echo $form->textField($model,'email',array('size'=>14,'maxlength'=>14,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>

	<div class="form-group">
            <div class="col-sm-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('form','Δημιουργία'): Yii::t('form','Αποθήκευση'),array('class'=>'btn btn-primary')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->