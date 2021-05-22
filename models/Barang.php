<?php
namespace app\models;
use yii\db\ActiveRecord;

class Barang extends ActiveRecord{
	public static function tableName(){
		return 'barang';
	}

	public function rules(){
		return [
			[['kd_brg','nm_brg','satuan','id_jenis','id_supplier','harga','stok'],'required'],
			[['kd_brg','nm_brg','satuan'],'string'],
			[['harga'],'double'],
			[['id','id_jenis','id_supplier'],'integer'],
		];
	}
}