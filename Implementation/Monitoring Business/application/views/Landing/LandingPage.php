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

    <div class="container" style="color:white;text-align:center;justify-content: center;margin-top:40px;margin-bottom:40px;">
      <h3 style="color: black;">Monitoring Your Business On Here!</h3>
      <a type="button" class="btn btn-success" href="<?php echo base_url('LandingCabangController'); ?> ">CobaCabang</a>
      <a type="button" class="btn btn-warning" href="<?php echo base_url('LandingOwnerController'); ?> ">CobaOwner</a>
    </div>

    <!-- Modal Login -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="exampleModalLongTitle" style="text-align: center">LOGIN</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form>
                <div class="form-group row">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="email@example.com">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                </div>
                <div>
                  <a type="button" class=" btn btn-danger" href="<?php echo base_url('RegistrasiController'); ?> ">Registrasi</a>
                </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

     