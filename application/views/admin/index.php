<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assets/vendor/css/bootstrap.min.css" rel="stylesheet')?>">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assets/vendor/css/bootstrap-theme.css" rel="stylesheet')?>">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assets/vendor/css/elegant-icons-style.css" rel="stylesheet')?>" />
  <link href="<?php echo base_url('assets/vendor/css/font-awesome.min.css" rel="stylesheet')?>" />
  <!-- full calendar css-->
  <link href="<?php echo base_url('assets/vendor/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/vendor/assets/fullcalendar/fullcalendar/fullcalendar.css')?>" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url('assets/vendor/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')?>" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/css/owl.carousel.css')?>" type="text/css">
  <link href="<?php echo base_url('assets/vendor/css/jquery-jvectormawp-1.2.2.css')?>" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url('css/fullcalendar.css')?>">
  <link href="<?php echo base_url('assets/vendor/css/widgets.css" rel="stylesheet')?>">
  <link href="<?php echo base_url('assets/vendor/css/style.css" rel="stylesheet')?>">
  <link href="<?php echo base_url('assets/vendor/css/style-responsive.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/vendor/css/xcharts.min.css')?>" rel=" stylesheet">
  <link href="<?php echo base_url('assets/vendor/css/jquery-ui-1.10.4.min.css')?>" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
  <?php $this->load->view('header_admin'); ?>
    <!--sidebar start-->
    <?php $this->load->view('sidebar'); ?>
    <!--sidebar end-->
    <center>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <h1><b>Selamat Datang, <?php echo $this->session->nama; ?></b></h1>
        <br>
        <div class="row">
          <div class="col-lg-9 col-md-12">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
              </div>
              <div class="panel-body-map">
                <div id="map" style="height:380px;"></div>
              </div>

            </div>
          </div>
        </div>
        <!-- Today status end -->
            <!--Project Activity end-->
          </div>
        </div><br><br>
        <center>
        <div class="row">
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Calendar</strong></h2>

              </div><br><br><br>
              <div class="panel-body">
                <!-- Widget content -->

                <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                <div id="calendar"></div>

              </div>
            </div>

          </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://github.com/BismillahLancar">EASY</a>
        </div>
      </div>
      </center>
    </section>
    <!--main content end-->
  </section>
  </center>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="<?php echo base_url('assets/vendor/js/jquery.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/js/jquery-ui-1.10.4.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/js/jquery-1.8.3.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/vendor/js/jquery-ui-1.9.2.custom.min.js')?>"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url('assets/vendor/js/bootstrap.min.js')?>"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url('assets/vendor/js/jquery.scrollTo.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url('assets/vendor/assets/jquery-knob/js/jquery.knob.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/js/jquery.sparkline.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/vendor/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/js/owl.carousel.js')?>"></script>
  <!-- jQuery full calendar -->
  <<script src="<?php echo base_url('assets/vendor/js/fullcalendar.min.js')?>"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url('assets/vendor/assets/fullcalendar/fullcalendar/fullcalendar.js')?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url('assets/vendor/js/calendar-custom.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/jquery.rateit.min.js')?>"></script>
    <!-- custom select -->
    <script src="<?php echo base_url('assets/vendor/js/jquery.customSelect.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/assets/chart-master/Chart.js')?>"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url('assets/vendor/js/scripts.js')?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url('assets/vendor/js/sparkline-chart.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/easy-pie-chart.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/jquery-jvectormap-1.2.2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/jquery-jvectormap-world-mill-en.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/xcharts.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/jquery.autosize.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/jquery.placeholder.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/gdp-data.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/morris.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/sparklines.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/charts.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/js/jquery.slimscroll.min.js')?>"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
