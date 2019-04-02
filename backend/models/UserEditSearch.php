<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserEdit;

/**
 * UserEditSearch represents the model behind the search form of `common\models\UserEdit`.
 */
class UserEditSearch extends UserEdit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'active', 'fullname', 'address', 'id_prov', 'id_kab', 'id_kec', 'id_kel', 'nomorHandphone', 'nomorRumah', 'foto'], 'safe'],
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
        $query = UserEdit::find();

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

        if($this->active == 'both')
        {
            unset($this->active);
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['NOT LIKE', 'active', 'admin'])
            ->andFilterWhere(['like', 'active', $this->active])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'id_prov', $this->id_prov])
            ->andFilterWhere(['like', 'id_kab', $this->id_kab])
            ->andFilterWhere(['like', 'id_kec', $this->id_kec])
            ->andFilterWhere(['like', 'id_kel', $this->id_kel])
            ->andFilterWhere(['like', 'nomorHandphone', $this->nomorHandphone])
            ->andFilterWhere(['like', 'nomorRumah', $this->nomorRumah])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
