<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

  <!-- Script Mapa Leaflet nian --->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <script src="assets/lealflet/leaflet.ajax.js"></script>
  <script src="assets/lealflet/leaflet.ajax.min.js"></script>
  <script src="boostrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/7db1126404.js" crossorigin="anonymous"></script>

  <!-- Script Mapa Highcharts nian --->
  <script src="assets/highcharts/code/highcharts.js"></script>
  <script src="assets/highcharts/code/modules/exporting.js"></script>
  <script src="assets/highcharts/code/modules/export-data.js"></script>
  <script src="assets/highcharts/code/modules/accessibility.js"></script>
  <title>Mapa</title>

</head>

<!-- Style Leaflet -->

<style>
  #mapa {
    height: 500px;
    width: 100%;
  }
</style>

<!-- Style Highcharts -->

<style type="text/css">
  .highcharts-figure,
  .highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
  }

  #container {
    height: 400px;
  }

  .highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
  }

  .highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
  }

  .highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
  }

  .highcharts-data-table td,
  .highcharts-data-table th,
  .highcharts-data-table caption {
    padding: 0.5em;
  }

  .highcharts-data-table thead tr,
  .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
  }

  .highcharts-data-table tr:hover {
    background: #f1f7ff;
  }
</style>

<style type="text/css">
  .highcharts-figure2,
  .highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
  }

  #container2 {
    height: 400px;
  }

  .highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
  }

  .highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
  }

  .highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
  }

  .highcharts-data-table td,
  .highcharts-data-table th,
  .highcharts-data-table caption {
    padding: 0.5em;
  }

  .highcharts-data-table thead tr,
  .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
  }

  .highcharts-data-table tr:hover {
    background: #f1f7ff;
  }
</style>

