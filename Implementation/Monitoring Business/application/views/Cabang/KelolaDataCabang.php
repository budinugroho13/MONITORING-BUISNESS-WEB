<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/lp.css"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/KelolaD ataCabang.css"> -->
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
              <th>Id Cabang</th>
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
                <td><?php echo $x->idCabang; ?></td>
                <td><?php echo $x->namaCabang; ?></td>
                <td><?php echo $x->alamatCabang; ?></td>
                <td><?php echo $x->jenis_bisnis; ?></td>
                <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_<?php echo $x->idCabang; ?>"r" style="width:auto;">Edit</button> 
                    <a type="button" class="btn btn-danger" href="<?php echo base_url('KelolaDataCabangController/hapus/').$x->idCabang ?>" onClick="return confirm('Apakah anda Yakin untuk menghapus !')">Hapus</a>
                </td>
              </tr>
      
      <div class="modal fade" id="edit_<?php echo $x->idCabang; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form action="<?php echo base_url('KelolaDataCabangController/Edit') ?>" method="post" >
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle"><center><p class="h1">Edit Cabang </p></center></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container">
            <img src="assets/img/avatar.png" class="mx-auto d-block" alt="avatar" style="width: 30%" >  
          </div>
   
          <br>
        <div class="form-group">
         <label for="namaCabang"><b>Nama Cabang</b></label>
         <input type="text" class="form-control"  placeholder="Masukkan Nama Cabang" name="name" value="" required>
       </div>
        <div class="form-group">
         <label for="lokasiCaban"><b>Lokasi Cabang</b></label>
         <input type="text" class="form-control"  placeholder="Masukkan Lokasi Cabang" name="lokasi" value="" required>
       </div>
       <div class="form-group">
         <label for="jenisBisnis"><b>Jenis Bisnis</b></label>
         <input type="text" class="form-control"  placeholder="Masukkan Lokasi Cabang" name="jenisBisnis" value="<?php echo $x->jenis_bisnis ?>" required>
       </div>
       <input type="hidden" name="id" value="<?php echo $x->idCabang ?>" >
       
       <div class="form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label text-muted" for="exampleCheck1"><small>Data yang dimasukkan sudah benar sesuai dengan kenyataan.</small></label>
       </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>


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
        <button style="float:right; width: 250px; float: left;" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter" style="width:auto;">Tambah Data Cabang</button>
      </div>

  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     <form  action="<?php echo base_url('KelolaDataCabangController/add') ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><center><p class="h1">Form Tambah Data </p></center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container">
            <!-- <img src="assets/img/avatar.png" alt="Avatar" class="avatar"> -->
           <!--  <img src="assets/img/avatar.png" alt="Avatar" class="rounded-circle"> -->
           <!-- <img src="assets/img/avatar.png" class="rounded-circle" alt="avatar" width="304" height="236">  -->
            <img src="assets/img/avatar.png" class="mx-auto d-block" alt="avatar" style="width: 30%" >  
          </div>
   
          <br>
         <!--    <label for="uname"><b>Nama Cabang</b></label>
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
         <label>
           <input type="checkbox" checked="checked" name="remember"> Data yang dimasukkan sudah benar sesuai dengan kenyataan.
         </label> -->
        <div class="form-group">
         <label for="uname"><b>Nama Cabang</b></label>
         <input type="text" class="form-control"  placeholder="Masukkan Nama Cabang" name="name" required>
       </div>
        <div class="form-group">
         <label for="psw"><b>Lokasi Cabang</b></label>
         <input type="text" class="form-control"  placeholder="Masukkan Lokasi Cabang" name="lokasi" required>
       </div>
       <div class="form-group">
         <label for="username"><b>Username</b></label>
         <input type="text" class="form-control"  placeholder="username" name="username" required>
       </div>  
       <div class="form-group">
         <label for="exampleInputPassword1"><b>Password</b></label>
         <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
       </div>
       
       <div class="form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label text-muted" for="exampleCheck1"><small>Data yang dimasukkan sudah benar sesuai dengan kenyataan.</small></label>
       </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
          </form>
    </div>
  </div>
</div>



<script>

    function gagal(){
      Swal.fire({
        type: 'error',
        title: 'Registrasi Gagal',
        text: 'Akun Gagal Terdaftar',
      })
    }

     function berhasil(){
          Swal.fire({
            type: 'success',
            title: 'Registrasi Sukses',
            text: 'Registrasi Berhasil',
          })
        }

  </script>