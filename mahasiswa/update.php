<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
            
        }

        body {
            background: url("bcg.jpg") center / cover no-repeat;
            background-size: cover;
            background-position: center;
            height: 77vh;
            /* You can remove these lines if you don't want the filter */
            filter: brightness(0.93) contrast(1.2);
        }

        .bd {
            font-family: Arial, sans-serif;
            /* background-color: #f1ebf8; */
            /* background-color: #9564da; */
        }
        .container {
            margin-top: 300px;
            max-width: 400px;
            margin: 90px auto;
            padding-top: 20px;
            padding-bottom: 30px;
            padding-left: 45px;
            padding-right: 50px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
            opacity: 0.9;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 0px;
            /* color: #9564da; */
            color: #000;
        }


        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 10px;
        }

        label {
            display: block;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 7px;
            margin-left: 0px;
            font-size: 14px;
            color: #000;
        }

        .inp {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            color: #5a5a5a;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 3px #5a5a5a;
        }

        .updt {
            width: 100%;
            padding: 10px;
            background-color: #005BAA;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            margin-bottom: 15px;
            /* margin-left: 180px; */
            font-weight: bold;
        }

        .updt:hover {
            background-color: transparent;
            border-color: #005BAA;
            color: #005BAA;
            border: 1px solid #005BAA;
            padding: 9px;
        }

        .back {
            margin-top: 20px;
            width: 100%;
            padding: 9px 20px;
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
            text-align: center;
        }
        .back:hover {
            background-color: #005BAA;
            border: none;
            color: #fff;
            border: 1px solid #005BAA;
            padding: 9px 20px;
        }
    </style>
</head>
<body>
    <div class="bd">
        <div class="container">
        <h2>Update Data Mahasiswa</h2>
        <form action="./update_db.php" method="POST">
        <?php
            include "koneksi.php";

            $nim = $_GET['nim'];
   
            $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);
            ?>

            

            <table border="0">
                <tr>
                    <td><label>NIM</label></td>
                </tr>
                <tr>
                <td><input class="inp" type="text" id="nim" name="nim" value="<?php echo $row['nim']; ?>" readonly></td>
                </tr>
                <tr>
                    <td><label>Nama Lengkap</label></td>
                </tr>
                <tr>
                    <td><input  class="inp" type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required></td>
                </tr>
                <tr>
                    <td><label>Prodi</label></td>
                </tr>
                <tr>
                    <!-- <td>Prodi</td> -->
                    <td><input  class="inp" type="text" id="prodi" name="prodi" value="<?php echo $row['prodi']; ?>" required></td>
                </tr>
                
                <td>
                    <a href="./data_read.php"><input type="button" class="back" Value="Kembali"></>
                    <input class="updt" type="submit" value ="Update" name="update">
                </td>
            </table>
        </form>
        </div>
    </div>
</body>
</html>