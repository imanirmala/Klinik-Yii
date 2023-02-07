<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_obat".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $expired_date
 */
class TbObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'expired_date'], 'required'],
            [['expired_date'], 'safe'],
            [['name', 'description'], 'string', 'max' => 255],
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
            'expired_date' => 'Expired Date',
        ];
    }
}
