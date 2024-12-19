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
            background: url("./bcg.jpg") center / cover no-repeat;
            background-size: cover;
            background-position: center;
            height: 83vh;
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
            margin: 50px auto;
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
        .tmbh {
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

        .tmbh:hover {
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
        }
        .back:hover {
            background-color: #005BAA;
            border: none;
            color: #fff;
            border: 1px solid #005BAA;
            padding: 9px 20px;
        }
    </style>

    <!-- <script>
        function validateInput() {
            // Validasi NIM
            const nimInput = document.getElementById('id');

            if (nimInput.value.length < 5 || nimInput.value.length > 5) {
                alert('NIM harus 5 digit');
                nimInput.focus();
                return false;
            }

            if (!/^[0-9]+$/.test(nimInput.value)) {
                alert('NIM hanya boleh angka');
                nimInput.focus();
                return false;
            }

            // Validasi Nama
            const namaInput = document.getElementById('nama');

            if (!/^[a-zA-Z\- ]+$/.test(namaInput.value)) {
                alert('Nama hanya boleh huruf, dan spasi!');
                nimInput.focus();
                return false;
            }
        }
    </script> -->


</head>
<body>
    <div class="bd">
        <div class="container">
        <h2>Tambah Prodi Mahasiswa</h2>
        <form name="myform" action="./insert_db.php" method="POST">
            <table border="0">
                <tr>
                    <td><label for="nama">Nama</label></td>
                </tr>
                <tr>
                    <td><input class="inp" type="text" id="nim" name="nama" placeholder="Nama" required></td>
                    <span id="nim-error" class="error-message"></span>
                </tr>
                <tr>
                    <td><label>Jurusan</label></td>
                </tr>
                <tr>
                    <td><input class="inp" type="text" id="nama" name="jurusan" placeholder="Jurusan" required></td>
                    <span id="nama-error" class="error-message"></span>
                </tr>
                <tr>
                    <td><label>Prodi</label></td>
                </tr>
                <tr>
                    <!-- <td>Prodi</td> -->
                    <td><input class="inp" type="text" name="email_prodi" placeholder="Prodi" required></td>
                </tr>
                <tr>
                    <td><label>Status</label></td>
                </tr>
                <tr>
                    <!-- <td>Prodi</td> -->
                    <td><input class="inp" type="text" name="status" placeholder="Status" required></td>
                </tr>
                
                <td>
                    <input class="back" type="submit" href="./data_prodi.php" Value="Kembali">
                    <input class="tmbh" type="submit" value ="Simpan" name="simpan">
                </td>
            </table>
        </form>
        </div>
    </div>
</body>
</html>