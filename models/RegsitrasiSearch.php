<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Regsitrasi;

/**
 * RegsitrasiSearch represents the model behind the search form of `app\models\Regsitrasi`.
 */
class RegsitrasiSearch extends Regsitrasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_registrasi', 'id_pasien', 'id_tindakan', 'tot_biaya'], 'integer'],
            [['deskripsi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Regsitrasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_registrasi' => $this->id_registrasi,
            'id_pasien' => $this->id_pasien,
            'id_tindakan' => $this->id_tindakan,
            'tot_biaya' => $this->tot_biaya,
        ]);

        $query->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
