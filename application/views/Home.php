	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>EASY</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
		</head>
		<body>

			<!-- header -->
			<?php $this->load->view('header'); ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
				<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
					<div class="active-banner-carousel">
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Welcome Everyone<br>
								Your comfort is our priority
							</h1>
							<a href="https://www.airasia.com/en/home.page" class="head-btn btn text-uppercase" target="_blank">Air Asia Website</a>
						</div>
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Enjoy your trip<br>
								with our services
							</h1>
							<a href="https://www.airasia.com/en/home.page" class="head-btn btn text-uppercase" target="_blank">Air Asia Website</a>
						</div>
					</div>
											<div class="carousel-trigger">
							<div class="next-trigger"><span class="lnr lnr-arrow-up"></span></span></div>
							<div class="prev-trigger"><span class="lnr lnr-arrow-down"></span></span></div>
						</div>
				</div>
				</div>
			</section>
			<!-- End banner Area -->
			<br><br>
			<center><p><h1>AWESOME AirAsia</h1></p><br>
			<iframe width="640" height="360" frameborder="0" src="https://www.youtube.com/embed/pKA1tUn3qiE?autoplay=0&amp;rel=0"></iframe></center>
			<!-- Start service Area -->
			<section class="service-area section-gap" id="facilities">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Seat Types</h1>
							<p>
								Here we display the look of the seat at airasia airplane
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 single-service">
						  <div class="content">
						    <a href="<?php echo site_url("Home/premium") ?>" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/premium1.jpg')?>" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Premium Flatbed</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-4 col-md-4 single-service">
						  <div class="content">
						    <a href="<?php echo site_url("Home/quite") ?>" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/quiet.jpg')?>" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Quiet Zone</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-4 col-md-4 single-service">
						  <div class="content">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/emergency.jpg')?>" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Seat in the Emergency Exit Row</h3>
						      </div>
						    </a>
						  </div>
						</div>
					</div>
				</div>
			</section>
			<!-- End service Area -->

			<!-- Start about Area -->
			<section class="about-area">
				<div class="container">
				<a href="https://www.airasia.com/id/en/our-fares/value-pack.page" target="_blank">
					<div class="row d-flex justify-content-center">
						<div class="banner-content col-lg-12 col-md-12">
							<img class="image" src="<?php echo base_url('assets/img/value.png')?>" alt="">
						</div>
					</div>
					</a>
				</div>
			</section>
			<!-- End about Area -->

			<!-- Start facilities Area -->
			<!-- End facilities Area -->

			<!-- Start information Area -->
			<section class="facilities-area section-gap" id="service">
			<div class="container">
			<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-80 header-text">
    		<h1>List of Destination</h1>
				<p>This information about schedule of flight</p>
			</div>
			</div>
    		<div class="col-xs-12 col-sm-12 col-md-12">
      <table class="table table-striped">
        <thead>
          <th>No</th>
          <th>Destination</th>
					<th>Schedule</th>
          <th>Time</th>
          <th>Price</th>
					<th>Stock</th>
        </thead>
        <tbody>
          <?php $number = 1; foreach($jurusan as $row) { ?>
          <tr>
            <td>
              <?php echo $number++ ?>
            </td>
            <td>
              <?php echo $row->tujuan ?>
            </td>
						<td>
              <?php echo $row->tanggal ?>
            </td>
            <td>
              <?php echo $row->jam_berangkat ?>
            </td>
            <td>
              <?php echo $row->harga ?>
            </td>
						<td>
              <?php echo $row->stok ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
			</div>
    </div>
  </div>
	</section>

			<!-- End information Area -->

			<!-- Start booking Area -->
			<section class="booking-area" id="book">
				<div class="container">
					<div class="row">
						<div class="booking-wrap col-lg-12">
							<div class="row d-flex justify-content-center">
								<div class="col-md-10 pb-80 header-text">
									<h1>Book a Ticket</h1>
									<p>
									please fill in your data for booking airline tickets
									</p>
								</div>
							</div>

					  		<?php echo form_open('User/store'); ?>
								
								 <div class="row">
								    <div class="col-lg-6 col-md-12">
								    	<div class="row d-flex justify-content-center">
									    	<div class="col-lg-6">
												<input type="text" name="nama" class="single-in form-control" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" required="">
												<input type="text" name="telepon" class="single-in form-control" placeholder="Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telepon'" required="">
												</div>
									    	<div class="col-lg-6">
												<select name="jurusan" class="app-select form-control" required>
													<option data-display="Jurusan">Jurusan</option>
													<?php foreach($jurusan as $row) { ?>
      											<option value="<?php echo $row->kode ?>"><?php echo $row->tujuan ?></option>
   												<?php } ?>
												</select>
												<select name="jenis" class="app-select form-control" required>
													<option data-display="Jenis">Tipe Pesawat</option>
														<?php foreach($jenis as $row) { ?>
      										<option value="<?php echo $row->id_jenis ?>">
														<?php echo $row->pesawat ?></option>
   													<?php } ?>
												</select>
									    	</div>
								    	</div>
								    </div>
								    <div class="col-lg-6 col-md-12">
								      	<textarea class="single-in form-control" name="messege" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
								    </div>
										<div class="col-lg-12 d-flex justify-content-center send-btn">
										<button class="primary-btn mt-20 text-uppercase" onclick="return confirm('Data anda telah disimpan')" type="submit">Book Ticket<span class="lnr lnr-arrow-right"></span></button>
									</div>
									<?php echo form_close() ?>

									<div class="alert-msg"></div>
								  </div>
					  		</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End booking Area -->

			<!-- Start contact-info Area -->
			<section class="contact-info-area section-gap">
				<div class="container">
					<div class="row">
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Visit Our Office</h4>
							 <p>
							 POLITEKNIK NEGERI MALANG Jl. Soekarno Hatta No. 9 Malang
								Telp : (0341) 404424, 404425
								Fax : (0341) 404420
							 </p>
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Let’s call us</h4>
							 <p>
								Phone 01: 081-191-751-431 <br>
								Phone 02: 085-755-195-005 <br>
								FAX: 02-6532-568-746
							 </p>
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Let’s Email Us</h4>
							 <p>
								rifky_syahbana@gmail.com <br>
								abrorrahmatullah@gmail.com <br>
							 </p>
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Visit Our Organization</h4>
							 <p>
							 	polinema.ac.id
							 </p>
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-info Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-12">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
								EASY is a website that accepts airasia flight ticket bookings, here we become a website that helps booking tickets airasia and become the second website from the original AIRASIA website.
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-12">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>

											<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
										</div>
										<div class="info"></div>
										</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="<?php echo base_url('assets/img/i1.jpg')?>" alt=""></li>
									<li><img src="<?php echo base_url('assets/img/i2.jpg')?>" alt=""></li>
									<li><img src="<?php echo base_url('assets/img/i3.jpg')?>" alt=""></li>
									<li><img src="<?php echo base_url('assets/img/i4.jpg')?>" alt=""></li>
									<li><img src="<?php echo base_url('assets/img/i5.jpg')?>" alt=""></li>
									<li><img src="<?php echo base_url('assets/img/i6.jpg')?>" alt=""></li>
									<li><img src="<?php echo base_url('assets/img/i7.jpg')?>" alt=""></li>
									<li><img src="<?php echo base_url('assets/img/i8.jpg')?>" alt=""></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-12">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
						<p class="footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js')?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js')?>"></script>
			<script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.nice-select.min.js')?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js')?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.sticky.js')?>"></script>
			<script src="<?php echo base_url('assets/js/parallax.min.js')?>"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
			<script src="<?php echo base_url('assets/js/main.js')?>"></script>
		</body>
	</html>
