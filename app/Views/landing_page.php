<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
         <div class="row">
           <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active">
                 <img src="./img/sampul/1.png" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                 <img src="./img/sampul/2.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                 <img src="./img/sampul/3.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                 <img src="./img/sampul/4.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                 <img src="./img/sampul/5.png" class="d-block w-100" alt="...">
               </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
           </div>
         </div>
       </div>
    <!-- akhir dari carousel -->


    <!-- Profil -->
    <section class="profil my-5" id="profil">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 my-5">
                    <h2 class="text-center">Profil</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-5 col-sm-offset-2">
            <div class="pKiri">
                <h2>Sejarah</h2>
                <p>Awalnya PSRLU dan PMP merupakan Unit Pelaksana Teknis di lingkungan Kanwil Departemen Sosial Provinsi Jawa Barat yang didirikan pada tahun 1979/1980 dengan Surat Keputusan Menteri Sosial RI Nomor: 41/HUK/Kep/X/79 tanggal 1 Nopember 1979 dengan nama Sasana Tresna Werdha Pakutandang dan mulai beroperasi pada tanggal 19 Mei 1980. Berdasarkan Surat Keputusan Menteri Sosial RI Nomor : 32/HUK/Kep/V/1982 tanggal 1 November 1982 berubah nomenklatur menjadi PSTW Pakutandang.
                Dalam konstelasi otonomi daerah, maka berdasarkan Peraturan Daerah No 5 Tahun 2002 tentang Perubahan atas Peraturan Daerah Nomor : 15 Tahun 2000 PSTW Pakutandang berganti nomenklatur menjadi Balai Perlindungan Sosial T resna Werdha Ciparay dan menjadi induk bagi 3 instalasi PSTW yaitu PSTW Jiwa Baru Garut, PSTW Sukma Raharja Bogor, dan PSTW Budi Daya Karawang. </p>
              </div> 
            </div>
            <div class="col-sm-5">
              <div class="pKanan">
                <h2>Visi</h2>
                <p>“Terwujudnya Kesejahteraan Lanjut Usia Yang Mandiri, Berkualitas dan Dinamis."</p>

                <h2>Misi</h2>
                <ul>
                  <li>Meningkatkan Mutu Pelayanan Sosial Lanjut Usia</li>
                  <li>Meningkatkan Profesionalitas Sumber Daya Manusia</li>
                  <li>Meningkatkan Rasa Kebersamaan Bagi Lanjut Usia</li>
                  <li>Meningkatkan Sistem Pertolongan dan Perlindungan Bagi Lanjut Usia</li>
                  <li>Meningkatkan Partisipasi dan Kesetiakawanan Masyarakat</li>
                </ul>

                <h2>Motto</h2>
                <ul>
                  <li>Mandiri, Berkarya dan Berkualitas</li>
                  <li>Mewujudkan Hak Para Lanjut Usia</li>
                </ul>
              </div>  
            </div>
        </div>
    </section>
    <!-- akhir dari profil -->

    <!-- Layanan -->
    <section id="layanan" class="layanan">
      <div class="container-fluid bg-secondary bg-opacity-10 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 my-5">
              <h2 class="text-center">Layanan</h2>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-sm-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Pengaduan Masyarakat</h5>
                  <p class="card-text">Kami menampung segala macam pengaduan dari masyarakat.</p>
                  <a href="" class="btn btn-danger">Ajukan Laporan</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Seputar Lansia</h5>
                  <p class="card-text">Kumpuln informasi bermanfaat mengenai orang lanjut usia (lansia).</p>
                  <a href="" class="btn btn-primary">Lihat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Informasi Bantuan Pemerintah</h5>
                  <p class="card-text">cek data penerimaan bantuan pemerintah untuk anda disini.</p>
                  <a href="" class="btn btn-primary">Lihat</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>

<?= $this->endSection(); ?>