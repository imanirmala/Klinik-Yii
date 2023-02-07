<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan_pasien".
 *
 * @property int $id_tindakan
 * @property string $name
 * @property int $biaya
 * @property string $deskripsi
 */
class TindakanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'biaya', 'deskripsi'], 'required'],
            [['biaya'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['deskripsi'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'name' => 'Name',
            'biaya' => 'Biaya',
            'deskripsi' => 'Deskripsi',
        ];
    }
}
