<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 ?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/lp.css"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/KelolaDataOwner.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <title>Monitoring Business</title>
  </head>
  
  <body >
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url("LandingOwnerController") ?>">Monitoring Business</a>
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url("KelolaArusKasController") ?>">Keuangan</a>
        </div>
        
        <ul class="nav navbar-nav navbar-right">
          <div class="navbar-header">
              <a class="navbar-brand" href="#">Nama Owner</a>
          </div>
          <li><a href="<?php echo base_url("LandingController") ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>
 
    <div class="container">
      <div class="jumbotron">
        <h1>Nama Bisnis</h1>      
        <p>Keterangan Bisnis yang dimiliki.</p>
      </div>    
    </div>

      <div class="card text-center">
        <div class="card-header">
          <strong>Biodata Pemilik Usaha</strong>
        </div>
        
        <div class="container">
      <button style="width: 250px; float: left;" type="button" class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Tambah Data Owner</button>      

      <div class="input-group" style="width: 200px; float: right;">
        <input type="text" class="form-control" placeholder="Search Nama Cabang ...">
      </div><br><br><hr> 

      <div class="row">
        <div class="col-sm-6">
          <div class="card-body">
            <div class="card">
              <img src="avatar1.jpg" alt="Avatar" style="width:100%">
              <div class="containerc">
                <h4><b>Jane Doe</b></h4> 
                <p>Interior Designer</p>
                <button type="button" class="btn btn-warning" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Edit</button> 
                <button type="button" class="btn btn-danger">Hapus</button>  
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card-body">
            <div class="card">
              <img src="avatar1.jpg" alt="Avatar" style="width:100%">
              <div class="containerc">
                <h4><b>Jane Doe</b></h4> 
                <p>Interior Designer</p>
                <button type="button" class="btn btn-warning" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Edit</button> 
                <button type="button" class="btn btn-danger">Hapus</button>  
              </div>
            </div>
          </div>
        </div>
      </div>

          <center><div class="card-body1">
            <div class="card">
              <img src="avatar1.jpg" alt="Avatar" style="width:100%">
              <div class="containerc1">
                <h4><b>Jane Doe</b></h4> 
                <p>Interior Designer</p>
                <button type="button" class="btn btn-warning" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Edit</button> 
                <button type="button" class="btn btn-danger">Hapus</button>  
              </div>
            </div>
          </div></center>

      <div class="row">
          <div class="col-sm-6">
            <div class="card-body">
              <div class="card">
                <img src="avatar1.jpg" alt="Avatar" style="width:100%">
                <div class="containerc">
                  <h4><b>Jane Doe</b></h4> 
                  <p>Interior Designer</p>
                  <button type="button" class="btn btn-warning" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Edit</button> 
                  <button type="button" class="btn btn-danger">Hapus</button> 
                </div>
              </div>
            </div>
          </div>

        <div class="col-sm-6">
            <div class="card-body">
              <div class="card">
                <img src="avatar1.jpg" alt="Avatar" style="width:100%">
                <div class="containerc">
                  <h4><b>Jane Doe</b></h4> 
                  <p>Interior Designer</p>
                  <button type="button" class="btn btn-warning" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Edit</button> 
                  <button type="button" class="btn btn-danger">Hapus</button>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>



    <div id="id01" class="modal">
        
        <form class="modal-content animate" action="/action_page.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="avatar.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Nama Lengkap</b></label>
            <br>
            <input type="text" placeholder="Enter Nama Lengkap" name="uname" required>
            <br>
            <label for="psw"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Enter Email" name="psw" required>
            <br>
            <label for="js"><b>New Password</b></label>
            <br>
            <input type="text" placeholder="Enter New Password" name="js" required>
            <br>
            <label for="js1"><b>Confirm Password</b></label>
            <br>
            <input type="text" placeholder="Enter Confirm Password" name="js1" required>
            <br>
            <label for="hp"><b>No Telephone</b></label>
            <br>
            <input type="text" placeholder="Enter No Telephone" name="hp" required>
            <br>   
            <label for="bisnis"><b>Nama Bisnis</b></label>
            <br>
            <input type="text" placeholder="Enter Nama Bisnis" name="bisnis" required>
            <br>
            <label for="alamat"><b>Alamat</b></label>
            <br>
            <textarea></textarea>
            <br>     
            <button class="button1" type="submit">Simpan</button>
            <br>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Data yang dimasukkan sudah benar sesuai dengan kenyataan.
            </label>
          </div>

          <div class="containerbwh" style="background-color:#f1f1f1">
            <button style="float: right;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> <br>
          </div>
        </form>
      </div>

