<?php defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<?php 
  $this->load->model('Keuangan');
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
           <?php $count = 0; ?>
           <?php foreach ($cabang as $x) {
             # code...
            $count = $count + 1;
            ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count?>"> <?php echo $x -> namaCabang ?></a>
                </h4>
           </div>
              <div id="collapse<?php echo $count?>" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="table-responsive">          
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Pendapatan</th>
                            <th scope="col">Beban Biaya</th>
                            <th scope="col">Hutang</th>
                            <th scope="col">Piutang</th>
                            <th scope="col">Tanggal Upload</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                         $keuangan = $this->Keuangan->getDataLengkap($x->namaCabang);
                         $no = 0;
                         $kas = 0;
                         foreach ($keuangan as $key){
                         $no = $no + 1;
                         $kas = $kas + $key -> kas; 
                         ?>
                          <tr>
                            <td><?php echo $no?></td>
                            <td><?php echo $key -> pendapatan ?></td>
                            <td><?php echo $key -> bebanBiaya ?></td>
                            <td><?php echo $key -> hutang ?></td>
                            <td><?php echo $key -> piutang ?></td>
                            <td><?php echo $key -> tanggal_upload ?></td>
                          </tr>
                    </div>

              <?php } ?>
                  <h4 style="color: black; font-family: Arial black; margin-left: 20px;">Kas : <?php echo $kas ?> </h4>
                  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalSaran<?php echo $count ?>">Beri Saran</button>
                </div>
                        </tbody>
                      </table>
            </div>
        </div>
      </div>

      <div class="modal fade" id="modalSaran<?php echo $count ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" style="text-align: center"><?php echo $x->namaCabang ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <form action="<?php echo base_url('KelolaArusKasController/setSaranOwner') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Saran Owner :</label>
                      <input type="hidden" name="id" value="<?php echo $x -> idCabang ?>" >
                      <textarea class="form-control" name="saran" rows="4" cols="50"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Send message</button>
                </div>
              </form>
          </div>
        </div>
      </div>

          <?php } ?>
