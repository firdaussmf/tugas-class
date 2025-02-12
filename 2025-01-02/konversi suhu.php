<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
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
        <h1>Konversi Suhu</h1>
        <form method="post" action="">
            <label for="suhu">Masukkan Suhu:</label>
            <input type="number" name="suhu" id="suhu" required>

            <label for="dari">Dari:</label>
            <select name="dari" id="dari" required>
                <option value="celsius">Celsius (°C)</option>
                <option value="fahrenheit">Fahrenheit (°F)</option>
                <option value="kelvin">Kelvin (K)</option>
            </select>

            <label for="ke">Ke:</label>
            <select name="ke" id="ke" required>
                <option value="celsius">Celsius (°C)</option>
                <option value="fahrenheit">Fahrenheit (°F)</option>
                <option value="kelvin">Kelvin (K)</option>
            </select>

            <button type="submit" name="konversi">Konversi</button>
        </form>

        <?php
        if (isset($_POST['konversi'])) {
            $suhu = $_POST['suhu'];
            $dari = $_POST['dari'];
            $ke = $_POST['ke'];

            function konversiSuhu($suhu, $dari, $ke) {
                if ($dari == $ke) {
                    return $suhu; // Jika satuan sama, tidak perlu konversi
                }

                // Konversi ke Celsius terlebih dahulu
                switch ($dari) {
                    case 'fahrenheit':
                        $celsius = ($suhu - 32) * (5 / 9);
                        break;
                    case 'kelvin':
                        $celsius = $suhu - 273.15;
                        break;
                    default:
                        $celsius = $suhu;
                }

                // Konversi dari Celsius ke satuan tujuan
                switch ($ke) {
                    case 'fahrenheit':
                        return ($celsius * (9 / 5)) + 32;
                    case 'kelvin':
                        return $celsius + 273.15;
                    default:
                        return $celsius;
                }
            }

            $hasil = konversiSuhu($suhu, $dari, $ke);
            echo "<div class='result'><strong>Hasil Konversi:</strong> $hasil $ke</div>";
        }
        ?>
    </div>
</body>
</html>