<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Film */

$this->title = 'Добавить фильм';
$this->params['breadcrumbs'][] = ['label' => 'Фильмы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
