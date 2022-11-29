// identifikasi variabel
var pantai = 15000
var museum = 10000
var taman_nasional = 5000
var opsi_wisata = '' //pilihan tempat wisata
var total_anak = 0
var total_harga_anak = 0
var tiket_normal = 0
var tiket_anak = 0

// fungsi untuk mentrigger button pesan tiket
function onSubmit(event){
  hitung();
  setTimeout(function () {
    var id = document.querySelector("#no_id").value;
    // kondisi
    if (id.length < 16) {
      // jika nomor identitas kurang dari 16 digit
      // alert("No identitas harus 16 digit");
      Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: 'No identitas harus terdiri dari 16 digit'
      })
    } else {
      // jika nomor identitas sudah 16 digit
      document.pemesanan.submit();
    }
  }, 1000);
}    
 
// fungsi untuk menghitung total harga tiket pengunjung
function hitung() {
  var harga = document.getElementById("harga")
  var total = document.getElementById("total")
  var pengunjung_dewasa = document.querySelector('#pengunjung_dewasa').value
  var pengunjung_anak = document.querySelector('#pengunjung_anak').value
  var tempat = document.querySelector('#tempat').value

  // kondisi saat user memilih opsi tempat
  if (tempat == 'pantai') {
    opsi_wisata = pantai
  } else if (tempat == 'museum') {
    opsi_wisata = museum
  } else {
    opsi_wisata = taman_nasional
  }
  
  // kondisi ketika ada pengunjung anak-anak
  if (pengunjung_anak >= 1) {
    tiket_anak = diskon_anak(pengunjung_anak, opsi_wisata)
  }
  
  // rumus menghitung total harga tiket
  tiket_normal = pengunjung_dewasa * opsi_wisata 
  total_harga_tiket = tiket_normal + tiket_anak

  document.querySelector('input[name="harga"]').value = opsi_wisata;
  document.querySelector('input[name="total"]').value = total_harga_tiket;
  total.innerHTML = formatRupiah(total_harga_tiket, 'Rp ')
  harga.innerHTML = formatRupiah(opsi_wisata, 'Rp ')
}

// fungsi untuk menghitung potongan harga tiket anak-anak
function diskon_anak(jml,tempat){
  total_harga_anak = jml * tempat //rumus menghitung total harga tiket anak
  return tiket_anak = total_harga_anak - (total_harga_anak * (0.5))  //0,1 => 10% 
}

// fungsi untuk mentrigger button cancel
function cancel(){
  document.pemesanan.reset();
}
    
function formatRupiah(angka, prefix){
  var number_string = angka.toString().replace(/[^,\d]/g, ''),
  split       = number_string.split(','),
  sisa        = split[0].length % 3,
  rupiah        = split[0].substr(0, sisa),
  ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if(ribuan){
    separator = sisa ? ',' : '';
    rupiah += separator + ribuan.join(',');
  }

  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
}
    