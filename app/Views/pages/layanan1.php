<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center my-5">
                <h2>Form Pengaduan Masyarakat</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8 col-sm-offset-2">
                <form>
                    <div class="form-group mb-2">
                        <!-- <label for="nama">Nama</label> -->
                        <input type="text" id="nama" class="form-control" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <!-- <label for="email">Email</label> -->
                        <input type="text" id="email" class="form-control" placeholder="Masukan Email">
                    </div>
                    <div class="form-group mb-2">
                        <!-- <label for="telp">No Telepon</label> -->
                        <input type="tel" id="telp" class="form-control" placeholder="Masukan Nomor Telepon">
                    </div>
                    <select class="form-control mb-2">
                        <option>-- Pilih Kategori --</option>
                        <option>Keluarga</option>
                        <option>Masyarakat</option>
                    </select>
                    <div class="form-group mb-2">
                        <!-- <label for="pesan">Deskripsi Gejala Pasien</label> -->
                        <textarea class="form-control" rows="8" placeholder="Deskripsikan gejala yang dialami pasien"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-5">Kirim Pesan</button>
                </form>
            </div>
        </div>
      </div>

<?= $this->endSection(); ?>