<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/lp.css"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/KelolaDataCabang.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    <title>Monitoring Business</title>


  </head>
  
  <body style="background:white; color:black;">
    <nav class="navbar navbar-inverse" style="background:#0d0d0c;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="landingPageCabang.html">Monitoring Business</a>
        </div>
        
        <ul class="nav navbar-nav navbar-right">
          <div class="navbar-header">
              <a class="navbar-brand" href="#">Nama Cabang</a>
          </div>
          <li><a href="landingPage.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>

    <div style="font-family: Harrington; font-size: 36px;">
          <strong><center>- Data Cabang PT X -</center></strong>
    </div><hr>

    <div class="container">                 
      <div class="table-responsive"> 
      <div class="input-group" style="width: 250px; float: right;">
              <input type="text" class="form-control" placeholder="Search Nama Cabang">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div><br><br><hr>         
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Cabang</th>
            <th>Lokasi Cabang</th>
            <th>Jenis Usaha</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Sinar Maju</td>
            <td>Jakarta</td>
            <td>Furnitur dan Mebel</td>
            <td><button type="button" class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Edit</button> <button type="button" class="btn btn-danger">Hapus</button></td>
          </tr>
        </tbody>
      </table>
        <button style="float:right; width: 250px; float: left;" type="button" class="btn btn-warning" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Tambah Data Cabang</button>
      </div>
    </div>

    <div style=";height:100%;position:relative;border-top:1px solid hsla(0,0%,100%,.2);padding-top:20px;padding-bottom:20px">
        <div class="container">
            <br>
            <img src="" style="width:100%;max-width:140px;display:block;margin-left:auto;margin-right:auto;">
                <div style="text-align:center;margin-top:15px;">
                     Copyright ©MonitoringBusiness 2019 <a href="#" ><strong>Monitoring Business</strong></a></div>
                    <div style="text-align:center;"><i class="fa fa-code"></i> with <i class="fa fa-heart-o" style="color:red"></i> in Cilegon, Depok, Pati, Sragen.</div>
        </div>
    </div>

    <div id="id01" class="modal">
        
        <form class="modal-content animate" action="/action_page.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="avatar.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Nama Cabang</b></label>
            <br>
            <input type="text" placeholder="Enter Nama Cabang" name="uname" required>
            <br>
            <label for="psw"><b>Lokasi Cabang</b></label>
            <br>
            <input type="text" placeholder="Enter Lokasi Cabang" name="psw" required>
            <br>
            <label for="js"><b>Jenis Usaha</b></label>
            <br>
            <input type="text" placeholder="Enter Jenis Usaha" name="js" required>
            <br>   
            <button type="submit">Simpan</button>
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
