<?= $this->extend('temp/headfoot'); ?>
<?= $this->section('content'); ?>
<!-- isi konten -->
<title>Isi Data Rombongan</title>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-lg-5">
                <h3 class="text-center"> Tambah Data </h3>
                
                <form action="/home/update/<?= $edit['id']; ?>" method="POST">
                    <?= csrf_field(); ?>                    
                    <div class="form-group">
                        <label for="inputAddress">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $edit['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $edit['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?= $edit['address']; ?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">Jumlah Orang</label>
                            <input type="number" class="form-control" name="jumlah" value="<?= $edit['number']; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Tujuan</label>
                            <input type="text" class="form-control" name="tujuan" value="<?= $edit['destination']; ?>">
                            <!-- <select class="form-control" name="tujuan">
                                <option></option>
                                <option>Danau Kelimutu</option>
                                <option>Moai Kep. Paskah</option>
                                <option>Gunung Semeru</option>
                            </select> -->
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputZip">Tanggal Berangkat</label>
                            <input type="date" class="form-control" name="tanggal" value="<?= $edit['date']?>">
                        </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <!-- <input type="hidden" name="_method" value="UPDATE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah yakin untuk hapus?')">
                        <i class="fas fa-edit"> Update</i>
                    </button> -->
                    <button type="submit" class="btn btn-primary">Update</button>
                    <input class="btn btn-primary mx-2" type="reset" value="Reset">
                    <a name="" id="" class="btn btn-danger" href="/daftar" role="button">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- isi konten -->
<?= $this->endsection('content'); ?>