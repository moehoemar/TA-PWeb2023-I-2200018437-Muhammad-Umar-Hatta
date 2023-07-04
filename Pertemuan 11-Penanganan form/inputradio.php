<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INPUT TYPE RADIO</title>
</head>
<body>
  <form action="prosesradio.php" method="post" name="input">
    <h2>Pilih Program Studi</h2>
    <input type="radio" name="prodi" value="TIF"/> Teknik Informatika <br/>
    <input type="radio" name="prodi" value="TI"/> Teknik Industri <br/>
    <input type="radio" name="prodi" value="TE"/> Teknik Elektro <br/>
    <input type="radio" name="prodi" value="TK"/> Teknik Kima <br/>
    <input type="radio" name="prodi" value="TP"/> Teknologi Pangan <br/>
    <input type="submit" name="Pilih" value="Pilih"/>
    <input type="reset" name="reset" value="Reset"/>
  </form>
</body>
</html>