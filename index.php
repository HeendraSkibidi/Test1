<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry Hendra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg navbar-black bg-success-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="setrika.png" alt="" width="50" height="44">LAUNDRY TANJUNG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-header" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
          <li class="nav navbar-nav navbar-right">
            
          <a class="nav-link" href="?page=member/index">MEMBER</a>
        </li>
          <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=jenis_laundry/index">JENIS LAUNDRY</a>
        </li>
          <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=user/index">USER</a>
        </li>
          <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=transaksi/index">TRANSAKSI</a>
        </li>
        <li class="nav navbar-nav navbar-right">
        <a class="nav-link" href="logout.php">QUIT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <?php include "isi.php" ?>
</div>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>