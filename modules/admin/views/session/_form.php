<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CinemaSession */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cinema-session-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'film_id')->dropDownList($film_options) ?>

    <?= $form->field($model, 'timestamp')->input(date) ?>

    <?= $form->field($model, 'value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
