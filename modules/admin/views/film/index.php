<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FilmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фильмы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить фильм', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'Постер фильма',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Yii::getAlias('@web').''.$data->image_ext,[
                        'alt'=>'Постер фильма',
                        'style' => 'width:200px;'
                    ]);
                },
            ],
            'title',
            'preview:ntext',
            'time',
            'age_restrict',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
