<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>

	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
				document.getElementById('recaptchaResponse2').value = token;
			});
		});
	</script>

	<!-- Google Tag Manager -->

	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);

		})(window, document, 'script', 'dataLayer', 'GTM-WM8JM3X');
	</script>

	<!-- End Google Tag Manager -->

	<!-- Google tag (gtag.js) -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46094308-72"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());

		gtag('config', 'AW-714867981');

		gtag('config', 'UA-46094308-72');
	</script>

	<!-- Google tag (gtag.js) -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-714867981"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());

		gtag('config', 'AW-714867981');
	</script>

	<script>
		(function(w, d, t, r, u) {
			var f, n, i;
			w[u] = w[u] || [], f = function() {
				var o = {
					ti: "97026670",
					enableAutoSpaTracking: true
				};
				o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
			}, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
				var s = this.readyState;
				s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
			}, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
		})(window, document, "script", "//bat.bing.com/bat.js", "uetq");
	</script>
</head>

<body>

	<!-- Google Tag Manager (noscript) -->

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WM8JM3X" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<!-- End Google Tag Manager (noscript) -->

	<div class="modal fade" id="referralProgramForm" tabindex="-1" aria-labelledby="referralProgramFormLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form method="POST" action="./src/referralForm">
				<input type="hidden" name="token" id="recaptchaResponse2" class="recaptchaResponse">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="referralProgramFormLabel">Send us your referral!</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row g-3">
							<div class="col-12">
								<input type="text" class="form-control" placeholder="Dealership/Business name/Client name" name="businessName" required />
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Your Name" name="yourName" required />
							</div>
							<div class="col-md-6">
								<input type="tel" class="form-control" placeholder="Your Phone Number" name="yourPhone" required />
							</div>
							<div class="col-12">
								<input type="email" class="form-control" placeholder="Your Email" name="yourEmail" required />
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Referral Name" name="referralName" required />
							</div>
							<div class="col-md-6">
								<input type="tel" class="form-control" placeholder="Referral Phone Number" name="referralPhone" required />
							</div>
							<div class="col-12">
								<input type="email" class="form-control" placeholder="Referral Email" name="referralEmail" required />
							</div>
							<div class="col-12">
								<input type="text" class="form-control" placeholder="Estimated Loan Amount" name="estimatedLoanAmount" required />
							</div>
							<div class="col-12">
								<input type="text" class="form-control" placeholder="Asset Required" name="assetRequired" required />
							</div>
							<div class="col-12">
								<input type="text" class="form-control" placeholder="Additional Asset or Business Details (optional)" name="additionalDetails" />
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary text-white rounded-20" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary text-white rounded-20">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>