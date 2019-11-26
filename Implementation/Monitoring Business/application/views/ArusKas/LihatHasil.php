<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 ?>
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url("KelolaArusKasController") ?>">Keuangan</a>
        </div>
        
        <ul class="nav navbar-nav navbar-right">
          <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo base_url("KelolaDataOwnerController") ?>">Profile</a>
          </div>
          <div class="navbar-header">
            <?php $data = $this->session->userdata('owner');  ?>
              <a class="navbar-brand" href="#"><?php echo $data["nama"]; ?></a>
          </div>
          <li><a href="<?php echo base_url("LandingController/logoutOwner") ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>


    <center><h1 style="font-family: Harrington; font-size: 35px; color: black;"><strong>Statistik Data Bulanan Setiap Cabang</strong></h1></center>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    
    <form action="<?php echo base_url('LihatHasilController/cariData')?>" method="post">
      <label>Cari Cabang  : </label>
      <div class="input-group">
        <div class="form-row"> 
          <input type="text" class="form-control" placeholder="Search" name="cabang">
          <input type="submit" class="btn btn-info">
        </div>
      </div>
    </form>
    
    <hr class="btn-primary">

    <canvas id="myChart" width="1000" height="200"></canvas>
      <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var dataCabang = [];
      var keuntunganCabang = [];

      $.post("<?php echo base_url('LihatHasilController/getData'); ?>",
        function (data) {
          // body...
            var obj = JSON.parse(data);
            $.each(obj,function (test,item){
              dataCabang.push(item.namaCabang);
              keuntunganCabang.push(item.keuntungan);
            });



      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: dataCabang,
              datasets: [{
                  label: 'Keuntungan Bulanan Cabang',
                  data: keuntunganCabang,
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });
    });

     function gagal(){
      Swal.fire({
        type: 'error',
        title: 'Data Tidak Ditemukan',
        text: 'Cabang Yang Anda Cari Tidak Ditemukan',
      })
    }

      </script>
      <?php  $x = $this->session->userdata('cari'); {
        # code...
      } ?>
      <?php if (!empty($x)) { ?>
          <table id="table"  class="table table-striped table-bordered" >
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kas</th>
                <th scope="col">Pendapatan</th>
                <th scope="col">Beban Biaya</th>
                <th scope="col">Hutang</th>
                <th scope="col">Piutang</th>
                <th scope="col">Tanggal Upload</th>
              </tr>
            </thead>
            <tbody>
              <?php
               foreach($cabang as $x) {
              # code...
                ?>
                <tr>
                  <td><?php echo $x->namaCabang; ?></td>
                  <td><?php echo $x->alamatCabang; ?></td>
                  <td><?php echo $x->kas; ?></td>
                  <td><?php echo $x->pendapatan; ?></td>
                  <td><?php echo $x->bebanBiaya; ?></td>
                  <td><?php echo $x->hutang; ?></td>
                  <td><?php echo $x->piutang; ?></td>
                  <td><?php echo $x->tanggal_upload; ?></td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
      <?php
     }?>

     <?php $this->session->unset_userdata('cari'); ?>



    </div><hr>

  

