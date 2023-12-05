<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Budak Baru | Budak Hoyo</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Budak Baru</h3>
        <h1>Budak Hoyo</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    </body>
</html>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran budak baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>