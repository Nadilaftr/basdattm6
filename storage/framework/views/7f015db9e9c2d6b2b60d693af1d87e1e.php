<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Proyek Laravel Nadila!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; 
            margin: 20px;
            text-align: center;
        }

        header {
            text-align: center;
            background-color: #00bcd4; 
            color: #fff;
            padding: 10px;
        }

        .box {
            background-color: #fff; 
            border-radius: 8px; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 200px;
            margin: 10px;
            padding: 20px;
            text-align: center;
            display: inline-block;
        }

        .box a {
            text-decoration: none;
            color: #00bcd4; 
            font-weight: bold;
        }

        .box:hover {
            background-color: #00bcd4; 
            color: #fff;
            cursor: pointer;
        }

        .button {
            display: inline-block;
            background-color: #00bcd4; 
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 15px 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0097a7; 
        }

        .intro-text {
            margin-top: 20px;
            font-size: 18px;
            color: #00796b;
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
        <h1>Selamat Datang di Dunia Nadila!</h1>
    </header>

    <img src="storage/img/profil.jpeg" alt="profil">

    <div style="text-align: center; margin-top: 20px;">
        <a href="<?php echo e(url('/biodata')); ?>" class="button">Biodata</a>
        <a href="<?php echo e(url('/cv')); ?>" class="button">CV</a>
        <a href="<?php echo e(url('/portofolio')); ?>" class="button">Portofolio</a>
        <a href="<?php echo e(url('/fact')); ?>" class="button">Fact</a>
        <a href="<?php echo e(url('/Media Sosial')); ?>" class="button">Media Sosial</a>
    </div>

    <div class="intro-text">
        Mari mengenal lebih jauh dan saling memahami (ehem)
    </div>

</body>

</html>
<?php /**PATH D:\xampp\htdocs\basdat\resources\views/welcome.blade.php ENDPATH**/ ?>