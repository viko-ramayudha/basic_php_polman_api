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
            height: 76.5vh;
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

    <!-- <script>
        function validateInput() {
            // Validasi NIM
            const nimInput = document.getElementById('nim');

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

            // Check if NIM already exists
            const nim = nimInput.value;
            const xhr = new XMLHttpRequest();
            xhr.open('POST', './check_nim.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        const response = xhr.responseText;
                        if (response === 'exists') {
                            alert('NIM sudah terdaftar!');
                            nimInput.focus();
                        } else {
                            // Proceed with form submission
                            document.forms['myform'].submit();
                        }
                    } else {
                        alert('Terjadi kesalahan saat memeriksa NIM');
                    }
                }
            };
            xhr.send('nim=' + encodeURIComponent(nim));

            return false; // Prevent the form from submitting directly
        }
    </script> -->


</head>
<body>
    <div class="bd">
        <div class="container">
        <h2>Tambah Data Mahasiswa</h2>
        <form name="myform" action="./insertmhs_db.php" method="POST">
            <table border="0">
                <tr>
                    <td><label for="nim">NIM (5 digits only)</label></td>
                </tr>
                <tr>
                    <td><input class="inp" type="text" id="nim" name="nim" placeholder="NIM" minlength="5" maxlength="5" required></td>
                    <span id="nim-error" class="error-message"></span>
                </tr>
                <tr>
                    <td><label>Nama Lengkap</label></td>
                </tr>
                <tr>
                    <td><input class="inp" type="text" id="nama" name="nama" placeholder="Nama Lengkap" required></td>
                    <span id="nama-error" class="error-message"></span>
                </tr>
                <tr>
                    <td><label>Prodi</label></td>
                </tr>
                <tr>
                    <!-- <td>Prodi</td> -->
                    <td><input class="inp" type="text" name="prodi" placeholder="Prodi" required></td>
                </tr>
                
                <td>
                    <a href="./data_read.php"><input type="button" class="back" Value="Kembali"></a>
                    <input class="tmbh" type="submit" value ="Simpan" name="simpan">
                </td>
            </table>
        </form>
        </div>
    </div>
</body>
</html>