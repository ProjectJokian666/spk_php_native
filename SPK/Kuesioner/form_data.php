<div class="col-lg-6" id="form_data">
  <!-- Basic Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">FORM DATA DIRI</h6>
    </div>
    <div class="card-body">

      <div class="form-group">
        <label>Nama Anda</label>
        <input type="text" class="form-control form-control-user" name="nama" id="nama" placeholder="Masukkan Nama Anda">
      </div>
      <div class="form-group">
        <label>Kelas</label>
        <input type="text" class="form-control form-control-user" name="kelas" id="kelas" placeholder="Kelas Anda Sekarang">
      </div>
      <div class="form-group">
        <label>Kampus</label>
        <input type="text" class="form-control form-control-user" name="sekolah" id="sekolah" placeholder="Tempat Pendidikan Anda">
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-user">
          <option value="Laki - Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label>Tanggal_Lahir</label>
        <input type="date" class="form-control form-control-user" name="tanggal_lahir" id="tanggal_lahir">
      </div>

    </div>
    <div class="card-footer" id="show_form_button">
      <center>
        <button class="btn btn-sm btn-info" id="form_button">MULAI KUESIONER</button>
      </center>
    </div>
  </div>
</div>