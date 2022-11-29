<?php include_once 'action.php';?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pemesanan Tiket Wisata</title>

  <!-- installation Tailwind with CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <!-- Navbar -->
    <nav class="bg-violet-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                <img class="block h-8 w-auto bg-violet-700 p-2/3 rounded-md" src="img/logo.png" alt="logo">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                    <a href="index.php" class="bg-violet-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Beranda</a>

                    <a href="daftar_harga.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Daftar Harga</a>

                    <a href="pemesanan_tiket.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pesan Tiket</a>

                    <a href="grafik.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Grafik</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto p-10">
      <!-- Mencetak judul dengan fungsi prosedur -->
      <div class="text-3xl font-bold tracking-tight text-gray-900">
          <p><?= judul("Daftar Tempat Wisata") ?></p>
      </div>
        
      <!-- Looping data foto tempat wisata-->
      <div class="bg-white flex">
            <?php for ($i = 0; $i < 3; $i++) { ?>
            <div class="mx-auto max-w-2xl py-4 px-4 lg:max-w-7xl lg:px-8">
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 grid-cols-4 xl:gap-x-8">
                <div class="group relative">
                    <div class=" overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 h-64 w-96">
                        <img src="img/<?= get_tempat_wisata()[$i]['doc'] ?>" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="mt-4 w-96 flex justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-700"><?= get_tempat_wisata()[$i]['tempat_wisata'] ?></h3>
                        </div>
                        <p id="harga" class="text-sm font-medium text-gray-900">Rp <?= get_tempat_wisata()[$i]['harga'] ?></p>
                    </div>
                </div>
                </div>
            </div>
            <?php } ?>
      </div>
        
      <!-- Mencetak judul dengan fungsi prosedur -->
      <div class="text-3xl font-bold tracking-tight text-gray-900 pt-10">
          <p><?= judul("Profil Tempat Wisata") ?></p>
      </div>
     
      <!-- Looping data video profil tempat wisata -->
      <div class="bg-white flex">
            <?php for ($i = 3; $i < 6; $i++) { ?>
            <div class="mx-auto max-w-2xl py-4 px-4 lg:max-w-7xl lg:px-8">
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 grid-cols-4 xl:gap-x-8">
                <div class="group relative">
                    <div class=" overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 h-64 w-96">
                        <iframe src="<?= get_tempat_wisata()[$i]['doc'] ?>" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen alt="" class="h-full w-full object-cover"></iframe>
                    </div>
                    <div class="mt-4 w-96 flex justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-700"><?= get_tempat_wisata()[$i]['tempat_wisata'] ?></h3>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <?php } ?>
      </div>
    </div>
</body>
</html>
