// Reset Form
function resetForm() {
  var form = document.getElementById("mahasiswaForm");
  form.reset();
}

// Local Storage
var browserType = localStorage.getItem("browser_type");
document.getElementById("browserInfo").textContent =
  "Submitted From: " + browserType;

//Validasi Form
function validateForm() {
  const nama = document.getElementById("nama").value;
  const nim = document.getElementById("nim").value;
  const prodi = document.getElementById("prodi").value;
  const jenisKelamin = document.querySelector(
    'input[name="jenisKelamin"]:checked'
  );
  const status = document.getElementById("status").checked
    ? "Aktif"
    : "Tidak Aktif";

  if (nama && nim && prodi && jenisKelamin) {
    return true;
  } else {
    alert("Harap Lengkapi Semua Data Form");
  }
}
