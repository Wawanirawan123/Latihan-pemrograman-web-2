<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wawan Irawan</title>
    <link href="logo.jfif" rel="shortcut icon">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #FAF8ED;
        text-align: center;
      } 
      .box{
            width: 450px;
            height: 470px;
            background-color: #D2E3C8;
            padding: 10px;
            margin: 10px auto;
      }
      .card {
            width: 400px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px auto;
      }
      .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            float: left;
            margin-bottom: 10px;
      }
      .kembali {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
      }
    </style>
  </head>
  <body>
  <h1>Profil Mahasiswa</h1>
  <div class="box">

      <div class="card">
        <img class="profile-image" src="Pem.web2/<?= $_GET["Foto"];?>">
        <h2><?= $_GET["Nama"]; ?></h2>
        <p><?= $_GET["Email"]; ?></p>
        <p><?= $_GET["Jurusan"]; ?></p>
        <a href="Tugas5b.php" class="kembali">Kembali</a>
    </div>
</div>
  </body>
</html>