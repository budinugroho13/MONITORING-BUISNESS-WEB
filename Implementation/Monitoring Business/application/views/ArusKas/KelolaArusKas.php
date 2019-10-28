<?php defined('BASEPATH') OR exit('No direct script access allowed');
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
          <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo base_url("KelolaDataOwnerController"); ?>">Profile</a>
          </div>
          <div class="navbar-header">
              <a class="navbar-brand" href="#">Nama Owner</a>
          </div>
          <li><a href="<?php echo base_url("LandingController/logoutOwner") ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div style="font-family: Harrington; font-size: 36px; color: white;">
          <strong><center>- Data Keuangan Setiap Cabang -</center></strong>
      </div><hr>
     <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Cabang Sinar Maju</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">                                                                                    
                <div class="table-responsive">          
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Age</th>
                      <th>City</th>
                      <th>Country</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Anna</td>
                      <td>Pitt</td>
                      <td>35</td>
                      <td>New York</td>
                      <td>USA</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <strong><h4 style="color: black; font-family: Arial black; margin-left: 20px;">Kas = ... </h4></strong>
              <button type="button" class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Beri Saran</button>

          </div>
        </div>
      </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Cabang Pelita Harapan</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">

               <div class="table-responsive">          
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Age</th>
                      <th>City</th>
                      <th>Country</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Anna</td>
                      <td>Pitt</td>
                      <td>35</td>
                      <td>New York</td>
                      <td>USA</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <strong><h4 style="color: black; font-family: Arial black; margin-left: 20px;">Kas = ... </h4></strong>
              <button type="button" class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Beri Saran</button>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Cabang Maju Jaya</a>
            </h4>
        </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="table-responsive">          
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Country</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              <strong><h4 style="color: black; font-family: Arial black; margin-left: 20px;">Kas = ... </h4></strong>
              <button type="button" class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Beri Saran</button>

          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Cabang Jiwa Marga</a>
            </h4>
        </div>
          <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="table-responsive">          
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Country</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              <strong><h4 style="color: black; font-family: Arial black; margin-left: 20px;">Kas = ... </h4></strong>
              <button type="button" class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Beri Saran</button>

          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Cabang Jasa Hati</a>
            </h4>
        </div>
          <div id="collapse5" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="table-responsive">          
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Country</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              <strong><h4 style="color: black; font-family: Arial black; margin-left: 20px;">Kas = ... </h4></strong>
              <button type="button" class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Beri Saran</button>

          </div>
        </div>
      </div>

      </div>
    </div> 

    <div style="background:#0d0d0c;height:100%;position:relative;border-top:1px solid hsla(0,0%,100%,.2);padding-top:20px;padding-bottom:20px">
        <div class="container">
            <img src="" style="width:100%;max-width:140px;display:block;margin-left:auto;margin-right:auto;">
                <br>
                <div style="color:white;text-align:center;margin-top:15px;">
                     Copyright ©MonitoringBusiness 2019 <a href="#" style="color:white;"><strong>Monitoring Business</strong></a></div>
                    <div style="color:white;text-align:center;"><i class="fa fa-code"></i> with <i class="fa fa-heart-o" style="color:red"></i> in Cilegon, Depok, Pati, Sragen.</div>
    </div>

      <div id="id01" class="modal">
        
        <form class="modal-content animate" action="/action_page.php">
          <div class="container">
            <label for="uname"><b>Saran Untuk Cabang ...</b></label>
            <br>
            <textarea style="width: 32%;"></textarea><br>
            <button type="submit">Submit</button>
          </div>

          <div class="containerbwh" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>
