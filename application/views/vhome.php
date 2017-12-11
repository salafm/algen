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
              <h2 class="no-margin-bottom">Presentasi Traveling Salesman Problem</h2>
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
                      <h3 class="h4">Setting Parameter</h3>
                    </div>
                    <div class="card-body">
                      <div>
                        <table>
                            <tr>
                                <td colspan="2" ><b>Konfigurasi Variabel</b></td>
                            </tr>
                            <tr>
                                <td>Mode Perjalanan: </td>
                                <td>
                                  <div class="input-group col-md-12">
                                    <select class="mode form-control" id="travel-type">
                                        <option value="DRIVING">Mobil</option>
                                        <option value="BICYCLING">Sepeda</option>
                                        <option value="WALKING">Jalan Kaki</option>
                                    </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Hindari Jalan Tol: </td>
                                <td>
                                  <div class="input-group col-md-12">
                                    <select class="tol form-control" id="avoid-highways">
                                        <option value="1">Enabled</option>
                                        <option value="0" selected="selected">Disabled</option>
                                    </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Population Size: </td>
                                <td>
                                  <div class="input-group col-md-12">
                                    <select class="popsize form-control" id="population-size">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50" selected="selected">50</option>
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                    </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Mutation Rate: </td>
                                <td>
                                  <div class="input-group col-md-12">
                                    <select class="mr form-control"  id="mutation-rate">
                                        <option value="0.00">0.00</option>
                                        <option value="0.05">0.01</option>
                                        <option value="0.05">0.05</option>
                                        <option value="0.1" selected="selected">0.1</option>
                                        <option value="0.2">0.2</option>
                                        <option value="0.4">0.4</option>
                                        <option value="0.7">0.7</option>
                                        <option value="1">1.0</option>
                                    </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Crossover Rate: </td>
                                <td>
                                  <div class="input-group col-md-12">
                                    <select class="cr form-control" id="crossover-rate">
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
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Elitism: </td>
                                <td>
                                    <div class="input-group col-md-12">
                                    <select class="elitism form-control" id="elitism">
                                        <option value="1" selected="selected">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                  </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Max Generations: </td>
                                <td>
                                  <div class="input-group col-md-12">
                                    <select class="maxgen form-control" id="generations">
                                        <option value="20">20</option>
                                        <option value="50" selected="selected">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Debug Info</b></td>
                            </tr>
                            <tr>
                                <td>Destinations Count: </td>
                                <td class="input-group col-md-12" id="destinations-count">0</td>
                            </tr>
                            <tr class="ga-info" style="display:none;">
                                <td>Generations: </td><td id="generations-passed">0</td>
                            </tr>
                            <tr class="ga-info" style="display:none;">
                                <td>Waktu Terbaik: </td><td id="best-time">?</td>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Setting Kota</h3>
                    </div>
                    <div class="card-body">
                      <div class="" id="pilihkota">
                        <div class="form-inline">
                          <div class="form-group col-md-3">
                            <div class="col-md-12 kotake">Kota 1</div>
                          </div>
                          <div class="form-group col-md-6">
                            <div class="input-group col-md-12">
                              <select class="kota form-control" name="" id="">
                                <option value="" checked>Pilih</option>
                                <option value="-6.90389, 107.61861">Bandung</option>
                                <option value="-6.59444, 106.78917">Bogor</option>
                                <option value="-6.21462, 106.84513">Jakarta</option>
                                <option value="-7.78278, 110.36083">Yogyakarta</option>
                                <option value="-7.81667, 112.01667">Kediri</option>
                                <option value="-6.8886, 109.6753">Pekalongan</option>
                                <option value="-6.9932, 110.4203">Semarang</option>
                                <option value="-7.24917, 112.75083">Surabaya</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group col-md-3">
                            <button type="button" name="button" class="btn bg-blue plus" style="display:none"><i class="fa fa-plus"></i></button>
                            <span style="padding-left:10px"></span>
                            <button type="button" name="button" class="btn bg-red minus" style="display:none"><i class="fa fa-minus"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 form-inline" style="margin-left:10px;margin-top:10px;">
                        <button type="button" name="button" id="start" class="btn bg-navy"><span class="fa fa-start"></span> Start</button>
                        <button type="button" name="button" id="reset" class="btn bg-navy" style="margin-left:10px;"><span class="fa fa-refresh"></span> Reset</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Populasi Awal</h3>
                    </div>
                    <div class="card-body">
                      <div id="result" class="col-lg-6"></div>
                      <div id="result2" class="col-lg-6"></div>
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
                  <p>Lulus Cepet &copy; 2018</p>
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
    //gmaps
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwW5b1RmYGIJIg1OWr00VUAgEUB4n_oP8&callback=initMap"></script>
    <script type="text/javascript">
    var map;
    var directionsDisplay = null;
    var directionsService;
    var polylinePath;
    var kota = [];
    var pop = [];
    var nodes = [];
    var prevNodes = [];
    var markers = [];
    var jarak = [];
    var rute = [];
    var distance = [];
    var fitnessess = [];
    // Initialize google maps
    function initializeMap() {
        // Map options
        var opts = {
            center: new google.maps.LatLng(-6.9932, 110.4203),
            zoom: 7,
            streetViewControl: false,
            mapTypeControl: false,
        };
        map = new google.maps.Map(document.getElementById('map'), opts);
        // Create map click event
        $(document).on('change','.kota',function() {
            var x = $(this).val().split(',')[0];
            var y = $(this).val().split(',')[1];
            var lokasi = new google.maps.LatLng(x,y);
            kota.push($(this).children('option:selected').html());
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
            if (nodes.length >= 1) {
              // $('.plus').show();
              // $('.minus').show();
              $(this).closest('.form-inline').prevAll().find('button.plus').hide();
              $(this).closest('.form-inline').prevAll().find('button.minus').hide();
              $(this).closest('.form-inline').find('button.plus').show();
              $(this).closest('.form-inline').find('button.minus').show();
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

    });

    function random(str){
      return parseInt(Math.round(Math.random()*(str.length-1)));
    }

    function initpop(){
      var jmlpop = 6;
      for (var i = 0; i < jmlpop; i++) {
        var kromosom = [];
        kromosom.push(kota[0]);
        var kota2 = kota.slice(0);
        kota2.splice(0,1);
        for (var j = 0; j < kota.length-1; j++) {
          var random = this.random(kota2);
          kromosom.push(kota2[random]);
          kota2.splice(random,1);
        }
        kromosom.push(kota[0]);
        pop.push(kromosom);
      }
    };

    function getjarak(){
      var d1 = $.Deferred();
      for (var i = 0; i < pop.length; i++) {
        for (var j = 0; j < kota.length; j++) {
          var start = nodes[kota.indexOf(pop[i][j])];
          var end = nodes[kota.indexOf(pop[i][j+1])];
          rute.push(pop[i][j]+'-'+pop[i][j+1]);
          calculateDistances(start,end,function(rs){
            var index = rs[1]+'*'+rs[2];
            d1.resolve(jarak[index] = rs[0]);
          });
        }
      }
      return d1.promise();
    }

    function  calculateDistances(start, end, fn) {
      var service = new google.maps.DistanceMatrixService();
      service.getDistanceMatrix(
      {
        origins: [start],
        destinations: [end],
        travelMode: google.maps.TravelMode.DRIVING,
        avoidHighways: false,
        avoidTolls: false
      }, function callback(response, status) {
        if (status!==google.maps.DistanceMatrixStatus.OK) {
        alert('Error was: ' + status);
        } else {
          var origins = response.originAddresses;
          var destination = response.destinationAddresses;
          for (var i = 0; i < origins.length; i++) {
            var results = response.rows[i].elements;
            for (var j = 0; j < results.length; j++) {
              fn([results[j].distance.value/1000, origins[i], destination[i]]);
            }
          }
        }
      });
    }

    function ga(){
      initpop();
      $.when(this.getjarak()).done(function(x){
        for (var i = 0; i < rute.length; i++) {
          // console.log('fullpath :('+i+')'+rute[i]);
          rute[i] = rute[i].replace('Surabaya','SBY');
          var city = rute[i].split('-');
          for (var index in jarak) {
            var addr = index.split('*');
            if(addr[0].includes(city[0]) && addr[1].includes(city[1])){
              distance[rute[i]] = jarak[index];
            }else{
              console.log(city+' google error');
            }
            // console.log(index+' : '+jarak[index]);
          }
        }

        for (var index in distance) {
          // console.log(index+' : '+distance[index]);
        }

        var table = '<table width="100%" class="table table-bordered"><tr><th>Nomor</th><th>Parent</th><th>Rute</th><th>Jarak</th><th>Fitness</th></tr>';
        for (var i = 0; i < pop.length; i++) {
          var fitness = 0;
          for (var j = 0; j < pop[i].length-1; j++) {
            var rute1 = pop[i][j].replace('Surabaya','SBY');
            var rute2 = pop[i][j+1].replace('Surabaya','SBY');
            var index = rute1+'-'+rute2;
            fitness += distance[index];
            fitnessess[i] = fitness;
          }

          table += '<tr><td>'+parseInt(i+1)+'</td><td>Parent'+parseInt(i+1)+'</td><td>'+pop[i]+'</td><td>'+fitness.toFixed(3)+'</td><td>'+1/fitness+'</td></tr>'
        }
        table += '</table>';
        $('#result').html(table);

        this.crossover(fitnessess);
      });
    }

    var popc = [];
    var parent = [];
    var kum = [];
    function roullete(arr){
      var sum = 0;
      var sum2 = 0;
      for (var i = 0; i < arr.length; i++) {
        var fitnes = 1/arr[i]
        sum += fitnes;
      }

      for (var i = 0; i < arr.length; i++) {
        sum2 = sum2 + ((1/arr[i])/sum)*100;
        kum[i] = sum2;
      }

      while (parent[0] == parent[1]) {
        for (var i = 0; i < 2; i++) {
          var random = Math.random()*100;
          for (var j = 0; j < arr.length-1; j++) {
            if(random > kum[j] && random <= kum[j+1]){
              parent[i] = (j+1);
            }else if(random <= kum[0]){
              parent[i] = (0);
            }else if(random > kum[arr.length-1]){
              parent[i] = (arr.length-1);
            }
          }
        }
      }

      if(parent[0] > parent[1]){
        var temp = parent[1];
        parent[1] = parent[0];
        parent[0] = temp;
      }
    }

    function crossover(arr){
      this.roullete(arr);
      console.log(parent);
      console.log(arr);
      arr.splice(parent[0],1);
      arr.splice(parent[1]-1,1);
      console.log(arr);
      console.log(arr.length);
      this.roullete(arr);
      console.log(parent);
      console.log(arr);
      arr.splice(parent[0],1);
      arr.splice(parent[1]-1,1);
      console.log(arr);
      console.log(arr.length);
      this.roullete(arr);
      console.log(parent);
      console.log(arr);
      arr.splice(parent[0],1);
      arr.splice(parent[1]-1,1);
      console.log(arr);
      console.log(arr.length);
    }

    $(document).on('click','.plus',function(){
      var elem = $(this).closest('.form-inline');
      var kotake = parseInt($(this).closest('.form-inline').find('.kotake').html().replace('Kota ',''));
      $('#pilihkota').append(elem.clone()).html();
      elem.find('button.minus').hide();
      elem.find('button.plus').hide();
      elem.next().find('button.minus').hide();
      elem.next().find('button.plus').hide();
      elem.prevAll().find('button.plus').hide();
      elem.prevAll().find('button.minus').hide();
      elem.next().find('.kotake').html('Kota '+parseInt(kotake+1));
      elem.next().find('.kota').prop('disabled',false);
      $(this).closest('div.col-md-2').hide();
    }).on('click','.minus', function(){
      var index = $(this).closest('.form-inline').index();
      if(index == 0){
        $(this).closest('.form-inline').find('.kota').prop('disabled',false);
        $(this).closest('.form-inline').find('button.plus').hide();
        $(this).closest('.form-inline').find('button.minus').hide();
        $('option').show();
      }else{
        $(this).closest('.form-inline').prev().find('button.plus').show();
        $(this).closest('.form-inline').prev().find('button.minus').show();
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
      clearMap();
    }).on('click','#start', function(){
      ga();
    });
    </script>
  </body>
</html>
