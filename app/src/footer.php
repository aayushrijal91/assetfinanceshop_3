<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row justify-content-center ">
				<div class="col-xl-9">
					<div class="row justify-content-between gy-4 gy-md-0">
						<div class="col-md-4">
							<div class="fw-300">Head Office: Level 6 Suite 6.2 59-75 Grafton Street, Bondi Junction NSW 2022</div>
							<div class="py-4 fw-300">ACN 613056992 Pty Ltd trading as The Asset Finance Shop Credit Representative number 493210 is authorised under Australian Credit Licence number 514008.</div>
							<a href="https://www.google.com/maps/place/The+Asset+Finance+Shop/@-33.8905787,151.2462783,15z/data=!4m8!3m7!1s0x6b12b1c2997de0b3:0x12347be87f6832e3!8m2!3d-33.8905787!4d151.2462783!9m1!1b1!16s%2Fg%2F11c80cqrrk" target="_blank" class="google"><?= renderImg('google.png', 'logo') ?></a>
						</div>
						<div class="col-md-3">
							<div><a href="tel:<?= $phone_number ?>" class="text-decoration-none text-white">T: <?= $phone_number ?></a></div>
							<div><a href="mailto:<?= $admin_email ?>" class="text-decoration-none text-white">E: <?= $admin_email ?></a></div>

							<ul class="mt-4 footer-list">
								<li><a href="https://www.assetfinanceshop.com.au/privacy-disclosure/">Privacy Policy</a></li>
								<li><a href="javascript:void(0)">Terms Of Use</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="footer-list">
								<li><a href="#service">Truck Finance</a></li>
								<li><a href="#service">Trailer Finance</a></li>
								<li><a href="#service">Machinery And Equipment Finance</a></li>
								<li><a href="#service">Business Vehicle Finance</a></li>
								<li><a href="#service">Business Loans</a></li>
								<li>
									<a href="javascript:void(0)">About Us</a>
									<ul class="list-style-none">
										<li><a href="#about">Who We Are</a></li>
										<li><a href="#about">Our Team</a></li>
										<li><a href="https://www.google.com/maps/place/The+Asset+Finance+Shop/@-33.8905787,151.2462783,15z/data=!4m8!3m7!1s0x6b12b1c2997de0b3:0x12347be87f6832e3!8m2!3d-33.8905787!4d151.2462783!9m1!1b1!16s%2Fg%2F11c80cqrrk" target="_blank">Testimonials</a></li>
									</ul>
								</li>
								<li>
									<button type="button" data-bs-toggle="modal" data-bs-target="#referralProgramForm">
										Referral Program
									</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="row justify-content-center justify-content-md-between align-items-center py-4 gy-4">
						<div class="col-auto fw-200 text-light-grey">
							Copyright © The Asset Finance Shop <?= date('Y') ?>.
						</div>
						<div class="col-auto">
							<div class="d-flex gap-2">
								<a href="https://www.facebook.com/assetfinanceshop" target="_blank"><?= renderImg('facebook.png', 'icons') ?></a>
								<a href="https://www.linkedin.com/company/asset-finance-shop/" target="_blank"><?= renderImg('linkedin.png', 'icons') ?></a>
								<a href="https://www.instagram.com/assetfinanceshop/" target="_blank"><?= renderImg('instagram.png', 'icons') ?></a>
								<a href="https://www.youtube.com/channel/UCyNgNAeN_vYTNFiK6u7yqDg/featured" target="_blank"><?= renderImg('youtube.png', 'icons') ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>

<script async src="https://trkcall.com/scripts/95486.js"></script>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>

</body>

</html>