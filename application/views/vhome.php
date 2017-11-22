<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fontastic.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9] -->
    <style media="screen">
    .content-inner{
      min-height: 100vh !important;
      min-width: 100vw !important;
      padding-bottom: 90px !important;
    }

    h3{
      float:left !important;
    }

    a{
      cursor:pointer;
    }
    #map{
      height:500px;
    }
    </style>
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big"><span>Algoritma </span><strong>Evolusioner</strong></div>
                  <div class="brand-text brand-small"><strong>ALEV</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">KASUS TSP</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Populasi</h3>
                    </div>
                    <div class="card-body">
                      <div id="result">

                      </div>
                      <br>
                      <a class="btn text-dark" id="initpop">Init Populasi</a>
                    </div>
                  </div>
                </div>
                <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Hasil Reproduksi</h3>
                    </div>
                    <div class="card-body">
                      <div id="hasil">

                      </div>
                      <br>
                      <a class="btn text-dark" id="Reproduksi">Reproduksi</a>
                    </div>
                  </div>
                </div>
                <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Generasi Baru</h3>
                    </div>
                    <div class="card-body">
                      <div id="gen">

                      </div>
                      <br>
                      <a class="btn text-dark" id="seleksi">Seleksi</a>
                    </div>
                  </div>
                </div>
                <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Hasil Seleksi</h3>
                    </div>
                    <div class="card-body">
                      <div id="seleksihasil">

                      </div>
                    </div>
                  </div>
                </div>
                <!-- Horizontal Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Maps</h3>
                    </div>
                    <div class="card-body">
                      <div id="map">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer fixed-bottom">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Kelompok Alev</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?=base_url()?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="<?=base_url()?>assets/js/charts-home.js"></script>
    <script src="<?=base_url()?>assets/js/front.js"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD67CZhRsaW-5_QbtsAeE2ecChe_UaS1jA&callback=initMap" type="text/javascript"></script> -->
    <script type="text/javascript">
      var arrayjarak = new Array();
      var populasi = new Array();
      var repro = new Array();
      var mutasi = new Array();
      var generasi = new Array();
      var fitness = new Array();
      var roullete = new Array();
      var result2 = '';

      arrayjarak['A-B'] = 450;
      arrayjarak['A-C'] = 450;
      arrayjarak['A-D'] = 132;
      arrayjarak['A-E'] = 321;
      arrayjarak['B-C'] = 151;
      arrayjarak['B-D'] = 521;
      arrayjarak['B-E'] = 762;
      arrayjarak['C-D'] = 522;
      arrayjarak['C-E'] = 763;
      arrayjarak['D-E'] = 328;

      function initIndividu(){
        var text = "A-";
        var possible = "BCDE";

        for (var i = 0; i < 4; i++){
          var temp = possible.charAt(Math.floor(Math.random() * possible.length));
          text = text+temp+'-';
          possible = possible.replace(temp,'');
        }
        text+='A';
        return text;
      }

      function swapStr(str, first, last){
          return str.substr(0, first)
                 + str[last]
                 + str.substring(first+1, last)
                 + str[first]
                 + str.substr(last+1);
      }

      function random(str){
        return parseInt(Math.round(Math.random()*(str.length-1)).toFixed(0));
      }

      function totaljarak(str,j) {
        var k = j;
        var jarak = arrayjarak[str.substring(k,k+3)];
        if(jarak === undefined){
          jarak = arrayjarak[str.substring(k,k+3).split('').reverse().join('')];
        }

        return jarak;
      }

      function roulettewheel(parent,child) {
        var sum = 0;
        var sum2 = 0;
        var teks = '';

        for (var i = 0; i < parent.length; i++) {
          generasi[i] = parent[i];
        }

        for (var i = 0; i < child.length; i++) {
          generasi[i+parent.length] = child[i];
        }

        for (var i = 0; i < generasi.length; i++) {
          var jaraktotal = 0;
          for (var j = 0; j <= 8; j=j+2) {
            jarak = totaljarak(generasi[i],j);
            jaraktotal += jarak;
          }
          sum += 1/jaraktotal;
          fitness[i] = 1/jaraktotal;
        }

        for (var key in fitness) {
          roullete[key] = parseFloat((fitness[key]/sum).toFixed(3));
          sum2 += roullete[key];
          roullete[key] = sum2;
        }

        for (var i = 0; i < 6; i++) {
          var random = Math.random();
          var key;
          switch (true) {
            case (random > 0 && random <= roullete[0]):
              key = 0;
              break;
            case (random > roullete[0] && random <= roullete[1]):
              key = 1;
              break;
            case (random > roullete[1] && random <= roullete[2]):
              key = 2;
              break;
            case (random > roullete[2] && random < roullete[3]):
              key = 3;
              break;
            case (random > roullete[3] && random < roullete[4]):
              key = 4;
              break;
            case (random > roullete[4] && random < roullete[5]):
              key = 5;
              break;
            case (random > roullete[5] && random < roullete[6]):
              key = 6;
              break;
            case (random > roullete[6] && random < roullete[7]):
              key = 7;
              break;
            case (random > roullete[7] && random < roullete[8]):
              key = 8;
              break;
            case (random > roullete[8] && random < roullete[9]):
              key = 9;
              break;
            case (random > roullete[9] && random < roullete[10]):
              key = 10;
              break;
            case (random > roullete[10] && random < roullete[11]):
              key = 11;
              break;
          }
          for (var b = 0; b <= 11; b++) {
            if(b == key){
              if(b > 5){
                var c = b-5;
                var no = 'P\''+c;
              }else {
                var d = b+1;
                var no = 'P'+parseInt(d);
              }
            }
          }
          populasi[i] = generasi[key];
          var kromosom = 0;
          var kalimat = '';
          var fx = 0;
          for (var j = 0; j <= 8; j=j+2) {
            jarak = totaljarak(populasi[i],j);
            kalimat += jarak+' ';
            kromosom += jarak;
            fx += 1/kromosom;
          };
          teks += 'P'+parseInt(i+1)+' = '+no+' = '+populasi[i]+' = '+kromosom+'&nbsp; KM '+fx+'&nbsp;<br>';
        }
        result2 = teks;
        $('#seleksihasil').html(teks);
      }

      $('#initpop').click(function(){
        var result = '';
        var result3 = '';
        var header = '';
        for (var i = 0; i < 6; i++) {
          populasi[i] = initIndividu();
          var m = i+1;
          var kromosom = 0;
          var kalimat = '';
          var fitness = 0;
          for (var j = 0; j <= 8; j=j+2) {
            jarak = totaljarak(populasi[i],j);
            kalimat += jarak+' ';
            kromosom += jarak;
            fitness += 1/kromosom;
          };
          result3 += '<table><tr><td>P&nbsp;'+m+'</td><td>&nbsp;'+populasi[i]+'</td><td>'+kromosom+'</td>'+'<td>KM</td><td>'+fitness'</td></tr></table>';
          result += 'P'+m+'&#9; = '+populasi[i]+' = &nbsp;'+kromosom+'&nbsp; KM '+fitness+'&nbsp;<br>';
          result2 = result;
        }
        header += '<table> <th>Parent</th> <th>Kromosom</th> <th>Jarak</th> <th>Fitness</th> </table>';
        $('#result').html(header+result);
      });

      $('#Reproduksi').click(function(){
        var hasil = '';
        for (var i = 0; i < populasi.length; i++) {
          repro[i] = populasi[i];
          var m = i+1;
          repro[i] = repro[i].replace('A','');
          repro[i] = repro[i].replace('A','');
          repro[i] = String(repro[i].replace(/-/g,''));
          var satu = random(repro[i]);
          var dua = random(repro[i]);
          while (dua == satu) {
            dua = random(repro[i]);
          }
          if(dua < satu){
            var temp = dua;
            dua = satu;
            satu = temp;
          }
          repro[i] = swapStr(repro[i],satu,dua);
          mutasi[i] = 'A-';
          for (var j = 0; j < repro[i].length; j++) {
            mutasi[i] += repro[i][j]+'-';
          }
          mutasi[i] += 'A';
          var kromosom = 0;
          var kalimat = '';
          var fitness = 0;
          for (var j = 0; j <= 8; j=j+2) {
            jarak = totaljarak(mutasi[i],j);
            kalimat += jarak+' ';
            kromosom += jarak;
            fitness += 1/kromosom;
          };
          hasil += 'P\''+m+'&#9; = '+mutasi[i]+' = &nbsp;'+kromosom+'&nbsp; KM'+fitness+'&nbsp;<br>';
        }
        $('#hasil').html(hasil);
        $('#gen').html(result2+hasil);
      });

      $('#seleksi').click(function(){
        roulettewheel(populasi,mutasi);
      });

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -7.005145, lng: 110.438125},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwW5b1RmYGIJIg1OWr00VUAgEUB4n_oP8&callback=initMap"
    async defer></script>
  </body>
</html>
