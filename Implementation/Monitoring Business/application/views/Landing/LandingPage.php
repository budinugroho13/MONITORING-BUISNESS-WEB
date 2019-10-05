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
          <li><a href="<?php echo base_url("RegistrasiController") ?>" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
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
            <img src="1,2.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption" style="color : #0d0d0c;">
              <h3>Los Angeles</h3>
              <p>LA is always so much fun!</p>
            </div>
          </div>

          <div class="item">
            <img src="3,2,1.jpg" alt="Chicago" style="width:100%;">
            <div class="carousel-caption" style="color : #0d0d0c;">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
        
          <div class="item">
            <img src="3,2.png" alt="New York" style="width:100%;">
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

    <div class="container" style="color:white;text-align:center;margin-top:15px;">
      <h3>Monitoring Your Business On Here!</h3>
      <a type="button" class="btn btn-secondary" href="<?php echo base_url('LandingCabangController'); ?> ">CobaCabang</a>
      <a type="button" class="btn btn-secondary" href="<?php echo base_url('LandingOwnerController'); ?> ">CobaOwner</a>

    </div>

    <div style="background:#0d0d0c;height:100%;position:relative;border-top:1px solid hsla(0,0%,100%,.2);padding-top:20px;padding-bottom:20px">
        <div class="container">
            <br>
            <img src="" style="width:100%;max-width:140px;display:block;margin-left:auto;margin-right:auto;">
                <div style="color:white;text-align:center;margin-top:15px;">
                     Copyright ©MonitoringBusiness 2019 <a href="#" style="color:white;"><strong>Monitoring Business</strong></a></div>
                    <div style="color:white;text-align:center;"><i class="fa fa-code"></i> with <i class="fa fa-heart-o" style="color:red"></i> in Cilegon, Depok, Pati, Sragen.</div>
    </div>

        <div id="id01" class="modal">
        <form class="modal-content animate" action="/action_page.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="avatar.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <br>
            <label for="psw"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br>  
            <button type="submit">Login</button>
            <br>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="containerbwh" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
            <br>
            <span class="psw">Create <a href="#">Account</a></span>
          </div>
        </form>
      </div>

     