<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "klinik-master".
 *
 * @property int $id
 * @property string $wilayah
 * @property string $user
 * @property string $pegawai
 * @property string $tindakan
 * @property string $obat
 */
class KlinikMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'klinik-master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'wilayah', 'user', 'pegawai', 'tindakan', 'obat'], 'required'],
            [['id'], 'integer'],
            [['wilayah'], 'string', 'max' => 25],
            [['user', 'pegawai', 'tindakan', 'obat'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wilayah' => 'Wilayah',
            'user' => 'User',
            'pegawai' => 'Pegawai',
            'tindakan' => 'Tindakan',
            'obat' => 'Obat',
        ];
    }
}
