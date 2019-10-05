<?php defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Monitoring Business</title>
<link rel="stylesheet" type="text/css" href="assets/css/Registrasi.css">
</head>
<body>

<center><form action="/action_page.php">
  <div class="container">
    <center><h1 id="cek">Register</h1></center>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="nl"><b>Nama Lengkap</b></label>
    <input type="text" placeholder="Enter Nama Lengkap" name="nl" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="pass"><b>New Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <label for="confirm"><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Confirm Password" name="confirm" required>

    <label for="nb"><b>Nomor Telephone</b></label>
    <input type="text" placeholder="Enter Nomor Telephone" name="hp" required>

    <label for="nb"><b>Nama Bisnis</b></label>
    <input type="text" placeholder="Enter Nama Bisnis" name="nb" required>

    <tr>
      <strong><td>Jenis Bisnis</td></strong>
      <strong><td> : </td></strong>
      <td>
        <select name="jb" id="jb" required>
          <option value="">**************Pilih**************</option>
          <option value="1.">Manufaktur</option>
          <option value="2.">Jasa</option>
          <option value="3.">Pengecer dan Distributor</option>
          <option value="4.">Pertanian dan Pertambangan</option>
          <option value="5.">Finansial</option>
          <option value="6.">Utilitas</option>
          <option value="7.">Real Estate</option>
          <option value="8.">Transportasi</option>
        </select>
      </td>
    </tr>
    <br><br>

    <tr>
      <strong><td>Alamat Owner</td></strong>
      <strong><td> : </td></strong>
      <br>
      <td>
        <br>
        <textarea>Isi Alamat Owner</textarea>
      </td>
    </tr>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form></center>

</body>
</html>
