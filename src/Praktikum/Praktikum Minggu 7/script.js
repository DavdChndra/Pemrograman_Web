function kirimPesan() {
  let nama = document.getElementById("nama").value;
  let pesan = document.getElementById("pesan").value;

  if (nama === "" || pesan === "") {
    alert("Nama dan pesan tidak boleh kosong!");
    return false;
  } else {
    alert(`Terima kasih, ${nama}! Pesan kamu sudah terkirim.`);
    return true;
  }
}
