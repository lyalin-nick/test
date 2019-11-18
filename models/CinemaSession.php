<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cinema_session".
 *
 * @property int $id
 * @property int $film_id
 * @property string $date
 * @property string $time
 * @property double $value
 */
class CinemaSession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cinema_session';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['film_id'], 'integer'],
            [['date', 'time'], 'safe'],
            [['value'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'film_id' => 'Фильм',
            'date' => 'Дата показа',
            'time' => 'Время показа',
            'value' => 'Цена билета',
        ];
    }

    /**
     * Название фильма
     *
     * @return string
     */
    public function getFilmTitle(){
        return Film::findOne($this->film_id)->title;
    }

    public function getFilmImage(){
        return Yii::getAlias('@web').''.Film::findOne($this->film_id)->image_ext;
    }
}
