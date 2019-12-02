<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/Header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <script src="assets/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <title>Monitoring Business</title>
  </head>

  <script>
    function gagal(){
      Swal.fire({
        type: 'error',
        title: 'Edit Gagal',
        text: 'Akun Gagal Diupdate',
      })
    }

     function berhasil(){
          Swal.fire({
            type: 'success',
            title: 'Edit Sukses',
            text: 'Update Berhasil',
          })
        }
  </script>

  <?php if (!empty($this->session->flashdata('owner_sukses'))) {?>
    <?php var_dump("askaoskoa") ?>
    <body onload="berhasil()">
    <?php}if (!empty($this->session->flashdata('owner_gagal'))) {?>
    <body onload="gagal()">
    <?php } ?>
    <?php $owner = $this->session->userdata('owner'); ?>
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
              <a class="navbar-brand" href="#"><?php echo $owner["nama"] ?></a>
          </div>  
          <li><a href="<?php echo base_url("LandingController") ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>
 
    <div class="container">
      <div class="jumbotron">
        <h1>Edit Profile Owner</h1>      
      </div>
        <div class="card text-center">
          <div class="card-header">
            <img src="assets/img/suryo.jpg">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $owner["nama"] ?></h5>
            <p class="card-text">E-mail : <?php echo($owner["email"]) ?></p>
            <p class="card-text">Alamat : <?php echo($owner["alamat"]) ?></p>
            <p class="card-text">Nama Bisnis : <?php echo($owner["nama_bisnis"]) ?></p>
            <p class="card-text">Jenis Bisnis : <?php echo($owner["jenis_bisnis"]) ?></p>
            <p class="card-text">No Telepon : <?php echo($owner["no_telp"]) ?></p>
            <p class="card-text">Alamat : <?php echo($owner["alamat"]) ?></p>
          <button class="btn btn-primary" data-target="#exampleModalCenter" data-toggle="modal">Edit Profile Owner</button>    

          </div>
          <div class="card-footer text-muted">
          </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
         <form  action="<?php echo base_url('KelolaDataOwnerController/editData') ?>" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><center><p class="h1">Edit Profile </p></center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="container">
                <img src="assets/img/avatar.png" class="mx-auto d-block" alt="avatar" style="width: 30%" >  
              </div>
              <br>
             </label> 
            <div class="form-group">
             <label><b>Nama Owner</b></label>
             <input type="hidden"value="<?php echo $owner["idOwner"] ?>" name="id"required>
             
             <label><b>Nama Owner</b></label>
             <input type="text" class="form-control"  name="nama" value="<?php echo $owner["nama"] ?>" required>
           </div> 
            <div class="form-group">
             <label><b>Alamat Owner</b></label>
             <input type="text" class="form-control"  placeholder="Masukkan E-mail" name="email" value="<?php echo $owner["email"] ?>" required>
           </div> 
            <div class="form-group">
             <label><b>Alamat Owner</b></label>
             <input type="text" class="form-control"  name="alamat" value="<?php echo $owner["alamat"] ?>" required>
           </div> 
            <div class="form-group">
             <label><b>Nama Bisnis</b></label>
             <input type="text" class="form-control"  placeholder="Masukkan Nama Cabang" name="nb" value="<?php echo $owner["nama_bisnis"] ?>" required>
           </div> 
            <div class="form-group">
             <label><b>Jenis Bisnis</b></label>
             <input type="text" class="form-control"  placeholder="Masukkan Nama Cabang" name="jb" value="<?php echo $owner["jenis_bisnis"] ?>" required>
           </div>

            <div class="form-group">
             <label><b>No Telepon </b></label>
             <input type="text" class="form-control"  placeholder="Masukkan Nama Cabang" name="hp" value="<?php echo $owner["no_telp"] ?>" required>
           </div>

            <div class="form-group">
             <label><b>Password Baru</b></label>
             <input type="Password" class="form-control"  placeholder="" name="oldPass" required>
           </div>

            <div class="form-group">
             <label><b>Confirm Password Baru</b></label>
             <input type="Password" class="form-control"  placeholder="" name="newPass" required>
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

