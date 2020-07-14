<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Asyiknya Belajar Matematika</title>
  <link href="<?=base_url('assets')?>/img/favicon.png" rel="icon">
  <link href="<?=base_url('assets')?>/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?=base_url('assets')?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets')?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/lib/gritter/css/jquery.gritter.css" />
  <link href="<?=base_url('assets')?>/css/style.css" rel="stylesheet">
  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="<?=base_url('assets')?>/css/style-responsive.css" rel="stylesheet">
  <script src="<?=base_url('assets')?>/lib/chart-master/Chart.js"></script>
  <style>p.indent{ padding-left: 1.8em }</style>
</head>

<body>
  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <a href="<?=site_url('home')?>" class="logo"><b>Matematika<span> 4</span></b></a>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <?php include 'navigation.php'; ?>
      </div>
    </aside>

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> <?=$title;?></h3>
        <hr>
        <div class="row">
            <?php include 'page/'.$page.'.php'; ?>
        </div>
      </section>
    </section>

    <!-- <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
         
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer> -->    
  </section>
  <script src="<?=base_url('assets')?>/lib/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets')?>/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?=base_url('assets')?>/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?=base_url('assets')?>/lib/jquery.scrollTo.min.js"></script>
  <script src="<?=base_url('assets')?>/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?=base_url('assets')?>/lib/jquery.sparkline.js"></script>
  <script src="<?=base_url('assets')?>/lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?=base_url('assets')?>/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?=base_url('assets')?>/lib/gritter-conf.js"></script>
  <script src="<?=base_url('assets')?>/lib/sparkline-chart.js"></script>
  <script src="<?=base_url('assets')?>/lib/zabuto_calendar.js"></script>

</body>

</html>