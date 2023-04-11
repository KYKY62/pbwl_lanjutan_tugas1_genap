<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Blog</title>
    <link rel="stylesheet" href="../layouts/assets/css/style.css">
</head>

<body>

    <div class="container">
        <header>
            <img src="../layouts/assets/img/header.jpg" alt="">
        </header>

        <nav>
            <ul>
                <li><a href="../track.php">Track</a></li>
                <li><a href="../album/album.php">Album</a></li>
                <li><a href="../played/played.php">Played</a></li>
                <li><a href="artist.php">Artist</a></li>
                <li><a href="../index.php">Keluar</a></li>
            </ul>
        </nav>

        <main>
            <section>
                <?php require "kat_tampil.php"; ?>
            </section>
        </main>

        <footer>
            Copyright &copy; 2022. Designed by Rizky Akbar Siregar
        </footer>
    </div>

</body>

</html>