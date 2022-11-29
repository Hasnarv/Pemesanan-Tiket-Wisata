<?php
$koneksi = mysqli_connect('localhost','root','','tiket_wisata');
define('URL', 'http://localhost/pesan_tiket_wisata');
if(!empty($_POST['harga']) && !empty($_POST['nama'])){
    $nama = $_POST['nama'];
    $no_id = $_POST['no_id'];
    $no_hp = $_POST['no_hp'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $pengunjung_dewasa = $_POST['pengunjung_dewasa'];
    $pengunjung_anak= $_POST['pengunjung_anak'];
    $harga_tiket = $_POST['harga'];
    $total_bayar = $_POST['total'];
    mysqli_query($koneksi,"INSERT INTO pemesanan VALUES (null, '$nama', '$no_id', '$no_hp', '$tempat', '$tanggal', '$pengunjung_dewasa', '$pengunjung_anak', '$harga_tiket', '$total_bayar')");
    $data= [
        'nama_lengkap' => $nama,
        'nomor_identitas' => $no_id,
        'nomor_hp' => $no_hp,
        'tempat_wisata' => $tempat,
        'tanggal_kunjungan' => $tanggal,
        'pengunjung_dewasa' => $pengunjung_dewasa,
        'pengunjung_anak' => $pengunjung_anak,
        'total_bayar' => $total_bayar,
        'harga_tiket' => $harga_tiket
    ];
    include_once('konfirmasi_pemesanan.php');
    die();
}
//Fungsi ini digunakan untuk mengoneksikan ke database
function connect()
{
    // Koneksi ke database
    $mysqli = new mysqli('localhost','root','','tiket_wisata');

    // Check connection
    if ($mysqli -> connect_error) {
        throw new Exception("Database error : " . $mysqli -> connect_error);
    }

    // Mengembalikan nilai koneksi
    return $mysqli;
}

// Prosedur untuk mengambil data tempat_wisata dari database
function get_tempat_wisata()
{
    // Query sql
    $sql = "SELECT * FROM `daftar_wisata`";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil;
}
// Prosedur untuk mencetak judul halaman
function judul($title)
{
    echo "<h4>$title</h4>";//Prosedur
}
// Prosedur untuk mengambil data pengunjung dewasa untuk wisata pantai
function get_dewasa_pantai()
{
    // Query sql
    $sql = "SELECT SUM(pengunjung_dewasa) as total FROM pemesanan WHERE tempat_wisata = 'pantai';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil[0]['total'];
}
// Prosedur untuk mengambil data pengunjung anak-anak untuk wisata pantai
function get_anak_pantai()
{
    // Query sql
    $sql = "SELECT SUM(pengunjung_anak) as total FROM pemesanan WHERE tempat_wisata = 'pantai';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil[0]['total'];
}
// Prosedur untuk mengambil data pengunjung dewasa untuk wisata museum
function get_dewasa_museum()
{
    // Query sql
    $sql = "SELECT SUM(pengunjung_dewasa) as total FROM pemesanan WHERE tempat_wisata = 'museum';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil[0]['total'];
}
// Prosedur untuk mengambil data pengunjung anak-anak untuk wisata museum
function get_anak_museum()
{
    // Query sql
    $sql = "SELECT SUM(pengunjung_anak) as total FROM pemesanan WHERE tempat_wisata = 'museum';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil[0]['total'];
}
// Prosedur untuk mengambil data pengunjung dewasa untuk wisata taman
function get_dewasa_taman()
{
    // Query sql
    $sql = "SELECT SUM(pengunjung_dewasa) as total FROM pemesanan WHERE tempat_wisata = 'taman_nasional';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil[0]['total'];
}
// Prosedur untuk mengambil data pengunjung anak-anak untuk wisata taman
function get_anak_taman()
{
    // Query sql
    $sql = "SELECT SUM(pengunjung_anak) as total FROM pemesanan WHERE tempat_wisata = 'taman_nasional';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil[0]['total'];
}
?>

