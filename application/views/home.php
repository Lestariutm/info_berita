<!DOCTYPE html>
<html>
<head>
<title>Overerts</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url() ?>assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('<?php echo base_url(); ?>assets/images/demo/backgrounds/01.png');"> 

  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      
      <div id="logo" class="fl_left">
        <h1><a href="<?php echo base_url().'index.php/Dashboard'; ?>">Berita Harian</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="<?php echo base_url().'index.php/Dashboard'; ?>">Home</a></li>
          <li><a class="drop" href="#">Info Berita</a>
            <ul>
              <li><a href="<?php echo base_url().'index.php/Sosial_new'; ?>">Sosial</a></li>
              <li><a href="<?php echo base_url().'index.php/Politik_new'; ?>">Politik</a></li>
              <li><a href="<?php echo base_url().'index.php/Pendidikan_new'; ?>">Pendidikan</a></li>
              <li><a href="<?php echo base_url().'index.php/Ekonomi_new'; ?>">Ekonomi</a></li>
              <li><a href="<?php echo base_url().'index.php/Budaya_new'; ?>">Budaya</a></li>
            </ul>
          </li>
          <li class=""><a href="<?php echo base_url().'index.php/Contact' ?>">Contact</a></li>
        </ul>
      </nav>
    </header>
  </div>

  
<div class="wrapper row4">
  <?php $data['data'] = isset($data) ? $data : []; $this->load->view($content, $data); ?>
</div>

<!-- End Top Background Image Wrapper -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2018 - Berita terkini - </p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">Yuli Yulia sari</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url() ?>assets/layout/scripts/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/layout/scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url() ?>assets/layout/scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url() ?>assets/layout/scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url() ?>assets/layout/scripts/jquery.mobilemenu.js"></script>
<script src="<?php echo base_url() ?>assets/layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>