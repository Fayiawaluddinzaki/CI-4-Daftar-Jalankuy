<?= $this->extend('temp/headfoot'); ?>
<?= $this->section('content'); ?>
<!-- isi konten -->
<title>Isi Data Rombongan</title>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-lg-5">
                <h3 class="text-center"> Tambah Data </h3>
                <?= $validation->listErrors(); ?>
                <form action="/home/save" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="inputAddress">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">Jumlah Orang</label>
                            <input type="number" class="form-control" name="jumlah">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Tujuan</label>
                            <select class="form-control" name="tujuan">
                                <option></option>
                                <option>Danau Kelimutu</option>
                                <option>Moai Kep. Paskah</option>
                                <option>Gunung Semeru</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputZip">Tanggal Berangkat</label>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <input class="btn btn-primary mx-2" type="reset" value="Reset">
                    <a name="" id="" class="btn btn-danger" href="/daftar" role="button">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- isi konten -->
<?= $this->endsection('content'); ?>