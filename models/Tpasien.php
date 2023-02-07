<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tpasien".
 *
 * @property int $id_pasien
 * @property string $name
 * @property string $jenis_kelamin
 * @property string $keluhan
 * @property string $alamat
 */
class Tpasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tpasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'jenis_kelamin', 'keluhan', 'alamat'], 'required'],
            [['name', 'jenis_kelamin', 'alamat'], 'string', 'max' => 255],
            [['keluhan'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'name' => 'Name',
            'jenis_kelamin' => 'Jenis Kelamin',
            'keluhan' => 'Keluhan',
            'alamat' => 'Alamat',
        ];
    }
}
