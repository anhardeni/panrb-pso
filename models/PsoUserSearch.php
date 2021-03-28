<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PsoMaster;

/**
 * PsoUserSearch represents the model behind the search form of `app\models\PsoMaster`.
 */
class PsoUserSearch extends PsoMaster
{
     public $userInstansi;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_instansi', 'eksisting_pso_iii', 'eksisting_pso_iv', 'eksisting_pso_v', 'pso_baru_iii', 'pso_baru_iv', 'pso_baru_v', 'pso_akhir_iii', 'pso_akhir_iv', 'pso_akhir_v', 'flag1_analisa_usulan', 'id_analis', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['jns_srt_usulan', 'no_srt_usulan', 'tgl_srt_usulan', 'ket_analisa', 'src_filename', 'web_filename', 'dok_filename'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = PsoMaster::find();

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
            'id' => $this->id,
            'id_instansi' => $this->id_instansi,
            'tgl_srt_usulan' => $this->tgl_srt_usulan,
            'eksisting_pso_iii' => $this->eksisting_pso_iii,
            'eksisting_pso_iv' => $this->eksisting_pso_iv,
            'eksisting_pso_v' => $this->eksisting_pso_v,
            'pso_baru_iii' => $this->pso_baru_iii,
            'pso_baru_iv' => $this->pso_baru_iv,
            'pso_baru_v' => $this->pso_baru_v,
            'pso_akhir_iii' => $this->pso_akhir_iii,
            'pso_akhir_iv' => $this->pso_akhir_iv,
            'pso_akhir_v' => $this->pso_akhir_v,
            'flag1_analisa_usulan' => $this->flag1_analisa_usulan,
            'id_analis' => $this->id_analis,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'jns_srt_usulan', $this->jns_srt_usulan])
            ->andFilterWhere(['like', 'no_srt_usulan', $this->no_srt_usulan])
            ->andFilterWhere(['like', 'ket_analisa', $this->ket_analisa])
            ->andFilterWhere(['like', 'src_filename', $this->src_filename])
            ->andFilterWhere(['like', 'web_filename', $this->web_filename])
            ->andFilterWhere(['like', 'dok_filename', $this->dok_filename]);

        return $dataProvider;
    }
}
