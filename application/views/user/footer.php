	<!-- footer -->
	<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-4">
				<a class="navbar-brand" ><img src="<?php echo site_url(); ?>assets/User/images/actf.png" alt="logo" width=100%></a>
			</div>
			<div class="col-md-4 sign-gd">
					<ul>
						<li><a href="<?= site_url('user'); ?>"><p class="tl">Home</p></a></li>
						<li><a href="<?= site_url('user/berita'); ?>"><p class="tl">Berita</p></a></li>
						<li><a href="<?= site_url('user/program'); ?>"><p class="tl">Program</p></a></li>
						<li><a href="<?= site_url('user/tentang'); ?>"><p class="tl">Tentang</p></a></li>
						<li><a href="<?= site_url('user/daftar'); ?>"><p class="tl">Daftar Relawan</p></a></li>
						<li><a href="<?= site_url('user/login'); ?>"><p class="tl">Login</p></a></li>
					</ul>
			</div>	
			<div class="col-md-4 sign-gd-two">
				<h4>SEKRETARIAT MRI NTB</h4>
				<div class="address">
					<div class="address-grid paragraf">
						<p class="ft">Jl. Sriwijaya No. 80J, Kel. Pagesangan Timur, Kec. Mataram, Kota Mataram, Nusa Tenggara Barat.<br>
							Hp. 081 90700 1415 <br>
							WA 082 340 333 000 <br>
							Ph. 0370 - 7508386 <br>
							SMS Center 0852 1000 2320 <br>
							Email act.lombok@gmail.com</p>
						<div class="clearfix"> </div>
					</div>	
				</div>
			</div>
				<div class="clearfix"></div>	
		</div>
	</div>
	<!-- //footer -->
	<footer class="foot">
		<div class="container" >
			<div class="row">
				<div class="col-xs-12 ">
					<p class="copy">&copy 2019 Masyarakat Relawan Indonesia | MRI ACT - NTB </p>
				</div><!-- /col-xs-12 col-md-4 -->
			</div><!-- /row-->
		</div><!-- /container -->
	</footer>


	<script type="text/javascript" src="<?php echo site_url(); ?>assets/User/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/User/js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/User/js/easing.js"></script>
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/User/js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
<!-- 	<a id="toTop" href="#top" style="position: fixed; z-index: 2147483647; display: block;"><i class="arrow_carrot-up" <="" i=""></i></a> -->
	<a href="#top" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/User/js/jquery-1.7.2.js"></script>
	<script src="<?php echo site_url(); ?>assets/User/js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="<?php echo site_url(); ?>assets/User/js/script.js" type="text/javascript"></script>
	<script src="<?php echo site_url(); ?>assets/User/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="<?php echo site_url(); ?>assets/User/dist/sweetalert2.all.min.js"></script>
	<script src="<?php echo site_url(); ?>assets/User/dist/myscript.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>
<script type="text/javascript">
	// $(window).load(function() {$("#preloader").delay(3000).fadeOut("slow");})

	 // function onReady(callback) {
  //     var intervalID = window.setInterval(checkReady, 5000);
  //     function checkReady() {
  //         if (document.getElementsByTagName('body')[0] !== undefined) {
  //             window.clearInterval(intervalID);
  //             callback.call(this);
  //         }
  //     }
  // }
  // function show(id, value) {
  //     document.getElementById(id).style.display = value ? 'block' : 'none';
  // }
  // onReady(function () {
  //     show('page', true);
  //     show('loading', false);
  // });
</script>
</html>