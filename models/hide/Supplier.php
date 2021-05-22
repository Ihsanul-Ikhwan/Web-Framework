<?php
namespace app\models;
use yii\db\ActiveRecord;

class Supplier extends ActiveRecord{
	public static function tableName(){
		return 'supplier';
	}

	public function rules(){
		return [
			[['nm_supplier','telp','email','alamat'],'required'],
			[['nm_supplier','telp','alamat'],'string'],
			[['email'],'email'],
			[['id'],'integer'],
		];
	}
}