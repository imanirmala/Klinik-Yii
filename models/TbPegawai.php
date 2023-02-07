<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pegawai".
 *
 * @property int $id
 * @property string $name
 * @property int $id_wilayah
 * @property string $nip
 * @property string $addres
 */
class TbPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_wilayah', 'nip', 'addres'], 'required'],
            [['id_wilayah'], 'integer'],
            [['name', 'addres'], 'string', 'max' => 255],
            [['nip'], 'string', 'max' => 15],
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
            'id_wilayah' => 'Id Wilayah',
            'nip' => 'Nip',
            'addres' => 'Addres',
        ];
    }

    public function getWilayah()
    {
        return $this->hasOne(TbWilayah::className(), ['id_wilayah' => 'id_wilayah']);
    }
}
