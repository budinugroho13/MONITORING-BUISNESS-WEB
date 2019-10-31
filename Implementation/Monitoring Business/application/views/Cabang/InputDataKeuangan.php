<?php defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
                
                <ul class="nav navbar-nav navbar-right">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="#">Nama Cabang</a>
                  </div>
                  <li><a href="<?php echo base_url("LandingController") ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
              </div>
            </nav>
            <br>
    		<div style="font-family: Harrington; font-size: 36px;">
    			<strong><center>- Input Data Keuangan -</center></strong>
    		</div>
    		<br>
    		<div style="font-size: 30px; font-family: Arial; padding-left: 50px;">
    			<strong>Berkas :</strong>
    		</div>
    		<hr>
    		<div style="font-family: Arial; font-size: 16px; padding-left: 50px;">
    			<p>File Harus bertipe CSV<strong>(.CSV)</strong>.</p> 
    			<p>A compressed file's name must end in <strong>.[csv]</strong>. Example : <strong>coba.csvp</strong></p>
    		</div>
    		<hr>
            <div style="font-family: Arial; font-size: 16px; padding-left: 50px";>
                <form action="<?php echo base_url('InputDataKeuanganController/add'); ?>" method="post" enctype="multipart/form-data">
                  <input type="file" name="filename">
			<br>
            </div>
			     <button type="submit" class="btn btn-success" style="margin-left: 50px;">Submit</button>
                </form>

            <br><br><br><br><br><br><br><br><br>