<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Me</h1>
            <?php foreach ($identitas as $i) : ?>
                <ul>
                    <li><?= $i['nama']; ?></li>
                    <li><?= $i['alamat']; ?></li>
                    <li><?= $i['telp']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>