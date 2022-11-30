<?php include_once 'action.php';?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket Wisata</title>

  <!-- installation Tailwind with CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="bg-violet-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                <img class="block h-8 w-auto bg-violet-700 p-2/3 rounded-md" src="img/logo.png" alt="logo">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                    <a href="index.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Beranda</a>

                    <a href="daftar_harga.php" class="bg-violet-900 text-white px-3 py-2 rounded-md text-sm font-medium">Daftar Harga</a>

                    <a href="pemesanan_tiket.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pesan Tiket</a>

                    <a href="grafik.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Grafik</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </nav>

    <!-- KONTEN -->
    <div class="container mx-auto px-40 py-10">
        <h2 class="text-3xl font-bold py-5 tracking-tight text-gray-900">Daftar Harga</h2>
        <table class="border-separate border-spacing-0 border w-full">
            <thead>
                <tr>
                    <th class="border py-2 bg-violet-200">Tempat Wisata</th>
                    <th class="border py-2 bg-violet-200">Harga</th>
                </tr>
            </thead>
            <tbody>
                <!-- Looping data daftar harga -->
                <?php for ($i = 0; $i < 3; $i++) { 
                    $angka = get_tempat_wisata()[$i]['harga'];
                    $hasil_rupiah = "Rp " . number_format($angka);?>
                    <tr>
                        <td class="border text-center"><?= get_tempat_wisata()[$i]['tempat_wisata'] ?></td>
                        <td class="border text-center"><?= $hasil_rupiah ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>