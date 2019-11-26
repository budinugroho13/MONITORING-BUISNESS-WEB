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
              <a class="navbar-brand" href="#">Nama Owner</a>
          </div>
          <li><a href="<?php echo base_url("LandingController/logoutOwner") ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </nav>

    <center><h1 style="font-family: Harrington; font-size: 35px; color: black;"><strong>Statistik Data Bulanan Setiap Cabang</strong></h1></center>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

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
      </script>

<?php  ?>
    <div class="row">
      <div class="col-sm-4">
        <div class="panel-group" id="accordion" style="width: 70%; margin-left: 30px;">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <center><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Cabang Sinar Maju</a></center>
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <h5>Nama Cabang : </h5>
                    <h5>Alamat Cabang : </h5>
                    <h5>Kas Cabang : </h5>
                    <h5>Pendapatan : </h5>
                    <h5>Beban Biaya : </h5>
                    <h5>Hutang : </h5>
                    <h5>Piutang : </h5>
                </div>
              </div>
            </div>
        </div>
      </div>
<?php  ?>
     

    </div><hr>

  