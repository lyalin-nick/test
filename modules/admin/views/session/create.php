<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CinemaSession */

$this->title = 'Создать новый сеанс';
$this->params['breadcrumbs'][] = ['label' => 'Создать сеанс', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cinema-session-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
            'model' => $model,
            'film_options' => $film_options,
    ]) ?>

</div>
