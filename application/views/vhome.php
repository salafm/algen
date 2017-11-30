<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Algoritma Evolusioner | TSP</title>
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
    <!-- Dt css button -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
    <!-- Fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    .form-inline{
      padding-bottom: 10px;
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
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Setting 2</h3>
                    </div>
                    <div class="card-body">
                      <div>
                        <table>
                            <tr>
                                <td colspan="2"><b>Configuration</b></td>
                            </tr>
                            <tr>
                                <td>Travel Mode: </td>
                                <td>
                                    <select id="travel-type">
                                        <option value="DRIVING">Car</option>
                                        <option value="BICYCLING">Bicycle</option>
                                        <option value="WALKING">Walking</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Avoid Highways: </td>
                                <td>
                                    <select id="avoid-highways">
                                        <option value="1">Enabled</option>
                                        <option value="0" selected="selected">Disabled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Population Size: </td>
                                <td>
                                    <select id="population-size">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50" selected="selected">50</option>
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Mutation Rate: </td>
                                <td>
                                    <select id="mutation-rate">
                                        <option value="0.00">0.00</option>
                                        <option value="0.05">0.01</option>
                                        <option value="0.05">0.05</option>
                                        <option value="0.1" selected="selected">0.1</option>
                                        <option value="0.2">0.2</option>
                                        <option value="0.4">0.4</option>
                                        <option value="0.7">0.7</option>
                                        <option value="1">1.0</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Crossover Rate: </td>
                                <td>
                                    <select id="crossover-rate">
                                        <option value="0.0">0.0</option>
                                        <option value="0.1">0.1</option>
                                        <option value="0.2">0.2</option>
                                        <option value="0.3">0.3</option>
                                        <option value="0.4">0.4</option>
                                        <option value="0.5" selected="selected">0.5</option>
                                        <option value="0.6">0.6</option>
                                        <option value="0.7">0.7</option>
                                        <option value="0.8">0.8</option>
                                        <option value="0.9">0.9</option>
                                        <option value="1">1.0</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Elitism: </td>
                                <td>
                                    <select id="elitism">
                                        <option value="1" selected="selected">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Max Generations: </td>
                                <td>
                                    <select id="generations">
                                        <option value="20">20</option>
                                        <option value="50" selected="selected">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Debug Info</b></td>
                            </tr>
                            <tr>
                                <td>Destinations Count: </td>
                                <td id="destinations-count">0</td>
                            </tr>
                            <tr class="ga-info" style="display:none;">
                                <td>Generations: </td><td id="generations-passed">0</td>
                            </tr>
                            <tr class="ga-info" style="display:none;">
                                <td>Best Time: </td><td id="best-time">?</td>
                            </tr>
                            <tr id="ga-buttons">
                                <td colspan="2"><button id="find-route">Start</button> <button id="clear-map">Clear</button></td>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Setting 1</h3>
                    </div>
                    <div class="card-body">
                      <div class="" id="pilihkota">
                        <div class="form-inline">
                          <div class="form-group col-md-2">
                            <div class="col-md-12 kotake">Kota 1</div>
                          </div>
                          <div class="form-group col-md-8">
                            <div class="input-group col-md-12">
                              <select class="kota form-control" name="" id="">
                                <option value="" checked>Pilih</option>
                                <option value="-6.90389, 107.61861">Bandung</option>
                                <option value="-6.59444, 106.78917">Bogor</option>
                                <option value="-6.21462, 106.84513">Jakarta</option>
                                <option value="-7.78278, 110.36083">Jogjakarta</option>
                                <option value="-7.81667, 112.01667">Kediri</option>
                                <option value="-6.8886, 109.6753">Pekalongan</option>
                                <option value="-6.9932, 110.4203">Semarang</option>
                                <option value="-7.24917, 112.75083">Surabaya</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group col-md-2">
                            <button type="button" name="button" class="btn bg-blue plus" style="display:none"><i class="fa fa-plus"></i></button>
                            <span style="padding-left:10px"></span>
                            <button type="button" name="button" class="btn bg-red minus"><i class="fa fa-minus"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 form-inline">
                        <button type="button" name="button" id="reset" class="btn btn-primary">Reset</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Populasi Awal</h3>
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
                      <h3 class="h4" id="nama_gen">Generasi Baru</h3>
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
                      <br>
                      <!-- <a class="btn text-dark" id="sorting">Sorting</a> -->
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
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script> -->
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <!-- <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script> -->
    <script src="<?=base_url()?>assets/js/charts-home.js"></script>
    <script src="<?=base_url()?>assets/js/front.js"></script>
    <script type="text/javascript">
      var arrayjarak = new Array();
      var populasi = new Array();
      var repro = new Array();
      var mutasi = new Array();
      var generasi = new Array();
      var fitness = new Array();
      var roullete = new Array();
      var counter = 0;
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
        var teks2 = '';

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
            fx += 1/jarak;
          };
          teks += '<tr><td>P'+parseInt(i+1)+'</td><td>'+no+'</td><td>'+populasi[i]+'</td><td>'+kromosom+'&nbsp; KM </td><td>'+fx+'</td></tr>';
          teks2 += '<tr><td>P'+parseInt(i+1)+'</td><td>'+populasi[i]+'</td><td>'+kromosom+'&nbsp; KM </td><td>'+fx+'</td></tr>';
        }
        header = '<table class="table table-bordered" id="myTable"> <thead><th>Parent</th>  <th>Offspring to Parent</th> <th>Kromosom</th> <th>Jarak</th> <th>Fitness</th></thead><tbdoy>';
        footer = '</tbdoy></table>'
        result2 = teks2;
        $('#seleksihasil').html(header+teks+footer);
        $('#myTable').DataTable({
          paging:false,
          searching:false,
          info:false,
        });
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
            fitness += 1/jarak;
          };

          result += '<tr><td>P'+m+'</td><td> '+populasi[i]+'</td><td>'+kromosom+'&nbsp; KM </td><td>'+fitness+'</td></tr>';
          result2 = result;
        }
        header = '<table class="table table-bordered"> <th>Parent</th> <th>Kromosom</th> <th>Jarak</th> <th>Fitness</th>';
        footer = '</table>'
        $('#result').html(header+result+footer);
        $(this).hide();
      });

      $('#Reproduksi').click(function(){
        var hasil = '';
        counter++;
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
            fitness += 1/jarak;
          };
          hasil += '<tr><td>P\''+m+'</td><td> '+populasi[i]+'</td><td>'+kromosom+'&nbsp; KM </td><td>'+fitness+'</td></tr>';
          header = '<table class="table table-bordered"> <th>Parent</th> <th>Kromosom</th> <th>Jarak</th> <th>Fitness</th>';
          footer = '</table>'
        }
        $('#hasil').html(header+hasil+footer);
        $('#gen').html(header+result2+hasil+footer);
        $(this).hide();
        $('#nama_gen').html('Generasi Ke-'+counter);
        $('#seleksi').show();
      });

      $('#seleksi').click(function(){
        roulettewheel(populasi,mutasi);
        $('#Reproduksi').show();
        $(this).hide();
      });
    </script>

    //gmaps
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwW5b1RmYGIJIg1OWr00VUAgEUB4n_oP8&callback=initMap"></script>
    <script type="text/javascript">
    var map;
    var directionsDisplay = null;
    var directionsService;
    var polylinePath;
    var nodes = [];
    var prevNodes = [];
    var markers = [];
    var durations = [];
    // Initialize google maps
    function initializeMap() {
        // Map options
        var opts = {
            center: new google.maps.LatLng(-6.9932, 110.4203),
            zoom: 8,
            streetViewControl: false,
            mapTypeControl: false,
        };
        map = new google.maps.Map(document.getElementById('map'), opts);
        // Create map click event
        $(document).on('change','.kota',function() {
            var x = $(this).val().split(',')[0];
            var y = $(this).val().split(',')[1];
            var lokasi = new google.maps.LatLng(x,y);
            // Add destination (max 9)
            if (nodes.length >= 9) {
                alert('Max destinations added');
                return;
            }

            if(x == ''){
              return;
            }
            // If there are directions being shown, clear them
            clearDirections();

            // Add a node to map
            marker = new google.maps.Marker({position: lokasi, map: map});
            markers.push(marker);

            // Store node's lat and lng
            nodes.push(lokasi);

            // Update destination count
            $('#destinations-count').html(nodes.length);
            $(this).children('option:selected').hide();
            $(this).prop('disabled',true);
            $('.plus').show();
        });
        // Add "my location" button
        var myLocationDiv = document.createElement('div');
        new getMyLocation(myLocationDiv, map);
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(myLocationDiv);

        function getMyLocation(myLocationDiv, map) {
            var myLocationBtn = document.createElement('button');
            myLocationBtn.innerHTML = 'My Location';
            myLocationBtn.className = 'large-btn';
            myLocationBtn.style.margin = '5px';
            myLocationBtn.style.opacity = '0.95';
            myLocationBtn.style.borderRadius = '3px';
            myLocationDiv.appendChild(myLocationBtn);

            google.maps.event.addDomListener(myLocationBtn, 'click', function() {
                navigator.geolocation.getCurrentPosition(function(success) {
                    map.setCenter(new google.maps.LatLng(success.coords.latitude, success.coords.longitude));
                    map.setZoom(12);
                });
            });
        }
    }
    // Get all durations depending on travel type
    function getDurations(callback) {
        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
            origins: nodes,
            destinations: nodes,
            travelMode: google.maps.TravelMode[$('#travel-type').val()],
            avoidHighways: parseInt($('#avoid-highways').val()) > 0 ? true : false,
            avoidTolls: false,
        }, function(distanceData) {
            // Create duration data array
            var nodeDistanceData;
            for (originNodeIndex in distanceData.rows) {
                nodeDistanceData = distanceData.rows[originNodeIndex].elements;
                durations[originNodeIndex] = [];
                for (destinationNodeIndex in nodeDistanceData) {
                    if (durations[originNodeIndex][destinationNodeIndex] = nodeDistanceData[destinationNodeIndex].duration == undefined) {
                        alert('Error: couldn\'t get a trip duration from API');
                        return;
                    }
                    durations[originNodeIndex][destinationNodeIndex] = nodeDistanceData[destinationNodeIndex].duration.value;
                }
            }
            if (callback != undefined) {
                callback();
            }
        });
    }
    // Removes markers and temporary paths
    function clearMapMarkers() {
        for (index in markers) {
            markers[index].setMap(null);
        }
        prevNodes = nodes;
        nodes = [];
        if (polylinePath != undefined) {
            polylinePath.setMap(null);
        }

        markers = [];

        $('#ga-buttons').show();
    }
    // Removes map directions
    function clearDirections() {
        // If there are directions being shown, clear them
        if (directionsDisplay != null) {
            directionsDisplay.setMap(null);
            directionsDisplay = null;
        }
    }
    // Completely clears map
    function clearMap() {
        clearMapMarkers();
        clearDirections();

        $('#destinations-count').html('0');
    }
    // Initial Google Maps
    google.maps.event.addDomListener(window, 'load', initializeMap);
    // Create listeners
    $(document).ready(function() {
        $('#clear-map').click(clearMap);
        // Start GA
        $('#find-route').click(function() {
            if (nodes.length < 2) {
                if (prevNodes.length >= 2) {
                    nodes = prevNodes;
                } else {
                    alert('Click on the map to select destination points');
                    return;
                }
            }
            if (directionsDisplay != null) {
                directionsDisplay.setMap(null);
                directionsDisplay = null;
            }

            $('#ga-buttons').hide();
            // Get route durations
            getDurations(function(){
                $('.ga-info').show();
                // Get config and create initial GA population
                ga.getConfig();
                var pop = new ga.population();
                pop.initialize(nodes.length);
                var route = pop.getFittest().chromosome;
                ga.evolvePopulation(pop, function(update) {
                    $('#generations-passed').html(update.generation);
                    $('#best-time').html(update.population.getFittest().getDistance()/100+ ' KM');

                    // Get route coordinates
                    var route = update.population.getFittest().chromosome;
                    var routeCoordinates = [];
                    for (index in route) {
                        routeCoordinates[index] = nodes[route[index]];
                    }
                    routeCoordinates[route.length] = nodes[route[0]];
                    // Display temp. route
                    if (polylinePath != undefined) {
                        polylinePath.setMap(null);
                    }
                    polylinePath = new google.maps.Polyline({
                        path: routeCoordinates,
                        strokeColor: "#0066ff",
                        strokeOpacity: 0.75,
                        strokeWeight: 2,
                    });
                    polylinePath.setMap(map);
                }, function(result) {
                    // Get route
                    route = result.population.getFittest().chromosome;
                    // Add route to map
                    directionsService = new google.maps.DirectionsService();
                    directionsDisplay = new google.maps.DirectionsRenderer();
                    directionsDisplay.setMap(map);
                    var waypts = [];
                    for (var i = 1; i < route.length; i++) {
                        waypts.push({
                            location: nodes[route[i]],
                            stopover: true
                        });
                    }

                    // Add final route to map
                    var request = {
                        origin: nodes[route[0]],
                        destination: nodes[route[0]],
                        waypoints: waypts,
                        travelMode: google.maps.TravelMode[$('#travel-type').val()],
                        avoidHighways: parseInt($('#avoid-highways').val()) > 0 ? true : false,
                        avoidTolls: false
                    };
                    directionsService.route(request, function(response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                        }
                        clearMapMarkers();
                    });
                });
            });
        });
    });
    // GA code
    var ga = {
        // Default config
        "crossoverRate": 0.5,
        "mutationRate": 0.1,
        "populationSize": 50,
        "tournamentSize": 5,
        "elitism": true,
        "maxGenerations": 50,

        "tickerSpeed": 60,
        // Loads config from HTML inputs
        "getConfig": function() {
            ga.crossoverRate = parseFloat($('#crossover-rate').val());
            ga.mutationRate = parseFloat($('#mutation-rate').val());
            ga.populationSize = parseInt($('#population-size').val()) || 50;
            ga.elitism = parseInt($('#elitism').val()) || false;
            ga.maxGenerations = parseInt($('#maxGenerations').val()) || 50;
        },

        // Evolves given population
        "evolvePopulation": function(population, generationCallBack, completeCallBack) {
            // Start evolution
            var generation = 1;
            var evolveInterval = setInterval(function() {
                if (generationCallBack != undefined) {
                    generationCallBack({
                        population: population,
                        generation: generation,
                    });
                }
                // Evolve population
                population = population.crossover();
                population.mutate();
                generation++;

                // If max generations passed
                if (generation > ga.maxGenerations) {
                    // Stop looping
                    clearInterval(evolveInterval);

                    if (completeCallBack != undefined) {
                        completeCallBack({
                            population: population,
                            generation: generation,
                        });
                    }
                }
            }, ga.tickerSpeed);
        },
        // Population class
        "population": function() {
            // Holds individuals of population
            this.individuals = [];

            // Initial population of random individuals with given chromosome length
            this.initialize = function(chromosomeLength) {
                this.individuals = [];

                for (var i = 0; i < ga.populationSize; i++) {
                    var newIndividual = new ga.individual(chromosomeLength);
                    newIndividual.initialize();
                    this.individuals.push(newIndividual);
                }
            };

            // Mutates current population
            this.mutate = function() {
                var fittestIndex = this.getFittestIndex();
                for (index in this.individuals) {
                    // Don't mutate if this is the elite individual and elitism is enabled
                    if (ga.elitism != true || index != fittestIndex) {
                        this.individuals[index].mutate();
                    }
                }
            };
            // Applies crossover to current population and returns population of offspring
            this.crossover = function() {
                // Create offspring population
                var newPopulation = new ga.population();

                // Find fittest individual
                var fittestIndex = this.getFittestIndex();
                for (index in this.individuals) {
                    // Add unchanged into next generation if this is the elite individual and elitism is enabled
                    if (ga.elitism == true && index == fittestIndex) {
                        // Replicate individual
                        var eliteIndividual = new ga.individual(this.individuals[index].chromosomeLength);
                        eliteIndividual.setChromosome(this.individuals[index].chromosome.slice());
                        newPopulation.addIndividual(eliteIndividual);
                    } else {
                        // Select mate
                        var parent = this.tournamentSelection();
                        // Apply crossover
                        this.individuals[index].crossover(parent, newPopulation);
                    }
                }

                return newPopulation;
            };
            // Adds an individual to current population
            this.addIndividual = function(individual) {
                this.individuals.push(individual);
            };
            // Selects an individual with tournament selection
            this.tournamentSelection = function() {
                // Randomly order population
                for (var i = 0; i < this.individuals.length; i++) {
                    var randomIndex = Math.floor(Math.random() * this.individuals.length);
                    var tempIndividual = this.individuals[randomIndex];
                    this.individuals[randomIndex] = this.individuals[i];
                    this.individuals[i] = tempIndividual;
                }
                // Create tournament population and add individuals
                var tournamentPopulation = new ga.population();
                for (var i = 0; i < ga.tournamentSize; i++) {
                    tournamentPopulation.addIndividual(this.individuals[i]);
                }
                return tournamentPopulation.getFittest();
            };

            // Return the fittest individual's population index
            this.getFittestIndex = function() {
                var fittestIndex = 0;
                // Loop over population looking for fittest
                for (var i = 1; i < this.individuals.length; i++) {
                    if (this.individuals[i].calcFitness() > this.individuals[fittestIndex].calcFitness()) {
                        fittestIndex = i;
                    }
                }
                return fittestIndex;
            };
            // Return fittest individual
            this.getFittest = function() {
                return this.individuals[this.getFittestIndex()];
            };
        },
        // Individual class
        "individual": function(chromosomeLength) {
            this.chromosomeLength = chromosomeLength;
            this.fitness = null;
            this.chromosome = [];
            // Initialize random individual
            this.initialize = function() {
                this.chromosome = [];
                // Generate random chromosome
                for (var i = 0; i < this.chromosomeLength; i++) {
                    this.chromosome.push(i);
                }
                for (var i = 0; i < this.chromosomeLength; i++) {
                    var randomIndex = Math.floor(Math.random() * this.chromosomeLength);
                    var tempNode = this.chromosome[randomIndex];
                    this.chromosome[randomIndex] = this.chromosome[i];
                    this.chromosome[i] = tempNode;
                }
            };

            // Set individual's chromosome
            this.setChromosome = function(chromosome) {
                this.chromosome = chromosome;
            };

            // Mutate individual
            this.mutate = function() {
                this.fitness = null;

                // Loop over chromosome making random changes
                for (index in this.chromosome) {
                    if (ga.mutationRate > Math.random()) {
                        var randomIndex = Math.floor(Math.random() * this.chromosomeLength);
                        var tempNode = this.chromosome[randomIndex];
                        this.chromosome[randomIndex] = this.chromosome[index];
                        this.chromosome[index] = tempNode;
                    }
                }
            };

            // Returns individuals route distance
            this.getDistance = function() {
                var totalDistance = 0;
                for (index in this.chromosome) {
                    var startNode = this.chromosome[index];
                    var endNode = this.chromosome[0];
                    if ((parseInt(index) + 1) < this.chromosome.length) {
                        endNode = this.chromosome[(parseInt(index) + 1)];
                    }
                    totalDistance += durations[startNode][endNode];
                }

                totalDistance += durations[startNode][endNode];

                return totalDistance;
            };
            // Calculates individuals fitness value
            this.calcFitness = function() {
                if (this.fitness != null) {
                    return this.fitness;
                }

                var totalDistance = this.getDistance();
                this.fitness = 1 / totalDistance;
                return this.fitness;
            };
            // Applies crossover to current individual and mate, then adds it's offspring to given population
            this.crossover = function(individual, offspringPopulation) {
                var offspringChromosome = [];
                // Add a random amount of this individual's genetic information to offspring
                var startPos = Math.floor(this.chromosome.length * Math.random());
                var endPos = Math.floor(this.chromosome.length * Math.random());
                var i = startPos;
                while (i != endPos) {
                    offspringChromosome[i] = individual.chromosome[i];
                    i++
                    if (i >= this.chromosome.length) {
                        i = 0;
                    }
                }
                // Add any remaining genetic information from individual's mate
                for (parentIndex in individual.chromosome) {
                    var node = individual.chromosome[parentIndex];
                    var nodeFound = false;
                    for (offspringIndex in offspringChromosome) {
                        if (offspringChromosome[offspringIndex] == node) {
                            nodeFound = true;
                            break;
                        }
                    }
                    if (nodeFound == false) {
                        for (var offspringIndex = 0; offspringIndex < individual.chromosome.length; offspringIndex++) {
                            if (offspringChromosome[offspringIndex] == undefined) {
                                offspringChromosome[offspringIndex] = node;
                                break;
                            }
                        }
                    }
                }
                // Add chromosome to offspring and add offspring to population
                var offspring = new ga.individual(this.chromosomeLength);
                offspring.setChromosome(offspringChromosome);
                offspringPopulation.addIndividual(offspring);
            };
        },
    };

    $(document).on('click','.plus',function(){
      var elem = $(this).closest('.form-inline');
      var kotake = parseInt($(this).closest('.form-inline').find('.kotake').html().replace('Kota ',''));
      $('#pilihkota').append(elem.clone()).html();
      elem.next().find('button.minus').show();
      elem.next().find('button.plus').hide();
      elem.next().find('.kotake').html('Kota '+parseInt(kotake+1));
      elem.next().find('.kota').prop('disabled',false);
      $(this).closest('div.col-md-2').hide();
    }).on('click','.minus', function(){
      var index = $(this).closest('.form-inline').index();
      if(index == 0){
        $(this).closest('.form-inline').find('.kota').prop('disabled',false);
        $(this).closest('.form-inline').find('button.plus').hide();
        $('option').show();
      }else{
        $(this).closest('.form-inline').prev().find('div.col-md-2').show();
        $(this).closest('.form-inline').remove();
      }
      markers[index].setMap(null);
      markers.splice(index,1);
      nodes.splice(index,1);
    }).on('click','#reset', function(){
      var elem = $('#pilihkota div').first();
      $('option').show();
      $('.kota').prop('disabled',false);
      $('.kota').children('option:eq(0)').prop('selected',true);
      $('#pilihkota').empty().append(elem);
      $('#pilihkota div').first().find('div.col-md-2').show();
      clearMapMarkers();
    });
    </script>
  </body>
</html>
