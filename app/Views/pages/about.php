<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>About Me</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Dolorum dolor officiis, nisi repellat, quam itaque maxime, rem delectus doloremque autem tempore minima obcaecati
                nam similique neque ducimus praesentium assumenda aliquam.</p>
            <p><?= $identitas['nama']; ?></p>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>