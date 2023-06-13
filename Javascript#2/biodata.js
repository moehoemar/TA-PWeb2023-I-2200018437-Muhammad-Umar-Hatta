function validateForm(event) {
  event.preventDefault();

  var nama = document.getElementById('nama').value;
  var alamat = document.getElementById('alamat').value;

  if (nama === '' || alamat === '') {
    alert('Nama dan alamat harus diisi!');
    return false;
  }

  var checkbox = document.getElementsByName('cek')[0];
  if (!checkbox.checked) {
    alert('Centang checkbox jika data sudah sesuai!');
    return false;
  }

  alert('Biodata diri berhasil dikirim!');
  document.getElementById('nama').value = '';
  document.getElementById('alamat').value = '';
  checkbox.checked = false;
}

var form = document.querySelector('form');
form.addEventListener('submit', validateForm);
