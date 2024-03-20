<?php include 'header.html'; ?>

<div class="row justify-content-center mt-5 mb-5">
  <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          Hasil Perhitungan Kecepatan Akhir Gerak Lurus Berubah Beraturan (GLBB)
        </div>
        <div class="card-body">
          <?php
          if (isset($_POST['kecepatan_awal'], $_POST['percepatan'], $_POST['waktu'])) {
              $kecepatan_awal = $_POST['kecepatan_awal'];
              $percepatan = $_POST['percepatan'];
              $waktu = $_POST['waktu'];
              $kecepatan_akhir = $kecepatan_awal + $percepatan * $waktu;
              $jarak = $kecepatan_awal * $waktu + (0.5 * $percepatan * $waktu * $waktu);

              echo "<p>Kecepatan Awal (u): $kecepatan_awal m/s</p>";
              echo "<p>Percepatan (a): $percepatan m/s<sup>2</sup></p>";
              echo "<p>Waktu (t): $waktu s</p>";
              echo "<p>Kecepatan Akhir (v): $kecepatan_akhir m/s</p>";
              echo "<p>Jarak Tempuh (s): $jarak m</p>";
          } else {
              echo "<p>Maaf, tidak ada data yang diterima.</p>";
          }
          ?>
          <a href="page1.php" class="btn btn-secondary">Kembali</a>
        </div>
      </div>
  </div>
</div>

<?php include 'footer.html'; ?>
