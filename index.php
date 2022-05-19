<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA
            </div>
            <div class="card-body">
              <a href="pendaftaran.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="form pendaftaran">
                <thead>
                  <tr>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NOMOR TELEPON</th>
                    <th scope="col">PILIHAN KELAS</th>
                    <th scope="col">PILIHAN HARI</th>
                    <th scope="col">TANGGAL MULAI</th>
                    <th scope="col">TANGGAL BERAKHIR</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM form_pendaftaran");
                      while ( $row = mysqli_fetch_array($query)){
                      ?>

                  <tr>
                      <td><?php echo $row['nama_lengkap'] ?></td>
                      <td><?php echo $row['Email'] ?></td>
                      <td><?php echo $row['nomor_telepon'] ?></td>
                      <td><?php echo $row['pilihan_kelas'] ?></td>
                      <td><?php echo $row['pilihan_hari'] ?></td>
                      <td><?php echo $row['tanggal_mulai'] ?></td>
                      <td><?php echo $row['tanggal_berakhir'] ?></td>
                      <td class="text-center d-flex ">
                        <a href="edit-siswa.php?id=<?php echo $row['kode'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-siswa.php?id=<?php echo $row['kode'] ?>" class="btn btn-sm btn-danger ml-1">HAPUS</a>
                      </td>
                  </tr>

                <?php }?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#form pendaftaran').DataTable();
      } );
    </script>
  </body>
</html>