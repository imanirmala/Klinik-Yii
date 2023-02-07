<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regsitrasi".
 *
 * @property int $id_registrasi
 * @property int $id_pasien
 * @property int $id_tindakan
 * @property int $tot_biaya
 * @property string $deskripsi
 */
class Regsitrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regsitrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_tindakan', 'tot_biaya', 'deskripsi'], 'required'],
            [['id_pasien', 'id_tindakan', 'tot_biaya'], 'integer'],
            [['deskripsi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_registrasi' => 'Id Registrasi',
            'id_pasien' => 'Nama Pasien',
            'id_tindakan' => 'Tindakan',
            'tot_biaya' => 'Tot Biaya',
            'deskripsi' => 'Deskripsi',
        ];
    }

    public function getTindakan()
    {
        return $this->hasOne(TindakanPasien::className(), ['id_tindakan' => 'id_tindakan']);
    }

    public function getPasien()
    {
        return $this->hasOne(Tpasien::className(), ['id_pasien' => 'id_pasien']);
    }
}
