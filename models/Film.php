<?php

namespace app\models;

use Yii;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "film".
 *
 * @property int $id
 * @property string $title
 * @property string $image_ext
 * @property string $preview
 * @property string $time
 * @property string $age_restrict
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preview'], 'string'],
            [['time'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['image_ext'], 'file', 'extensions' => 'png, jpg'],//, 'skipOnEmpty' => false, 'extensions' => 'png, jpg'
            [['age_restrict'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'image_ext' => 'Расширение картинки',
            'preview' => 'Описание фильма',
            'time' => 'Длительность',
            'age_restrict' => 'Возрастные ограничения',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            if(!file_exists('uploads/')) {
                FileHelper::createDirectory('uploads/');
            }
            if(!file_exists('uploads/images/')){
                FileHelper::createDirectory( 'uploads/images/');
            }
            $this->image_ext->saveAs('uploads/images/' . $this->id . '.' . $this->image_ext->extension);
            $this->image_ext='/uploads/images/' . $this->id . '.' . $this->image_ext->extension;
            $this->save();
            return true;
        } else {
            return false;
        }
    }
}
