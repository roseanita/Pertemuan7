<html>

<head>
    <title>TOKO SEPATU</title>

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

        input[type=submit],
        input[type=reset] {
            width: 47%;
            background-color: #4CAF50;
            color: white;
            padding: 9px 9px;
            margin: 7px 4px;
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
        <form action="<?= base_url('transaksi/proses'); ?>" method="POST">
            <fieldset>
                <legend>TOKO SEPATU</legend>

                <p>
                    <label for="nama">Nama Lengkap: </label>
                    <input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>" placeholder="Nama" required>
                </p>
                <p>
                    <label for="no_hp">Nomor HP: </label>
                    <input type="text" name='no_hp' id='no_hp' value="<?= set_value('no_hp'); ?>" placeholder="Nomor HP" minlength="11" required>
                </p>
                <p>
                    <label for="merk">Merk Sepatu: </label>
                    <select name="merk" id="merk" required>
                        <option value="">--PILIH MERK SEPATU--</option>
                        <option value="Nike">NIKE</option>
                        <option value="Adidas">ADIDAS</option>
                        <option value="Kickers">KICKERS</option>
                        <option value="Eiger">EIGER</option>
                        <option value="Bucherri">BUCHERRI</option>
                    </select>
                </p>
                <p>
                    <label for="size">Ukuran Sepatu: </label>
                    <select name="size" id="size" required>
                        <option value="">--PILIH UKURAN SEPATU--</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                    </select>
                </p>
                <p>
                    <input type="submit" name="KONFIRMASI">
                    <input type="reset" name="BATAL">
                </p>
            </fieldset>
        </form>
    </div>
</body>

</html>