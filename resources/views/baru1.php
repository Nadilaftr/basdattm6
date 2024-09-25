<!DOCTYPE html>
<html lang="en">

<head>
    <title>Selamat Datang di Proyek Pertama Laravel, Nadila!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; 
            margin: 20px;
        }

        header {
            text-align: center;
            background-color: #00bcd4; 
            color: #fff;
            padding: 10px;
        }

        section {
            margin-top: 20px;
            background-color: #fff; 
            border-radius: 8px; 
            text-align: center; 
        }

        h2 {
            color: #00bcd4; 
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        img {
            display: block;
            margin: auto;
            border-radius: 50%;
            margin-top: 20px;
            width: 300px; /* Ukuran gambar */
        }
    </style>
</head>

<body>

    <header>
        <h1>Biodata</h1>
    </header>

    <section>
        <img src="storage/img/foto2.jpeg" alt="foto2">
        <h2>Informasi Pribadi</h2>
        <ul>
            <li><strong>Nama:</strong> Nadila Fitri Noviardhana</li>
            <li><strong>Tempat, Tanggal Lahir:</strong> Mojokerto, 20 November 2003</li>
            <li><strong>Alamat:</strong> Kab. Mojokerto</li>
        </ul>
    </section>
    <form action="/cv/" method="get">
        <button type="submit">Next</button>
    </form>

</body>

</html>
