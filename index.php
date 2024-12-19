<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang di Politeknik Astra</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      background-image: url('bcg.jpg');
      background-size: cover;
      background-position: center;
      height: 90vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-family: sans-serif;
      color: #fff;
    }

    .container {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 30px;
      border-radius: 10px;
      width: 60%;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      margin-top:50px;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      color: #9564da;
    }

    p {
      font-size: 1.2rem;
      line-height: 1.5;
      color: #ddd;
      margin-bottom: 30px;
      margin-top: -10px;
    }

    a {
      padding: 5px;
    }

    .button {
      padding: 10px 10px;
      background-color:  transparent;
      color: #005BAA;
      border-color: #005BAA;
      border-radius: 5px ;
      cursor: pointer;
      transition: background-color 0.3s;
      font-weight: bold;
      font-size: 15px;
    }

    .button:hover {
      background-color: #005BAA;
      border-color: #005BAA;
      color: #fff;
      border: 1px solid #005BAA;
      padding: 11px 11px;
    }

    .button-prod {
      background-color: #005BAA;
      border-color: #005BAA;
      border-radius: 5px ;
      color: #fff;
      border: 1px solid #005BAA;
      padding: 11px 10px;
      font-weight: bold;
      font-size: 15px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .button-prod:hover {
      padding: 11px 10px;
      background-color:  transparent;
      color: #005BAA;
      border-color: #005BAA;
      border-radius: 5px ;
      cursor: pointer;
      transition: background-color 0.3s;
      font-weight: bold;
      font-size: 15px;
    }

    .fas {
      font-size: 3rem;
      margin-bottom: 15px;
      color: #eabe1f;
    }
  </style>
</head>
<body>
  <div class="container">
  <img src="pngwing.png" style="height: 320px; margin-top: -20px;" alt="Italian Trulli">
    <!-- <i class="fas fa-graduation-cap"></i> <h1>Selamat Datang di Polman ASTRA</h1> -->
    <p>Mendukung revitalisasi pendidikan vokasi di Indonesia dalam penyiapan tenaga kerja kompeten berdaya saing global dan menghasilkan teknologi terapan yang dibutuhkan industri, relevan dan sejalan dengan Astra Untuk Hari Ini dan Masa Depan Indonesia.</p>
    <a href="./mahasiswa/data_read.php">
      <button class="button">Data Mahasiswa</button>
    </a>
    <a href="./prodi/data_prodi.php">
      <button class="button-prod">Prodi Mahasiswa</button>
    </a>
  </div>
</body>
</html>
