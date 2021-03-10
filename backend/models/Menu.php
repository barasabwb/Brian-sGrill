<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $price
 * @property string $availability
 * @property string $img
 */
class Menu extends \yii\db\ActiveRecord
{
    public $upload;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'img'], 'integer'],
            [['name', 'description', 'availability'], 'string', 'max' => 50],
            [['upload'],'file', 'extensions'=>'png,jpg', 'mimeTypes'=>'image/jpeg, image/png']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'availability' => 'Availability',
            'upload' => 'Picture',
        ];
    }
}
