<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<ul class="nav navbar-nav navbar-right">
  <form class="navbar-form navbar-left" action="/action_page.php">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </div>
  </form>
  <li><a class="btn" data-toggle="modal" data-target="#exampleModalLong" style="width:auto;"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
</ul>
</div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="assets/img/1,2.jpg" alt="Los Angeles" style="width:100%;">
      <div class="carousel-caption" style="color : #0d0d0c;">
        <h3>Los Angeles</h3>
        <p>LA is always so much fun!</p>
      </div>
    </div>

    <div class="item">
      <img src="assets/img/3,2,1.jpg" alt="Chicago" style="width:100%;">
      <div class="carousel-caption" style="color : #0d0d0c;">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>

    <div class="item">
      <img src="assets/img/3,2.png" alt="New York" style="width:100%;">
      <div class="carousel-caption" style="color : #0d0d0c;">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- </div> -->

<!--     <div class="container" style="color:white;text-align:center;justify-content: center;margin-top:40px;margin-bottom:40px;">
      <h3 style="color: black;">Monitoring Your Business On Here!</h3>
      <a type="button" class="btn btn-success" href="">CobaCabang</a>
    </div> -->

    <!-- login -->
    <div class="container thismodal" style="text-align:center;justify-content: center;margin-top:40px;margin-bottom:40px;">
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal" style="font-weight: 800;">LOGIN</button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog size-content">

          <!-- Modal content-->
          <div class="modal-content ModalPage">
            <div class="modal-header head-login" style="border-bottom: none;">
              <div>
                <button type="button" class="close" data-dismiss="modal" style="">&times;</button>
              </div>
              <img src="<?php echo base_url('assets/img/mblogo.png') ?>" alt="Monitoring Bussiness">
              <h1 class="modal-title welcome1">Selamat Datang, Di Monitoring Business.</h1>
            </div>

            <div class="global-login">
              <div class="login-body log-body">
                <ul class="own-cab">
                  <li id="idowner">Login Owner</li>
                  <li id="idcabang">Login Pegawai</li>
                </ul>
              </div>
              <div class="hilang loginawal">
                <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 70px; color: #ED2424; width: 100%;"></i>
                <i class="fa fa-laptop" aria-hidden="true" style="font-size: 70px; color:#4D3E3E; "></i>
                <i class="fa fa-laptop" aria-hidden="true" style="font-size: 70px; color:#4D3E3E; "></i>
                <i class="fa fa-laptop" aria-hidden="true" style="font-size: 70px; color:#4D3E3E; "></i>

                <h3 style="text-align: left; font-weight: 900;">Login Owner </h3>
                <div class= "input-text">
                  <div class="input-text-user input-t">
                    <input type="text" name="username" id="" placeholder="Username">
                  </div>
                  <div class="input-text-pass input-t">
                    <input type="password" name="password" id="" placeholder="password">
                  </div>
                </div>
                <div class="masuk">
                  <button type="button" class="btn btn-danger btn-lg " name="button" id=""> LOGIN</button>
                </div>
                <div class="daftar">
                  <p>Belum punya Cabang? <a href="#" title="" name=""> Daftar Akun Cabang</a></p>
                </div>
              </div>
              <div class="hilang loginakhir">
                <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 70px; color: #ED2424; width: 100%;"></i>
                <i class="fa fa-laptop" aria-hidden="true" style="font-size: 70px; color:#342C2C; "></i>
                <h3 style="text-align: left; font-weight: 900;">Login Pegawai</h3>
                <div class="input-text">
                  <div class="input-text-user input-t">
                    <input type="text" name="username" id="" placeholder="Username">
                  </div>
                  <div class="input-text-pass input-t">
                    <input type="password" name="password" id="" placeholder="password">
                  </div>
                </div>
                <div class="masuk">
                  <button type="button" class="btn btn-danger btn-lg " name="button" id=""> LOGIN</button>
                </div>
              </div>


            </div>

          </div> 
        </div>
      </div>
    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="exampleModalLongTitle" style="text-align: center">Login</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?php echo base_url('LandingController/loginOwner') ?>" method="post">
            <div class="modal-body">
              <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail" name="username" placeholder="Username">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                </div>
              </div>
              <div>
                <a type="button" class=" btn btn-danger" href="<?php echo base_url('RegistrasiController'); ?> ">Registrasi</a>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $(function(){
          $(".loginawal").show();
          $("#idowner").css("background-color","#d43f3a");
          $("#idowner").css("color","white");
        });
        $("#idowner").click(function(){
          $(".loginawal").show();
          $(".loginakhir").hide();
          $("#idowner").css("background-color","#d43f3a");
          $("#idcabang").css("background-color","white");
          $("#idowner").css("color","white");
          $("#idcabang").css("color","#7E6969");
        });
        $("#idcabang").click(function(){
          $(".loginawal").hide();
          $(".loginakhir").show();
          $("#idowner").css("background-color","white");
          $("#idcabang").css("background-color","#d43f3a");
          $("#idowner").css("color","#7E6969");
          $("#idcabang").css("color","white");
        });
      });

    </script>