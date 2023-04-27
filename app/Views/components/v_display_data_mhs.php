<?= $this->extend('template/v_main_template'); ?>
<?= $this->section('content'); ?>
<div class="content-data-display">

<h3><?= $title ?></h3>
    <?php
		if(session()->getFlashdata('message')){
		?>
			<div class="alert alert-info">
				<?= session()->getFlashdata('message') ?>
			</div>
		<?php
		}
    ?>
    <div class="table-mhs">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?= $mhs['NIM'] ?></td>
                        <td><?= $mhs['NAMA'] ?></td>
                        <td><?= $mhs['UTS'] ?></td>
                        <td><?= $mhs['UAS'] ?></td>
                        <td><?= (($mhs['UTS']) * 0.45) + (($mhs['UAS']) * 0.55) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<style>
    .content-data-display {
        width: 80%;
        margin: 0 auto;
        margin-top: 10px;
    }
    .table-mhs {
        margin-top: 20px;
        box-shadow: 5px 5px gray;
        border: 1px solid black;
        border-radius: 5px;
    }
</style>


<?= $this->endSection(); ?>