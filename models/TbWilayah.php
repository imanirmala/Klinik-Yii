<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_wilayah".
 *
 * @property int $id_wilayah
 * @property string $name
 */
class TbWilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'name' => 'Name',
        ];
    }
}
