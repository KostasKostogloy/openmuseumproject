<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/ckeditor/ckeditor.js'
);
?>

<h2 class="text-primary"><?=Yii::t('contact','Επικοινωνία')?></h2>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>


<div class="form well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	
	<p class="text-danger"><?=Yii::t('form','Τα πεδία με ')?><span class="required">*</span><?=Yii::t('form',' είναι υποχρεωτικά.')?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'name',array('for'=>'ContactForm_name')); ?>
		<?php echo $form->textField($model,'name',array('size'=>14,'maxlength'=>14,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'email',array('for'=>'ContactForm_email')); ?>
		<?php echo $form->textField($model,'email',array('size'=>14,'maxlength'=>14,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'subject',array('for'=>'ContactForm_subject')); ?>
		<?php echo $form->textField($model,'subject',array('size'=>14,'maxlength'=>14,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'body',array('for'=>'ContactForm_body')); ?>
		<?php echo $form->textArea($model,'body',array('class'=>'ckeditor')); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha',array('buttonLabel'=>Yii::t('contact','Νέα εικόνα'))); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<p><?=Yii::t('contact','Παρακαλώ πληκτρολογήστε τα γράμματα που φαίνονται στην παραπάνω εικόνα.')?>
		<?php echo $form->error($model,'verifyCode'); ?>
	<?php endif; ?>

		<?php echo CHtml::submitButton(Yii::t('contact','Αποστολή'),array('class'=>'btn btn-primary')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>