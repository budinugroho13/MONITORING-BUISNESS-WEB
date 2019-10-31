<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/lp.css"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/KelolaDataCabang.css">
  <link rel="stylesheet" type="text/css" href="assets/css/Header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  
  <title>Monitoring Business</title>


</head>

<body style="background:white; color:black;">
  <nav class="navbar navbar-inverse" style="background:#0d0d0c;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url("LandingController") ?>">Monitoring Business</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><?php  ?></a>
        </div>
        <li><a href="<?php echo base_url("LandingController/logoutOwner") ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>

  <div class="dtcabang" style="font-size: 36px;">
    <strong><center>- Data Cabang PT X -</center></strong>
    
  </div>

  <div class="container cont1">
               
      <div class="table-responsive cont2"> 
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
          <?php
           $no = 1;
           foreach ($cabang as $x){
            
           ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $x->namaCabang; ?></td>
                <td><?php echo $x->alamatCabang; ?></td>
                <td><?php echo $x->jenis_bisnis; ?></td>
                <td><button type="button" class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Edit</button> <button type="button" class="btn btn-danger">Hapus</button></td>
              </tr>
          <?php 
            $no = $no+1;
        } ?>
            </tbody>
        </table>
        <?php if (!empty($this->session->flashdata('CabangGagal'))){?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('CabangGagal');?></div>
      <?php }else if(!empty($this->session->flashdata('CabangSukses'))){
        ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('CabangSukses');?></div>
        <?php } ?>
        <button style="float:right; width: 250px; float: left;" type="button" class="btn btn-warning" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Tambah Data Cabang</button>
      </div>

  </div>


  <div id="id01" class="modal">
    <form class="modal-content animate" action="<?php echo base_url('KelolaDataCabangController/add') ?>" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="assets/img/avatar.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Nama Cabang</b></label>
        <br>
        <input type="text" placeholder="Enter Nama Cabang" name="name" required>
        <br>
        <label for="psw"><b>Lokasi Cabang</b></label>
        <br>
        <input type="text" placeholder="Enter Lokasi Cabang" name="lokasi" required>
        <br>
        <label for="username"><b>Username</b></label>
        <br>
        <input type="text" placeholder="Username" name="username" required>
        <br>
        <label for="Password"><b>Password</b></label>
        <br>
        <input type="Password" placeholder="Password" name="pass" required>
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