<body>

  <?php
  include 'header.php';
  ?>
  <div class="container">
    <div class="card my-5">
      <div class="card-header">
        Mapa
      </div>
      <div class="card-body">
        <div class="container" id="mapa">

          <script>
            var map = L.map('mapa').setView([-8.568885, 125.556049], 14);
            var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
              maxZoom: 18,
              attribution: '<a>Developed by DEI 2022</a>',
              id: 'mapbox/streets-v11',
              tileSize: 512,
              zoomOffset: -1
            }).addTo(map);

            var polygon = L.polygon([
              [-8.554916277195758, 125.54126253075957],
              [-8.557379111616621, 125.54130144564904],
              [-8.56076548293407, 125.54149602009656],
              [-8.563151317362609, 125.54130144564904],
              [-8.56712446810838, 125.54134036053857],
              [-8.57066467399861, 125.54091229675407],
              [-8.572396284439527, 125.5391611267265],
              [-8.573319806782456, 125.53811042470998],
              [-8.574281806836625, 125.53760453114644],
              [-8.57852419802056, 125.53740995669892],
              [-8.579486184896348, 125.5416127647651],
              [-8.5805251279852, 125.5445702963672],
              [-8.581525589013772, 125.54830612575931],
              [-8.581063838097375, 125.5513025722509],
              [-8.580602086619445, 125.55632259299652],
              [-8.579447705468102, 125.56079780528918],
              [-8.577677647554376, 125.56367750711227],
              [-8.57498406533839, 125.5645336346813],
              [-8.572675265383843, 125.56468929423934],
              [-8.562323973246835, 125.56546759202935],
              [-8.56005357782834, 125.56465037934983],
              [-8.556436309696478, 125.56414448578631],
              [-8.5549355181514, 125.56406665600731],
              [-8.554512216902767, 125.56402774111778],
              [-8.554512216902767, 125.56402774111778],
              [-8.554916277195758, 125.54126253075957]
            ], {

              color: 'red'

            }).addTo(map).bindPopup('Area Suku Bairo-Pite.');

            <?php
            include "koneksaun.php";
            $query = $conn->query("SELECT * FROM eskola a, populasaun b, artikel c, detallu d WHERE a.id_eskola = d.id_eskola AND b.id_populasaun = d.id_populasaun AND c.id_artikel = d.id_artikel");
            while ($dadus = $query->fetch_array()) {
              $lng   = $dadus['longitude'];
              $lat   = $dadus['latitude'];
              $naran = $dadus['naran_eskola'];
              $img   = $dadus['imajen'];
              $tipu  = $dadus['tipu_eskola'];
              $kond  = $dadus['kondisaun'];
              $func1 = $dadus['funsionariu_estadu'];
              $func2 = $dadus['funsionariu_kontratadu'];
              $aln   = $dadus['total_alunos'];
              $id_artc = $dadus['id_artikel'];
            ?>
              //leaflet marker
              var marker = L.marker([<?php echo $lat; ?>, <?php echo $lng; ?>]).addTo(map).
              bindPopup("<center><b><?php echo $naran; ?></b><hr><?php echo "<img src='Admin/asset/imajen/" . $img;
                                                                  ?>'width='130px'><hr></center><pre style= 'font-family: Cambria; text-align: justify;'><?php echo 'Tipu-Eskola: ' . $tipu ?><br><?php echo 'Kondisaun: ' . $kond; ?><br><?php echo 'Total Funsionariu-Estadu: ' . $func1 ?><br><?php echo 'Total Funsionariu-Kontratadu: ' . $func2 ?><br><?php echo 'Total Alunos: ' . $aln ?></pre><center><a style='color: white;' href='main-artigu.php?id=<?= $id_artc ?>' class='btn btn-primary py-1'>Visita</a>");


            <?php } ?>
          </script>

        </div>
      </div>
    </div>
  </div>


  <?php
  include "koneksaun.php";
  $quer = "SELECT SUM(a.kondisaun) as konda, SUM(b.funsionariu_estadu) as func1, SUM(b.funsionariu_kontratadu) as func2 FROM eskola a, populasaun b, detallu c WHERE a.id_eskola = c.id_eskola AND b.id_populasaun = c.id_populasaun";
  $loke = mysqli_query($conn, $quer);
  while ($dat = mysqli_fetch_array($loke)) :
    $konda       = $dat['konda'];
    $func1       = $dat['func1'];
    $func2       = $dat['func2'];
  endwhile;

  if ($konda and $func1 and $func2 > 0) {

  ?>

    <div class="container">
      <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description" style="text-align: center; margin-bottom: 5%;">
          Husi Grafiku Bar Chart Refere hatudu momos Total husi Dadus Funsionariu Professores sira
          iha suku Bairo-Pite.
        </p>
      </figure>




      <script type="text/javascript">
        <?php
        include "koneksaun.php";
        $sql_fosai = $conn->query("SELECT SUM(a.funsionariu_estadu) as func_est, SUM(a.funsionariu_kontratadu) as func_kont FROM populasaun a, detallu b WHERE a.id_populasaun = b.id_populasaun");
        while ($fosai = $sql_fosai->fetch_array()) {
          $func_est = $fosai['func_est'];
          $func_kont = $fosai['func_kont'];
        ?>
          const chart = Highcharts.chart('container', {
            title: {
              text: 'Dadus Total Professores iha Suku Bairo-Pite'
            },
            subtitle: {
              text: 'Dadus Grafiku Bar Chart'
            },
            xAxis: {
              categories: ['Funsionariu-Estadu', 'Funsionariu-Kontratadu']
            },

            yAxis: {
              min: 0,
              title: {
                text: 'Total Ema'
              }
            },
            series: [{
              type: 'column',
              colorByPoint: true,
              data: [<?= $func_est ?>, <?= $func_kont ?>],
              showInLegend: false
            }],

          });

        <?php } ?>
      </script>
    </div>
    <hr style="margin-left: 5%; margin-right: 5%;">
    <div class="container">
      <figure class="highcharts-figure2">
        <div id="container2"></div>
        <p class="highcharts-description2" style="text-align: center; margin-bottom: 5%;">
          Husi Grafiku Pie Chart Refere hatudu momos Total husi Dadus Kondisaun Eskola sira
          iha suku Bairo-Pite.
        </p>
      </figure>

      <?php
      include "koneksaun.php";
      $sql = "SELECT COUNT(a.kondisaun) as kond FROM eskola a, detallu b WHERE a.id_eskola = b.id_eskola";
      $result = mysqli_query($conn, $sql);
      while ($data = mysqli_fetch_array($result)) :
        $kond       = $data['kond'];
        $total_kol  = $kond;
      endwhile;


      $sql2 = "SELECT COUNT(a.kondisaun) as kond_diak FROM eskola a, detallu b WHERE a.id_eskola = b.id_eskola AND a.kondisaun = 'Diak'";
      $result2 = mysqli_query($conn, $sql2);
      while ($data2 = mysqli_fetch_array($result2)) :
        $kond_diak = $data2['kond_diak'];
        $total1    = $kond_diak;
      endwhile;

      $sql3 = "SELECT COUNT(a.kondisaun) as kond_diak FROM eskola a, detallu b WHERE a.id_eskola = b.id_eskola AND a.kondisaun = 'Ladiak'";
      $result3 = mysqli_query($conn, $sql3);
      while ($data3    = mysqli_fetch_array($result3)) :
        $kond_ladiak = $data3['kond_diak'];
        $total2      = $kond_ladiak;
      endwhile;


      $kond_diak  = number_format(($total1 / $total_kol) * 100, '1', '.', '');
      $kond_ladiak  = number_format(($total2 / $total_kol) * 100, '1', '.', '');


      ?>


      <script type="text/javascript">
        Highcharts.chart('container2', {
          chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
          },
          title: {
            text: 'Dadus Kondisaun Eskola iha Suku Bairo-Pite'
          },
          tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          accessibility: {
            point: {
              valueSuffix: '%'
            }
          },
          plotOptions: {
            pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
              }
            }
          },
          series: [{
            name: 'Dadus',
            colorByPoint: true,
            data: [{
                name: 'Kondisaun Diak',
                y: <?= $kond_diak ?>,
                sliced: true,
                selected: true
              },
              {
                name: 'Kondisaun La diak',
                y: <?= $kond_ladiak ?>,
                sliced: true,
                selected: true
              }
            ]
          }]
        });
      </script>

    <?php } else {

    echo "<div class='alert alert-warning' style='text-align: center;'> Laiha Dadus iha Mapa.</div>";
  }
    ?>
    </div>

    <?php
    include 'footer.php'
    ?>
</body>

</html>