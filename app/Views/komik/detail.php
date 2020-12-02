<?php

use App\Controllers\Komik;
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <h1 class="my-3">Detail Komik</h1>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text">Penulis : <?= $komik['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"> Penerbit : <?= $komik['penerbit']; ?></small></p>


                            <a href="/komik/edit/<?= $komik['slug'] ?>" class="btn btn-warning">Edit</a>

                            <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                                <?php csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('yakin mau delete?');">Hapus</button>
                            </form>

                            <a href="<?= base_url('/komik') ?>" class="back">Kembali Ke Komik</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>