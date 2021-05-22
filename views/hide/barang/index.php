<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title="Data Barang";
?>

<h1>Data Barang</h1>
<p><?= Html::a('Tambahkan Barang', ['create'], ['class' => 'btn btn-success']) ?></p>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>KODE BARANG</td>
		<td>NAMA BARANG</td>
		<td>SATUAN</td>
		<td>KODE JENIS</td>
		<td>KODE SUPPLIER</td>
		<td>HARGA</td>
		<td>STOCK</td>
		<td>Aksi</td>
	</tr>
	<?php 
    $no = 1;
    foreach($data_barang as $barang):?>
    <tr>
        <td><?=$no;?></td>
			<td><?= Html::encode($barang->kd_brg) ?></td>
			<td><?= Html::encode($barang->nm_brg) ?></td>
			<td><?= Html::encode($barang->satuan) ?></td>
			<td><?= Html::encode($barang->id_jenis) ?></td>
			<td><?= Html::encode($barang->id_supplier) ?></td>
			<td><?= Html::encode($barang->harga) ?></td>
			<td><?= Html::encode($barang->stok) ?></td>
			<td>
			<?= Html::a('Edit',['barang/update','id'=>$barang->id])?> |
			<?= Html::a('Hapus',['barang/delete','id'=>$barang->id],
			['onclick'=>'return(confirm("Yakin Menghapus Data ?"))'])?>
			</td>
		</tr>
		<?php $no++; ?>
	<?php endforeach; ?>
</table>
<?= LinkPager:: widget(['pagination' => $pagination]) ?>