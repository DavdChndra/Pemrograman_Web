function validation() {
  const nama_lengkap_input = document.getElementById("nama_lengkap");
  const email_input = document.getElementById("email");
  const password_input = document.getElementById("password");

  const nama_lengkap = nama_lengkap_input.value.trim();
  const email = email_input.value.trim();
  const password = password_input.value.trim();

  const feedback_nama_lengkap = document.getElementById("feedback_nama_lengkap");
  const feedback_email = document.getElementById("feedback_email");
  const feedback_password = document.getElementById("feedback_password");

  const inputs = [nama_lengkap_input, email_input, password_input];
  const feedbacks = [feedback_nama_lengkap, feedback_email, feedback_password];

  // Reset all
  inputs.forEach((input) => input.classList.remove("is-invalid", "is-valid"));
  feedbacks.forEach((fb) => fb.classList.remove("valid-feedback", "invalid-feedback", "text-danger", "text-success"));

  let valid = true;

  if (nama_lengkap === "" || email === "" || password === "") {
    alert("Semua Kolom Wajib Diisi !!!");
    valid = false;
  }

  // Nama Lengkap
  if (nama_lengkap === "") {
    nama_lengkap_input.classList.add("is-invalid");
    feedback_nama_lengkap.classList.add("invalid-feedback", "text-danger");
    feedback_nama_lengkap.textContent = "Nama lengkap wajib diisi !!!";
    valid = false;
  } else {
    nama_lengkap_input.classList.add("is-valid");
    feedback_nama_lengkap.classList.add("valid-feedback", "text-success");
    feedback_nama_lengkap.textContent = "Nice !!!";
  }

  // Email
  if (email === "" || !email.includes("@") || !email.includes(".")) {
    email_input.classList.add("is-invalid");
    feedback_email.classList.add("invalid-feedback", "text-danger");
    feedback_email.textContent = "Masukkan email yang benar !!!";
    valid = false;
  } else {
    email_input.classList.add("is-valid");
    feedback_email.classList.add("valid-feedback", "text-success");
    feedback_email.textContent = "Nice !!!";
  }

  // Password
  if (password === "" || password.length < 8) {
    password_input.classList.add("is-invalid");
    feedback_password.classList.add("invalid-feedback", "text-danger");
    feedback_password.textContent = "Masukkan minimal 8 karakter !!!";
    valid = false;
  } else {
    password_input.classList.add("is-valid");
    feedback_password.classList.add("valid-feedback", "text-success");
    feedback_password.textContent = "Nice !!!";
  }

  if (valid) {
    alert("Form berhasil dikirim !!!");
  }

  return valid;
}

function main(event) {
  event.preventDefault();
  if (validation()) {
    const nama_lengkap = document.getElementById("nama_lengkap").value.trim();
    const email = document.getElementById("email").value.trim();
    document.getElementById("sapa").innerText = `Halo, ${nama_lengkap} !!! \n ${email}`;
  }
  return false;
}
