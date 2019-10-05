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
    			<p>Dapat berupa berkas terkompresi <strong>(gzip,bzip,zip,rar)</strong>.</p> 
    			<p>A compressed file's name must end in <strong>.[doc,docx].[zip,rar]</strong>. Example : <strong>coba.doc.zip</strong></p>
    		</div>
    		<hr>
    		<form action="#" style="font-family: Arial; font-size: 16px; padding-left: 50px;">
    			Select a file from your computer:
    			<input type="file" name="myFile">
			</form>
			<br>
			<button type="button" class="btn btn-success" style="margin-left: 50px;">Submit</button>

            <br><br><br><br><br><br><br><br><br>
           