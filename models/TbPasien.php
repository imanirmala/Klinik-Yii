<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pasien".
 *
 * @property int $id
 * @property string $name
 * @property int $jenis_kelamin
 * @property int $id_tindakan
 * @property string $addres
 * @property int $biaya
 */
class TbPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'jenis_kelamin', 'addres', 'biaya'], 'required'],
            [['name', 'addres'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'ID',
            'name' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            // 'id_tindakan' => 'Id Tindakan',
            'addres' => 'Alamat',
            'biaya' => 'Keluhan',
        ];
    }
}
