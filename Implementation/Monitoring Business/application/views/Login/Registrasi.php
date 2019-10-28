<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monitoring Business</title>
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/Registrasi.css"> -->
  <link rel="stylesheet" type="text/css" href="assets/css/Regis.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="contform">
    <form class="contform2" action="/action_page.php">
      <div class="registhead">
        <h1 id="cek">REGISTER</h1>
        <h2>Please fill in this form to create an account</h2>
      </div> 

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
        <div class="label"><td>Jenis Bisnis</td> </div>
          <br>
          <td>
            <select style="background-color:#f1f1f1;" class="form-control form-control-lg" name="jb" id="jb" required>
              <option value="">-Pilih-</option>
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
        <br>

        <tr>
          <div class="label">
           <td>Alamat Owner</td></div>
           <br>
           <td>
            <textarea style="background-color: #f1f1f1; border-radius: 8px;" placeholder="Isi Alamat Owner" style="border-radius: 8px;"></textarea>
          </td>
        </tr>

        <hr>
        <p class="acc">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="registerbtn">Register</button>
        <p class="acc" style="text-align: center;">Already have an account? <a href="#" >Sign in</a>.</p>
      </form>
    </div>
