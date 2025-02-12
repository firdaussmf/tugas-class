<!DOCTYPE html>
<html>
<head>
    <title>Konversi Mata Uang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Konversi Mata Uang</h1>
        <form method="post" action="">
            <label for="jumlah">Jumlah Uang:</label>
            <input type="number" name="jumlah" id="jumlah" step="0.01" required>

            <label for="dari">Dari Mata Uang:</label>
            <select name="dari" id="dari" required>
                <option value="USD">USD (Dolar Amerika)</option>
                <option value="EUR">EUR (Euro)</option>
                <option value="GBP">GBP (Poundsterling Inggris)</option>
                <option value="IDR">IDR (Rupiah Indonesia)</option>
                <option value="JPY">JPY (Yen Jepang)</option>
            </select>

            <label for="ke">Ke Mata Uang:</label>
            <select name="ke" id="ke" required>
                <option value="USD">USD (Dolar Amerika)</option>
                <option value="EUR">EUR (Euro)</option>
                <option value="GBP">GBP (Poundsterling Inggris)</option>
                <option value="IDR">IDR (Rupiah Indonesia)</option>
                <option value="JPY">JPY (Yen Jepang)</option>
            </select>

            <button type="submit" name="konversi">Konversi</button>
        </form>

        <?php
        if (isset($_POST['konversi'])) {
            $jumlah = $_POST['jumlah'];
            $dari = $_POST['dari'];
            $ke = $_POST['ke'];

            // Mengambil data nilai tukar mata uang dari API
            $api_url = "https://api.exchangerate-api.com/v4/latest/$dari";
            $response = file_get_contents($api_url);

            if ($response === FALSE) {
                echo "<div class='result'><strong>Error:</strong> Gagal mengambil data nilai tukar.</div>";
            } else {
                $data = json_decode($response, true);

                if (isset($data['rates'][$ke])) {
                    $nilai_tukar = $data['rates'][$ke];
                    $hasil = $jumlah * $nilai_tukar;
                    echo "<div class='result'><strong>Hasil Konversi:</strong> $jumlah $dari = $hasil $ke</div>";
                } else {
                    echo "<div class='result'><strong>Error:</strong> Mata uang tujuan tidak valid.</div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>