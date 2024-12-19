<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <style>
        * {
            /* background-color: #f1ebf8; */
            /* margin: 0;
            padding: 0px; */
        }
        body {
            background: url("bcg.jpg") center / cover no-repeat;
            background-size: cover;
            background-position: center;
            height: 78vh;
           
            /* You can remove these lines if you don't want the filter */
            filter: brightness(0.93) contrast(1.2);
        }
        .bd {
            font-family: Arial, sans-serif;
            /* background-color: #f1ebf8; */
            /* background-color: #9564da; */
        }
        h1 {
            margin: 0;
            padding: 20px 0;
            font-family: 'Montserrat', 'Poppins', sans-serif;
            font-weight: bold;
            display: flex;
            justify-content: center;
            margin-bottom: -25px;
            background-color: #fff;
        }
        .container {
            box-shadow: 0 2px 5px rgba(0, 0.5, 0, 2);
            background-color: #fff;
            padding: 20px;
            /* margin-top: 150px; */
            border-radius: 10px;
            opacity: 0.9;
            margin-top: 90px;
        }
        crud-cont {
            max-width: 1115px;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
            background-color: #fff;
            margin-top: 60px;
            margin-bottom: 80px;
            padding-right: 83px;
        }
        head {
            background-color: #005BAA;
        }
        .back {
            padding: 9px 13px;
            background-color: transparent;
            border-color: #005BAA;
            color: #005BAA;
            border: 1px solid #005BAA;
            color: #005BAA;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
            font-size: 15px;
        }
        .back:hover {
            background-color: #005BAA;
            border: none;
            color: #fff;
            border: 1px solid #005BAA;
            padding: 9px 13px;
        }
        .tamb {
            padding: 10px 10px;
            background-color:  #005BAA;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
            font-size: 15px;
        }
        .tamb:hover {
            background-color: transparent;
            border-color: #005BAA;
            color: #005BAA;
            border: 1px solid #005BAA;
            padding: 9px 9px;
        }
    </style>

</head>
<body>
    <div class="bd">
        <div class="container">
            <div class="row justify-content-end mb3" style="background-color: #fff;">
            <h1>Prodi Mahasiswa Polman ASTRA</h1>
                <div class="col-auto" style="background-color: #fff; margin-bottom: 15px; margin-right: 25px;">
                    <a href="../index.php">
                        <button type="button" class="back">Kembali</button>
                    </a>
                    <a href="create_prodi.php">
                        <button type="button" class="tamb">Tambah Data</button>
                    </a>
                </div>
            </div>

            <table id="example" class="table table-striped" style="width:100%; border: 1px solid #ddd;" >
                <thead>
                    <tr>
                        <th style="padding: 15px; background-color: #005BAA; color: white; text-align: center;">No.</th>
                        <th style="padding: 15px; background-color: #005BAA; color: white; text-align: center;">Nama</th>
                        <th style="padding: 15px; background-color: #005BAA; color: white; text-align: center;">Jurusan</th>
                        <th style="padding: 15px; background-color: #005BAA; color: white; text-align: center;">Prodi</th>
                        <th style="padding: 15px; background-color: #005BAA; color: white; text-align: center;">Status</th>
                        <th style="padding: 15px 35px; background-color: #005BAA; color: white; text-align: center;">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include './koneksi.php';

                        $query = "SELECT * FROM prodi";
                        $result = mysqli_query($con, $query);

                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                                <tr>
                                    <td style="border: 1px solid #ddd; text-align: center;">'.$no.'</td>
                                    <td style="border: 1px solid #ddd; text-align: center;">'.$row['nama'].'</td>
                                    <td style="border: 1px solid #ddd; text-align: center;">'.$row['jurusan'].'</td>
                                    <td style="border: 1px solid #ddd; text-align: center;">'.$row['email_prodi'].'</td>
                                    <td style="border: 1px solid #ddd; text-align: center;">'.$row['status'].'</td>
                                    <td style="border: 1px solid #ddd; ">
                                        <a style="margin-left: 6px;" href="update.php?id='.$row['id'].'">
                                            <button  type="button" class="btn btn-warning">Ubah</button>
                                        </a>
                                        <a href="deletepro_db.php?id='.$row['id'].'" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')">
                                            <button style="margin-right: -75px; " type="button" class="btn btn-danger">Hapus</button>
                                        </a>
                                    </td>
                                </tr>
                            ';
                        $no++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>