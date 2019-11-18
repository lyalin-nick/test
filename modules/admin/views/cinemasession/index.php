<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CinemaSessionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сеансы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cinema-session-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать сеанс', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            [
                'attribute'=>'film_id',
                'label'=>'Фильм',
                'content'=>function($data){
                    return $data->getFilmTitle();
                }
            ],
            [
                'attribute' => 'date',
                'format' =>  ['date', 'd.M.Y'],
            ],
            [
                'attribute' => 'time',
                'format' =>  ['time', 'H:m'],
            ],
            'value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
