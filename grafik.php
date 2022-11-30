<?php include_once 'action.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- installation Tailwind with CDN -->
  <script src="https://cdn.tailwindcss.com"></script> 

  <!-- installation Chart.js with CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <title>Grafik Pemesanan</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-violet-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                <img class="block h-8 w-auto" src="img/logo.png" alt="logo">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                    <!-- Current: "bg-violet-900 text-white", Default: "text-violet-300 hover:bg-violet-700 hover:text-white" -->
                    <a href="index.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Beranda</a>

                    <a href="daftar_harga.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Daftar Harga</a>

                    <a href="pemesanan_tiket.php" class="text-violet-300 hover:bg-violet-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pesan Tiket</a>

                    <a href="grafik.php" class="bg-violet-900 text-white px-3 py-2 rounded-md text-sm font-medium">Grafik</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </nav>

    <div class="container flex text-center py-3 mx-auto">
        <!-- Grafik Pengunjung Pantai -->
        <div class="w-80 mx-auto">
            <!-- Mencetak judul dengan fungsi prosedur -->
            <div class="text-md font-bold tracking-tight text-gray-900">
                <p><?= judul("Pengunjung Pantai") ?></p>
            </div>
            <canvas id="pantai"></canvas>
        </div>
        <!-- Grafik Pengunjung Museum -->
        <div class="w-80 mx-auto">
            <!-- Mencetak judul dengan fungsi prosedur -->
            <div class="text-md font-bold tracking-tight text-gray-900">
                <p><?= judul("Pengunjung Museum") ?></p>
            </div>
            <canvas id="museum"></canvas>
        </div>
        <!-- Grafik Pengunjung Taman Nasional -->
        <div class="w-80 mx-auto">
            <!-- Mencetak judul dengan fungsi prosedur -->
            <div class="text-md font-bold tracking-tight text-gray-900">
                <p><?= judul("Pengunjung Taman Nasional") ?></p>
            </div>
            <canvas id="taman"></canvas>
        </div>
    </div>

<script>

// Menampilkan Grafik Pengunjung Pantai
const pantai = document.getElementById('pantai').getContext('2d');
const chart_pantai = new Chart(pantai, {
    type: 'pie',
    data: {
        labels: ['Dewasa', 'Anak-anak'],
        datasets: [{
            label: 'jumlah: ',
            data: [
                <?= get_dewasa_pantai() ?>, 
                <?= get_anak_pantai() ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Menampilkan Grafik Pengunjung Museum
const museum = document.getElementById('museum').getContext('2d');
const chart_museum = new Chart(museum, {
    type: 'pie',
    data: {
        labels: ['Dewasa', 'Anak-anak'],
        datasets: [{
            label: 'jumlah: ',
            data: [
                <?= get_dewasa_museum() ?>, 
                <?= get_anak_museum() ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Menampilkan Grafik Pengunjung Taman Nasional
const taman = document.getElementById('taman').getContext('2d');
const chart_taman = new Chart(taman, {
    type: 'pie',
    data: {
        labels: ['Dewasa', 'Anak-anak'],
        datasets: [{
            label: 'jumlah: ',
            data: [
                <?= get_dewasa_taman() ?>, 
                <?= get_anak_taman() ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</body>
</html>