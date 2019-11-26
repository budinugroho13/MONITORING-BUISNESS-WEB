<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/lp.css"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/LandingPage.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/loginOwnCab.css">
    <link rel="stylesheet" type="text/css" href="assets/sweetalert/node_modules/sweetalert2/dist/sweetalert2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
    <script src="assets/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
 
    <title>Monitoring Business</title>
</head>

<?php if (!empty($this->session->flashdata('ok'))) {
  # code...
?>
  <body onload="saran()">

<?php } ?>
<?php if(!empty($this->session->flashdata('sukses'))) { ?>
  <body onload="berhasil()">
 <?php} else{?>
<body style="background-color:#ededed;">
    <?php } ?>
    <nav class="navbar navbar-inverse" style="border-radius: 0;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url("LandingController") ?> ">Monitoring Business</a>
      </div>

      
<script type="text/javascript">
       function berhasil(){
          Swal.fire({
            type: 'success',
            title: 'Registrasi Sukses',
            text: 'Registrasi Berhasil',
          })
        }

        function saran(){
          Swal.fire({
            type: 'success',
            title: 'Pengiriman Saran Sukses',
            text: 'Saran berhasil dikirim ke cabang',
          })
        }

</script>