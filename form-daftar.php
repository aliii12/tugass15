<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Mahasiswa Baru | IBI Darmajaya</title>
</head>
<style>
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>
<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
    </header>
    
<form action="proses-pendaftaran.php" method="POST" style="border:1px solid #ccc"> 

    <a href="index.php"><button class="w3-button w3-black w3-section w3-center" type="submit">Kembali Ke Beranda</button></a>

<div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="nama"><b>Nama</b> </label>
    <input type="text" name="nama" placeholder="Masukan Nama Lengkap" required>
    <br>
    <p>
    <label for="alamat"><b>Alamat:</b> </label>
    <br>
    <textarea rows="3" cols="44" style="font-family:segoe ui" placeholder="Masukan Alamat" name="alamat"></textarea>
    </p>

<p>
    <label for="jenis_kelamin"><b>Jenis Kelamin:</b> </label>
    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
    </P>
<br>
<p>
    <label for="agama"><b>Agama:</b> </label>
    <select name="agama">
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        <option>Atheis</option>
    </select>
    </P>
    <br>
<p>
    <label for="sekolah_asal"><b>Sekolah Asal:<b> </label>
    <input type="text" name="sekolah_asal" placeholder="nama sekolah" require>
    </P>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="daftar">Sign Up</button>
    </div>
  </div>

</fieldset>
</body>
</html>