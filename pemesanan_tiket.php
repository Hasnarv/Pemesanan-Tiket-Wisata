<?php include_once 'action.php';?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pemesanan Tiket Wisata</title>

  <!-- installation Tailwind with CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- installation SweetAlert2 with CDN -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- JS External -->
  <script src="ticket.js"></script>
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

    <div class="container mx-auto px-80 py-20">
        <!-- Mencetak judul dengan fungsi prosedur -->
        <div class="text-3xl font-bold tracking-tight text-gray-900">
            <p><?= judul("Form Pemesanan") ?></p>
        </div>

        <!-- Form Pemesanan -->
        <form action="action.php" method="POST" name="pemesanan">
            <div class="shadow">
                <div class=" bg-white px-4 py-5">
                    <div class="nama-lengkap flex py-2">
                        <label for="nama-lengkap" class="block w-1/3 my-auto text-md font-medium text-gray-700">Nama
                            Lengkap</label>
                        <input type="text" class=" mt-1 p-2 block w-full rounded-md border border-gray-200 shadow-sm" id="nama"
                        name="nama">
                    </div>

                    <div class="identitas flex py-2">
                        <label for="no-identitas" class="block w-1/3 my-auto text-md font-medium text-gray-700">Nomor
                            Identitas</label>
                        <input type="text" class=" mt-1 p-2 block w-full rounded-md border border-gray-200 shadow-sm" minlength="16" maxlength="16" id="no_id" name="no_id">
                    </div>

                    <div class="no-hp flex py-2">
                        <label for="no-hp" class="block w-1/3 my-auto text-md font-medium text-gray-700">No.
                            HP</label>
                        <input type="text" class="mt-1 p-2 block w-full rounded-md border border-gray-200 shadow-sm" maxlength="12" id="no_hp" name="no_hp">
                    </div>

                    <div class="tempat flex py-2">
                        <label for="tempat" class="block w-1/3 my-auto text-md font-medium text-gray-700">Tempat Wisata</label>
                        <select id="tempat" name="tempat"
                            class="mt-1 p-2 block w-full rounded-md border border-gray-200 shadow-sm">
                            <option value="pantai alam indah">Pantai</option>
                            <option value="museum situs semedo">Museum</option>
                            <option value="taman nasional pancasila">Taman Nasional</option>
                        </select>
                    </div>

                    <div class="tanggal flex py-2">
                        <label for="tanggal" class="block w-1/3 my-auto text-md font-medium text-gray-700">Tanggal Kunjungan</label>
                        <input type="date" class="mt-1 p-2 block w-full rounded-md border border-gray-200 shadow-sm" id="tanggal" name="tanggal">
                    </div>

                    <div class="dewasa flex py-2">
                        <div class="label block w-1/3 my-auto text-md text-gray-700">
                            <label for="pengunjung_dewasa" class="font-medium">Pengunjung Dewasa</label>
                        </div>
                        <input type="number" class=" mt-1 p-2 block w-full rounded-md border border-gray-200 shadow-sm" id="pengunjung_dewasa" name="pengunjung_dewasa">
                    </div>

                    <div class="anak flex py-2">
                        <div class="label block w-1/3 my-auto text-md text-gray-700">
                            <label for="pengunjung_anak" class="font-medium">Pengunjung Anak-anak</label>
                            <p class="text-xs">Usia dibawah 12 tahun</p>
                        </div>
                        <input type="number" class=" mt-1 p-2 block w-full rounded-md border border-gray-200 shadow-sm" id="pengunjung_anak" name="pengunjung_anak">
                    </div>

                    <div class="harga-tiket flex py-2">
                            <label for="harga" class="block w-1/3 my-auto text-md font-medium text-gray-700">Harga Tiket</label>
                            <span id="harga"></span>
                            <input  name="harga" type="hidden" class="p-2 text-md text-gray-700">
                        </div>

                        <div class="harga-total flex py-2">
                            <label for="total" class="block w-1/3 my-auto text-md font-medium text-gray-700">Harga Total</label>
                            <span id="total"></span>
                            <input  name="total" type="hidden" class="p-2 text-md text-gray-700">
                        </div>

                    <div class="snk flex items-center py-2">
                        <input id="snk" name="snk" type="checkbox" class="h-4 w-4 p-2 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="candidates" class="p-2 font-medium text-gray-700">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
                    </div>
                </div>
            </div>
        </form>
        <div class="bg-gray-50 px-4 py-3 text-center">
                <button
                    class="inline-flex justify-center rounded-md border border-transparent bg-violet-800 py-2 px-4 mx-4 text-sm font-medium text-white shadow-sm hover:bg-violet-700" onclick="hitung()" id="hitung">Hitung Total Bayar
                <button>
                <button
                    class="inline-flex justify-center rounded-md border border-transparent bg-violet-800 py-2 px-4 mx-4 text-sm font-medium text-white shadow-sm hover:bg-violet-700" id="pesan" onclick="onSubmit(event)">Pesan Tiket
                <button>
                <button
                    class="inline-flex justify-center rounded-md border border-transparent bg-violet-800 py-2 px-4 mx-4 text-sm font-medium text-white shadow-sm hover:bg-violet-700" id="cancel" onclick="cancel()">Cancel
                <button>
        </div>
    </div>
</body>
</html>