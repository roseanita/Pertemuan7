<html>

<head>
    <title>HASIL INPUT</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        fieldset {
            padding: 20px;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 10px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            text-align: center;
            width: 94%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: left;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <fieldset>
            <legend>TOKO SEPATU</legend>

            <p>
                <label for="nama">Nama Lengkap: </label>
                <input type="text" value="<?= $nama ?>" disabled>
            </p>
            <p>
                <label for="no_hp">Nomor HP: </label>
                <input type="text" value="<?= $no_hp ?>" disabled>
            </p>
            <p>
                <label for="merk">Merk Sepatu: </label>
                <input type="text" value="<?= $merk ?>" disabled>
            </p>
            <p>
                <label for="size">Ukuran Sepatu: </label>
                <input type="text" value="<?= $size ?>" disabled>
            </p>
            <p>
                <a href="<?php echo base_url() . 'transaksi' ?>">Kembali ke Form</a>
            </p>
        </fieldset>
    </div>
</body>

</html>