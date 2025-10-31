$(document).ready(function () {
  document.getElementById("btn").addEventListener("click", function () {
    Konfirmasi = confirm("Apakah kamu siap?");
    if (Konfirmasi == 1){
        $("h1").text("Jatuh Dengan Gaya!!!");
    }
  });
});
