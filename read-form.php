<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Formulir</title>

    <!-- bootstrap 5 css -->
    <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
          crossorigin="anonymous"
        />
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />

        <style>
    li {
        list-style: none;
        margin: 20px 0 20px 0;
    }

    a {
        text-decoration: none;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        transition: 0.4s;
    }

    .active-main-content {
        margin-left: 250px;
    }

    .active-sidebar {
        margin-left: 0;
    }

    #main-content {
        transition: 0.4s;
    }
</style>
  </head>

  <body>
        <div>
          <div class="sidebar p-4 bg-primary" id="sidebar">
            <h4 class="mb-5 text-white">Sistem Inventory</h4>
            <li>
              <a class="text-white" href="home.php">
                <i class="bi bi-house mr-2"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a class="text-white" href="read.php">
                <i class="bi bi-table mr-2"></i>
                Data Alat Tulis
              </a>
            </li>
            <li>
              <a class="text-white" href="read-consum.php">
                <i class="bi bi-table mr-2"></i>
                Data Consumable
              </a>
            </li>
            <li>
              <a class="text-white" href="read-form.php">
                <i class="bi bi-table mr-2"></i>
                Data Formulir
              </a>
            </li>
            <li>
              <a class="text-white" href="read-matrai.php">
                <i class="bi bi-table mr-2"></i>
                Data Matrai
              </a>
            </li>
            <a href="logout.php" class="text-white">
                <i class="bi bi-power mr-2"></i>
                Logout
              </a>
 
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA FORMULIR (CETAKAN)
            </div>
            <div class="card-body">
              <a href="tambah-form.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">JENIS BARANG</th>
                    <th scope="col">JUMLAH SATUAN</th>
                    <th scope="col">SATUAN</th>
                    <th scope="col">HARGA SATUAN</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM formulir");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['jenis_barang'] ?></td>
                      <td><?php echo $row['jumlah'] ?></td>
                      <td><?php echo $row['satuan'] ?></td>
                      <td><?php echo $row['harga'] ?></td>
                      <td><?php echo $row['total'] ?></td>
                      <td><?php echo $row['tanggal'] ?></td>
                      <td class="text-center">
                        <a href="edit-form.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-form.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
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
          $('#myTable').DataTable();
      } );
    </script>

<script>
    // event will be executed when the toggle-button is clicked
    document.getElementById("button-toggle").addEventListener("click", () => {

        // when the button-toggle is clicked, it will add/remove the active-sidebar class
        document.getElementById("sidebar").classList.toggle("active-sidebar");

        // when the button-toggle is clicked, it will add/remove the active-main-content class
        document.getElementById("main-content").classList.toggle("active-main-content");
    });
</script>
  </body>
</html>