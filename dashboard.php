<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
 <!-- Main Content -->
      <div class="main-content bg-primary">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">DATA KELAS -
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">Pilih Kelas</a>
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li><a href="kelas.php" class="dropdown-item active">
                          <option value="not_option"> silahkan pilih kelas</option>
                           <?php
                                  // jalankan query untuk menampilkan semua data diurutkan berdasarkan
                                  $query = "SELECT * FROM kelas ORDER BY nama_kelas ASC";
                                  $result = mysqli_query($koneksi, $query);
                                  //mengecek apakah ada error ketika menjalankan query
                                  if(!$result){
                                    die ("Query Error: ".mysqli_errno($koneksi).
                                       " - ".mysqli_error($koneksi));
                                  }

                                  //buat perulangan untuk element tabel dari data mahasiswa
                                  $no = 1; //variabel untuk membuat nomor urut
                                  // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                  // kemudian dicetak dengan perulangan while
                                  while($row = mysqli_fetch_assoc($result))
                                  {
                                  ?>
                             <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                             <?php
                                    $no++; //untuk nomor urut terus bertambah 1
                                  }
                                  ?>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">33</div>
                      <div class="card-stats-item-label">Siswa</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">12</div>
                      <div class="card-stats-item-label">B Lunas</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">21</div>
                      <div class="card-stats-item-label">Lunas</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-info bg-primary">
                  <i class="fas fa-users"></i>
                
        </section>
      </div>
    </div>
  </div>
</body>
