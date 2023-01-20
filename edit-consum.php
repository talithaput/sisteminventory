<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM consumable WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data Consumable</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT CONSUMABLE
            </div>
            <div class="card-body">
            <a href="read-consum.php"><button type="submit" class="btn btn-primary">KEMBALI</button></a>
              <form action="update-consum.php" method="POST">

                <div class="form-group">
                  <label>Jenis Barang</label>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                  <input type="text" name="jenis_barang" value="<?php echo $row['jenis_barang'] ?>" placeholder="Masukkan Jenis Barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jumlah Satuan</label>
                  <input type="number" name="jumlah" value="<?php echo $row['jumlah'] ?>" placeholder="Masukkan Jumlah Satuan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" name="satuan" value="<?php echo $row['satuan'] ?>" placeholder="Masukkan Satuan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Satuan</label>
                  <input type="text" name="harga" value="<?php echo $row['harga'] ?>" placeholder="Masukkan Harga Satuan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Total</label>
                  <input type="text" name="total" value="<?php echo $row['total'] ?>" placeholder="Masukkan Total" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>