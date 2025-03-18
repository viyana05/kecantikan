<?php
// Data paket wisata dalam bentuk array multidimensi
$perawatanList = array(
    array("Perawatan 1", "Isi deskripsi perawatan 1", 125000, "perawatan1.jpg"),
    array("Perawatan 2", "Isi deskripsi perawatan 2", 135000, "perawatan2.jpg"),
    array("Perawatan 3", "Isi deskripsi perawatan 3", 145000, "perawatan3.jpg"),
    array("Perawatan 4", "Isi deskripsi perawatan 4", 155000, "perawatan4.jpg")
);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8"> <!-- Menentukan karakter encoding halaman -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Membuat halaman responsif -->
    <title>Daftar Paket Wisata</title> <!-- Judul halaman -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Menggunakan Bootstrap untuk tampilan yang lebih rapi -->
    <style>
        .btn-pink-light {
            background-color: pink;
            border-color: pink;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar" style="background-color: pink;"> <!-- Navbar dengan warna pink -->
        <div class="container-fluid"> <!-- Container yang memenuhi lebar layar -->
            <div class="d-flex justify-content-between w-100"> <!-- Membuat area di dalam navbar memenuhi lebar layar dan menyusun item ke kiri dan kanan -->
                <!-- Menu kiri -->
                <div class="d-flex">
                    <a class="nav-link text-light mx-3 fs-5 py-2 px-3" href="#">Home</a> <!-- Link ke Beranda -->
                    <a class="nav-link text-light mx-3 fs-5 py-2 px-3" href="transaksi.php">Transaksi</a> <!-- Link ke halaman transaksi -->
                </div>
                <!-- Menu kanan (Logout) -->
                <a class="nav-link text-light mx-3 fs-5 py-2 px-3" href="logout.php">Logout</a> <!-- Link untuk logout -->
            </div>
        </div>
    </nav>


    <!-- Content utama -->
    <div class="mb-4 p-0"> <!-- Section dengan latar belakang terang, tanpa padding di bagian atas dan bawah -->
        <div class="container-fluid p-0"> <!-- Container full-width tanpa padding -->
            <img src="img/banner.png" class="img-fluid w-100" alt="" style="height: 300px; object-fit: cover; border-radius: 10px;">
            <!-- Gambar banner dengan lebar 100%, tinggi 200px, objek gambar disesuaikan untuk mengisi area -->
        </div>
    </div>

    <!-- Daftar Produk Co Kreatif -->
    <div class="container-fluid mt-5"> <!-- Container utama full-width dengan margin top -->
        <h2 class="text-left mb-4">Daftar Perawatan Klinik Kecantikan</h2> <!-- Judul daftar paket wisata -->
        <div class="row justify-content-start"> <!-- Menyusun produk dari kiri ke kanan -->
            <?php foreach ($perawatanList as $index => $paket) : ?> <!-- Perulangan untuk menampilkan semua paket wisata -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> <!-- Mengatur ukuran kolom agar responsive dan jarak antar kolom -->
                    <div class="card h-100" style="height: 400px;"> <!-- Membuat card Bootstrap dengan tinggi 400px -->
                        <img src="img/<?= $paket[3] ?>" class="card-img-top" alt="<?= $paket[0] ?>" style="height: 200px; object-fit: cover;">
                        <!-- Menampilkan Gambar sesuai dengan data yang ada di variabel, dengan tinggi 200px -->
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= $paket[1] ?></h5> <!-- Menampilkan Judul sesuai urutan data -->
                            <p class="card-text"><?= $paket[0] ?></p> <!-- Menampilkan Deskripsi sesuai urutan data -->
                            <p class="card-text"><strong>Rp <?= number_format($paket[2], 0, ',', '.') ?></strong></p>
                            <!-- Menampilkan Harga dengan format pemisah ribuan dan desimal -->
                            <a href="transaksi.php?id=<?= $index ?>" class="btn btn-pink-light mt-auto">Pilih Produk</a> <!-- Tombol untuk memilih paket wisata -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?> <!-- Akhir dari perulangan menampilkan paket wisata -->
        </div>
    </div>
</body>

</html>