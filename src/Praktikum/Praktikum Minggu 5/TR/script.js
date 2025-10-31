let umur = prompt("Masukkan umur Anda:");

if (umur === "" || umur === null) {
  alert("Harus memasukkan umur!");
  umur = prompt("Masukkan umur Anda:");
  if (umur === "" || umur === null) {
    alert("Akses ditolak karena tidak memasukkan umur.");
    aksesDitolak();
    throw new Error("Akses ditolak");
  }
}

umur = parseInt(umur);

if (isNaN(umur)) {
  alert("Input tidak valid. Harap masukkan angka!");
  window.location.reload();
} else if (umur < 17) {
  alert(`Maaf, Umur Anda ${umur} Tahun. Anda belum cukup umur untuk mengakses halaman ini.`);
  aksesDitolak();
} else {
  alert("Selamat datang di halaman praktikum!");
  document.getElementById("konten").style.display = "block";
}

function aksesDitolak() {
  document.body.innerHTML = `<div id="akses-ditolak" class="fade">&#x1F6AB; Akses Ditolak</div>`;
  document.getElementById("akses-ditolak").style.display = "block";
}

function ubahJudul() {
  const judulBaru = prompt("Masukkan judul baru:");
  if (judulBaru) {
    document.getElementById("judul").innerText = judulBaru;
  }
}

function proses() {
  const nama = document.getElementById("nama").value.trim();
  const angka = parseInt(document.getElementById("angka").value);
  const hasilDiv = document.getElementById("hasil");

  if (!nama || isNaN(angka)) {
    alert("Harap isi nama dan angka dengan benar!");
    return;
  }

  let genap = [];
  for (let i = 2; i <= angka; i += 2) {
    genap.push(i);
  }

  hasilDiv.innerHTML = `Halo, <b>${nama}</b>!<br>Daftar bilangan genap hingga ${angka}:<br>${genap.join(", ")}`;
}

function resetHalaman() {
  document.getElementById("nama").value = "";
  document.getElementById("angka").value = "";
  document.getElementById("hasil").innerHTML = "";
  document.getElementById("judul").innerText = "Halaman Praktikum";
}
