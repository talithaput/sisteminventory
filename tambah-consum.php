<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data Consumable</title>

    <link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
          <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
          <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
          <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css">
        <script>
           $(document).ready(function(){
            $("#tanggal").datepicker({
            })
           })
        </script>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA CONSUMABLE
            </div>
            <div class="card-body">
            <a href="read-consum.php"><button type="submit" class="btn btn-primary">KEMBALI</button></a>
              <form action="simpan-consum.php" method="POST">
                
                <div class="form-group">
                  <label>Jenis Barang</label>
                  <input type="text" name="jenis_barang" placeholder="Masukkan Jenis Barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jumlah Satuan</label>
                  <select name="jumlah">
						<option value="">- Jumlah Barang -</option>
						<?php for($x=0;$x<=100;$x++){ ?>
						<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
						<?php } ?>
					</select>
                </div>

                <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" name="satuan" placeholder="Masukkan Satuan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga Satuan</label>
                  <input type="text" name="harga" placeholder="Masukkan Harga" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" placeholder="Masukkan Tanggal" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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