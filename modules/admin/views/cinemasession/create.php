<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CinemaSession */

$this->title = 'Новый сеанс';
$this->params['breadcrumbs'][] = ['label' => 'Сеанс', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cinema-session-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'film_items' => $film_items,
    ]) ?>

</div>
