<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */
/* @var $form ActiveForm */
?>
<div class="site-formComment">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'content') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'author') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'post_id') ?>
        <?= $form->field($model, 'create_time') ?>
        <?= $form->field($model, 'url') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
<?php
if (Yii::$app->user->isGuest) { ?>
    <?= $form->field($model, 'author')->textinput(['style'=>'width:50%;']) ?>
    <?= $form->field($model, 'email')->textinput(['style'=>'width:50%;']) ?>
    <?= $form->field($model, 'url') ?>
<?php
}
?>
 
<?= $form->field($model, 'content')->textarea(['rows'=>3]) ?>
<?php
//$form->field($model, 'status')
//$form->field($model, 'post_id')
//$form->field($model, 'create_time')
?>
</div><!-- site-formComment -->
