<?php include_once 'action.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <!-- installation Tailwind with CDN -->
  <script src="https://cdn.tailwindcss.com"></script> 

  <!-- JS External -->
  <script src="ticket.js"></script>

  <title>Konfirmasi Pesanan</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="bg-violet-800 fixed w-full">
    <div class="mx-auto max-w-7xl px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <img class="block h-8 w-auto" src="img/logo.png" alt="logo">
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <a href="index.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Beranda</a>

              <a href="daftar_harga.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Daftar Harga</a>

              <a href="pemesanan_tiket.php" class="bg-violet-900 text-white px-3 py-2 rounded-md text-sm font-medium">Pesan Tiket</a>

              <a href="grafik.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Grafik</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>      

  <div class="container mx-auto px-40 py-20">
    <!-- Mencetak judul dengan fungsi prosedur -->
    <div class="text-3xl font-bold tracking-tight text-gray-900">
      <p><?= judul("Konfirmasi Pesanan") ?></p>
    </div>
    
    <!-- Tabel pesanan -->
    <table class="border-separate border-spacing-0 border border-slate-400 w-96 text-center">
      <tr>
        <td class="border py-2 bg-violet-200 w-96">Nama Pemesan</td>
        <td class="border w-80"><?= $data['nama_lengkap'] ?></td>
      </tr>
      <tr>
        <td class="border py-2 bg-violet-200 w-96">Nomor Identitas</td>
        <td class="border w-80"><?= $data['nomor_identitas'] ?></td>
      </tr>
      <tr>
        <td class="border py-2 bg-violet-200 w-96">No. HP</td>
        <td class="border w-80"><?= $data['nomor_hp'] ?></td>
      </tr>
      <tr>
        <td class="border py-2 bg-violet-200 w-96">Tempat Wisata</td>
        <td class="border w-80"><?= $data['tempat_wisata'] ?></td>
      </tr>
      <tr>
        <td class="border py-2 bg-violet-200 w-96">Pengunjung Dewasa</td>
        <td class="border w-80"><?= $data['pengunjung_dewasa'] ?></td>
      </tr>
      <tr>
        <td class="border py-2 bg-violet-200 w-96">Pengunjung Anak-anak</td>
        <td class="border w-80"><?= $data['pengunjung_anak'] ?></td>
      </tr>
      <?php
      $harga = $data['harga_tiket'];
      $hasil_rupiah = "Rp " . number_format($harga);?>
      <tr>
        <td class="border py-2 bg-violet-200 w-96">Harga Tiket</td>
        <td class="border w-80" id="harga"><span id="harga"><?= $hasil_rupiah ?></td>
      </tr>
      <?php
      $total = $data['total_bayar'];
      $hasil_rupiah = "Rp " . number_format($total);?>
      <tr>
        <td class="border py-2 bg-violet-800 w-96 text-white">Total Bayar</td>
        <td class="border py-2 bg-violet-800 w-80 text-white" id="total"><?= $hasil_rupiah ?></td>
      </tr>
    </table>
  </div>
</body>

</html>