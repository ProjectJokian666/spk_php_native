<?php
include_once('../Database/database.php');
$data = [];
$id = isset($_GET['id'])?$_GET['id']:'';
// data kues
$result = mysqli_query($koneksi_database,"select * from hasil_kuesioner where id='$id'");
foreach ($result as $key => $value) {
  array_push($data,array(
    'nama'=>$value['nama'],
    'kelas'=>$value['kelas'],
    'sekolah'=>$value['sekolah'],
    'jenis_kelamin'=>$value['jenis_kelamin'],
    'tanggal_lahir'=>$value['tanggal_lahir'],
    'tanggal_test'=>$value['tanggal_test'],
    'hasil_tes'=>$value['hasil_tes'],
  ));
}
// var_dump($data,$data[0]['nama']);
$skala = $data[0]['hasil_tes'];
$batas = ceil($skala/232*100);
// skala interpretasi
$hasil_tes = mysqli_query($koneksi_database,"select * from data_interpretasi where batas_bawah <= ".$batas." AND batas_atas >= ".$batas);
foreach ($hasil_tes as $key => $value) {
  array_push($data,array(
    'id'=>$value['id'],
    'klasifikasi'=>$value['klasifikasi'],
    'batas_bawah'=>$value['batas_bawah'],
    'batas_atas'=>$value['batas_atas'],
    'interpretasi'=>$value['interpretasi'],
  ));
}
// data format
$data_cetak = mysqli_query($koneksi_database,"select * from data_cetak");
foreach ($data_cetak as $key => $value) {
  array_push($data,array(
    'header'=>$value['header'],
    'size_header'=>$value['size_header'],
    'location'=>$value['location'],
    'size_location'=>$value['size_location'],
    'judul'=>$value['judul'],
    'size_judul'=>$value['size_judul'],
    'wilayah'=>$value['wilayah'],
    'konselor'=>$value['konselor'],
  ));
}
// var_dump($data);
?>
<!DOCTYPE html>
<html lang="id">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HOME</title>

  <!-- Custom fonts for this template-->
  <link href="../startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row justify-content-center">

            <div class="col-3"></div>
            <div class="col-6 text-center" style="font-size: <?= $data[2]['size_header'] ?>pt;">
              <b>
                <?= $data[2]['header'] ?>
              </b>
            </div>
            <div class="col-3"></div>

            <div class="col-12 text-center" style="font-size: <?= $data[2]['size_location'] ?>pt;">
              <?= $data[2]['location'] ?>
            </div>

            <div class="col-12 text-center pt-5" style="font-size: <?= $data[2]['size_judul'] ?>pt;">
              <b>
                <?= $data[2]['judul'] ?>
              </b>
            </div>

            <div class="col-12 pt-5">
              <div class="row">
                <div class="col-6 row">
                  <div class="col-12 row">
                    <div class="col-5">Nama</div><div class="col-2">:</div><div class="col-5"><?= $data[0]['nama'] ?></div>
                    <div class="col-5">Kampus</div><div class="col-2">:</div><div class="col-5"><?= $data[0]['sekolah'] ?></div>
                    <div class="col-5">Kelas</div><div class="col-2">:</div><div class="col-5"><?= $data[0]['kelas'] ?></div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col-12 row">
                    <?php 
                    $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
                    $tgl_lahir = explode('-',$data[0]['tanggal_test'] );
                    $tgl_test = explode('-',$data[0]['tanggal_lahir'] );
                    // echo $bulan[intval($tgl_lahir[1])-1];
                    ?>
                    <div class="col-5">Jenis Kelamin</div><div class="col-2">:</div><div class="col-5"><?= $data[0]['jenis_kelamin'] ?></div>
                    <div class="col-5">Tanggal Lahir</div><div class="col-2">:</div><div class="col-5"><?= $tgl_lahir[2]." ".$bulan[intval($tgl_lahir[1])-1]." ".$tgl_lahir[0] ?></div>
                    <div class="col-5">Tanggal Test</div><div class="col-2">:</div><div class="col-5"><?= $tgl_test[2]." ".$bulan[intval($tgl_test[1])-1]." ".$tgl_test[0] ?></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 pt-5">
              <div class="row">
                <div class="col-12 row">
                  <div class="col-12">
                    Dari hasil perhitungan angket yang sudah diperoleh dari hasil presentase sebesar <b>(<?= $batas; ?>%)</b> dengan ini dinyatakan masuk dalam kategori <b><?= $data[1]['klasifikasi'] ?></b>. <?= $data[1]['interpretasi'] ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 pt-5 row">
              <div class="col-4"></div>
              <div class="col-4"></div>
              <div class="col-4 text-center row">
                <div class="col-12">
                  <?= $data[2]['wilayah'] ?>, <?= $tgl_test[2]." ".$bulan[intval($tgl_test[1])-1]." ".$tgl_test[0] ?>
                </div>
                <div class="col-12 pt-5">
                  <?= $data[2]['konselor'] ?>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="../startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js"></script>
  <script src="../startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    window.print()
  </script>
</body>

</html>