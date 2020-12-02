<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-inline">
                <h1 class="my-3 float-left">Daftar Orang</h1>
                <div class="my-4">
                    <form class="form-inline my-4 my-lg-0 float-right" action="" method="post">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search for..." aria-label="Search" name="keyword">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
                    </form>
                </div>

            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + ($currentPage * 6) - 6; ?>
                    <?php foreach ($orang as $o) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $o['nama']; ?></td>
                            <td><?= $o['alamat']; ?></td>
                            <td><a href="" class="btn btn-info">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?= $pager->links('orang', 'orang_pagination') ?>
</div>
<?= $this->endSection(); ?>