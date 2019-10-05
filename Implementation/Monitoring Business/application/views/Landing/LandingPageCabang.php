<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
        
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
          <div class="navbar-header">
              <a class="navbar-brand" href="#">Nama Cabang</a>
          </div>
          <li><a href="<?php echo base_url("LandingController") ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
    <br>
    <center><div>
    <a href="<?php echo base_url("InputDataKeuanganController") ?>" type="button" class="btn btn-success" style="color : #0d0d0c;"><strong>Input Data Keuangan</strong></a> 
    <a href="<?php echo base_url("KelolaDataCabangController") ?>" type="button" class="btn btn-warning" style="color : #0d0d0c;"><strong>Kelola Data Cabang</strong></a>
    </div></center>
    <br>
    <br>

    <div style="background:#0d0d0c;height:100%;position:relative;border-top:1px solid hsla(0,0%,100%,.2);padding-top:20px;padding-bottom:20px">
        <div class="container">
            <img src="" style="width:100%;max-width:140px;display:block;margin-left:auto;margin-right:auto;">
                <br>
                <div style="color:white;text-align:center;margin-top:15px;">
                     Copyright ©MonitoringBusiness 2019 <a href="#" style="color:white;"><strong>Monitoring Business</strong></a></div>
                    <div style="color:white;text-align:center;"><i class="fa fa-code"></i> with <i class="fa fa-heart-o" style="color:red"></i> in Cilegon, Depok, Pati, Sragen.</div>
    </div>


    <!-- <center><h1>Monitoring Your Business!</h1></center> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
