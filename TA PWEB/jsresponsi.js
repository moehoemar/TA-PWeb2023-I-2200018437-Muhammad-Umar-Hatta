function validasi(formId){
  var Nama = document.getElementById("name").value;
  var Jumlah = document.getElementById("quantity").value;
  var Alamat = document.getElementById("address").value;
    if (Nama !="" && Jumlah !="" && Alamat !="") {
      return true;
    }else{
       alert('Anda harus mengisi data dengan lengkap !')
     }
}


