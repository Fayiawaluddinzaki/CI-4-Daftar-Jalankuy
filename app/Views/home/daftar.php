<?= $this->extend('temp/headfoot'); ?>
<?= $this->section('content'); ?>
<!-- isi content -->
<title>Pendaftaran Trip</title>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <div class="card-body">
                        <div class="conttainer">
                            <a name="" id="" class="btn btn-outline-primary my-2" href="/tambah" role="button">Tambah
                                Data</a>
                                <div>
                                <?php if(session()->getFlashdata('pesan')) :?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('pesan'); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <table id="myTable" class="display table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Jumlah</th>
                                    <th>Tujuan</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php $i = 1; ?>
                            <?php foreach ($simpan as $save) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $save['name']; ?></td>
                                <td><?= $save['address']; ?></td>
                                <td><?= $save['email']; ?></td>
                                <td><?= $save['number']; ?></td>
                                <td><?= $save['destination']; ?></td>
                                <td><?= $save['date']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="#"><i
                                            class="fas fa-edit"> Edit</i></a>
                                    <a class="btn btn-primary" href="/home/hapus/<?= $save['id']; ?>"><i
                                            class="far fa-trash-alt"> Delete</i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>>
    </div>
</section>
<!-- akhir content -->
<?= $this->endsection('content'); ?>