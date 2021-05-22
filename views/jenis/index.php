<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title="Data Jenis";
?>

<h1>Data Jenis</h1>
<p><?= Html::a('Tambahkan Jenis Barang', ['create'], ['class' => 'btn btn-success']) ?></p>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>NAMA JENIS</td>
		<td>KETERANGAN</td>
		<td>Aksi</td>
	</tr>
	<?php 
    $no = 1;
    foreach($data_jenis as $jenis):?>
		<tr>
			<td><?=$no;?></td>
			<td><?= Html::encode($jenis->nm_jenis) ?></td>
			<td><?= Html::encode($jenis->ket) ?></td>
			<td>
			<?= Html::a('Edit',['jenis/update','id'=>$jenis->id])?> |
			<?= Html::a('Hapus',['jenis/delete','id'=>$jenis->id],
			['onclick'=>'return(confirm("Yakin Menghapus Data ?"))'])?>
			</td>
		</tr>
		<?php $no++; ?>
	<?php endforeach; ?>
</table>
<?= LinkPager:: widget(['pagination' => $pagination]) ?>