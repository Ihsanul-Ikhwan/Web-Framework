<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title="Data Supplier";
?>

<h1>Data Supplier</h1>
<p><?= Html::a('Tambahkan Supplier', ['create'], ['class' => 'btn btn-success']) ?></p>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>NAMA SUPPLIER</td>
		<td>NO. TELP</td>
		<td>E-MAIL</td>
		<td>ALAMAT</td>
		<td>AKSI</td>
	</tr>
	<?php 
    $no = 1;
    foreach($data_supplier as $supplier):?>
		<tr>
			<td><?=$no;?></td>
			<td><?= Html::encode($supplier->nm_supplier) ?></td>
			<td><?= Html::encode($supplier->telp) ?></td>
			<td><?= Html::encode($supplier->email) ?></td>
			<td><?= Html::encode($supplier->alamat) ?></td>
			<td>
			<?= Html::a('Edit',['supplier/update','id'=>$supplier->id])?> |
			<?= Html::a('Hapus',['supplier/delete','id'=>$supplier->id],
			['onclick'=>'return(confirm("Yakin Menghapus Data ?"))'])?>
			</td>
		</tr>
		<?php $no++; ?>
	<?php endforeach; ?>
</table>
<?= LinkPager:: widget(['pagination' => $pagination]) ?>