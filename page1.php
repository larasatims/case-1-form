<?php include 'header.html'; ?>

<div class="row justify-content-center mt-5 mb-5">
  <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          Input Kecepatan Akhir Gerak Lurus Berubah Beraturan (GLBB)
        </div>
        <div class="card-body">
          <form action="page2.php" method="POST">
            <div class="form-group">
              <label for="kecepatan_awal">Kecepatan Awal (u) (m/s):</label>
              <input type="number" class="form-control" id="kecepatan_awal" name="kecepatan_awal" step="0.01" required>
            </div>
            <div class="form-group">
              <label for="percepatan">Percepatan (a) (m/s<sup>2</sup>):</label>
              <input type="number" class="form-control" id="percepatan" name="percepatan" step="0.01" required>
            </div>
            <div class="form-group">
              <label for="waktu">Waktu (t) (s):</label>
              <input type="number" class="form-control" id="waktu" name="waktu" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
          </form>
        </div>
      </div>
  </div>
</div>

<?php include 'footer.html'; ?>
