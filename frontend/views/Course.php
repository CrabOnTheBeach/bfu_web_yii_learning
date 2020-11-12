<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Course */
/* @var $form ActiveForm */
?>
<div class="Course">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'link_to_video') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Course -->
