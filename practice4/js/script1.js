window.alert("selamat datang di halaman embedded script");

function hitung_luas_segitiga() {
  var a = parseFloat(document.getElementById("alas").value);
  var t = parseFloat(document.getElementById("tinggi").value);
  var hasil = 0.5 * a * t;
  document.getElementById("hasil").innerHTML = hasil;
}

function konversi() {
  var nilai_angka = parseFloat(document.getElementById("nilai_angka").value);

  if (nilai_angka >= 90) grade = "A";
  else if (nilai_angka >= 80) grade = "B+";
  else if (nilai_angka >= 70) grade = "B";
  else if (nilai_angka >= 60) grade = "C+";
  else if (nilai_angka >= 50) grade = "C";
  else if (nilai_angka >= 40) grade = "D";
  else if (nilai_angka >= 30) grade = "E";
  else grade = "F";
  document.getElementById("hasil2").innerHTML = grade;
}

function total() {
  var jumlah = parseFloat(document.getElementById("jumlah").value);
  var harga = parseFloat(document.getElementById("harga").value);
  if (isNaN(jumlah) || isNaN(harga)) {
    document.getElementById("total").value = "0";
  } else {
    document.getElementById("total").value = jumlah * harga;
  }
}
