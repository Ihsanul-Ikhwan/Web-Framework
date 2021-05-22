<?php
namespace app\models;
use yii\db\ActiveRecord;

class Jenis extends ActiveRecord{
	public static function tableName(){
		return 'jenis';
	}

	public function rules(){
		return [
			[['nm_jenis','ket'],'required'],
			[['nm_jenis','ket'],'string'],
			[['id'],'integer'],
		];
	}
}