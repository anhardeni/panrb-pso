<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RekapPso1;

/**
 * RekapPso1Search represents the model behind the search form of `app\models\RekapPso1`.
 */
class RekapPso1Search extends RekapPso1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','eksisting_pso_iii', 'eksisting_pso_iv', 'eksisting_pso_v', 'jumlah_eksisting', 'pso_baru_iii', 'pso_baru_iv', 'pso_baru_v', 'jumlah_pso_baru', 'pso_akhir_iii', 'pso_akhir_iv', 'pso_akhir_v'], 'integer'],
            [['asn', 'jenis_lembaga', 'instansi', 'daerah', 'no_srt_usulan', 'tgl_srt_usulan', 'analisa'], 'safe'],
            [['persentase_pso_iii', 'persentase_pso_iv', 'persentase_pso_v'], 'number'],
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
        $query = RekapPso1::find();

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
           
            'tgl_srt_usulan' => $this->tgl_srt_usulan,
            'eksisting_pso_iii' => $this->eksisting_pso_iii,
            'eksisting_pso_iv' => $this->eksisting_pso_iv,
            'eksisting_pso_v' => $this->eksisting_pso_v,
            'jumlah_eksisting' => $this->jumlah_eksisting,
            'pso_baru_iii' => $this->pso_baru_iii,
            'pso_baru_iv' => $this->pso_baru_iv,
            'pso_baru_v' => $this->pso_baru_v,
            'jumlah_pso_baru' => $this->jumlah_pso_baru,
            'pso_akhir_iii' => $this->pso_akhir_iii,
            'pso_akhir_iv' => $this->pso_akhir_iv,
            'pso_akhir_v' => $this->pso_akhir_v,
            'persentase_pso_iii' => $this->persentase_pso_iii,
            'persentase_pso_iv' => $this->persentase_pso_iv,
            'persentase_pso_v' => $this->persentase_pso_v,
        ]);

        $query->andFilterWhere(['like', 'asn', $this->asn])
            ->andFilterWhere(['like', 'jenis_lembaga', $this->jenis_lembaga])
            ->andFilterWhere(['like', 'instansi', $this->instansi])
            ->andFilterWhere(['like', 'daerah', $this->daerah])
            ->andFilterWhere(['like', 'no_srt_usulan', $this->no_srt_usulan])
            ->andFilterWhere(['like', 'analisa', $this->analisa]);

        return $dataProvider;
    }
}
