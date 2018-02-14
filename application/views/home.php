<?php 
	$this->load->view('templates/header');
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="1"></li>
	  <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
	  <div class="item active">
	    <img src="<?php echo base_url('images/banner1.jpg') ?>" alt="business1" style="width:100%;">
	  </div>

	  <div class="item">
	    <img src="<?php echo base_url('images/banner2.jpg') ?>" alt="business2" style="width:100%;">
	  </div>
	</div>

<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	  <span class="glyphicon glyphicon-chevron-left"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	  <span class="glyphicon glyphicon-chevron-right"></span>
	  <span class="sr-only">Next</span>
	</a>
</div>

<?php
	$this->load->view('templates/footer');
?>