<?php include_once ('Tooltip-Engine/Engine.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Smart Tooltips</title>
	<title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- animation CSS -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="css/sidebar-nav.min.css" rel="stylesheet">
	<!-- animation CSS -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	<!-- color CSS -->
	<link href="css/megna-dark.css" id="theme" rel="stylesheet">
</head>

<body>
<div id="wrapper" style="margin-top: 10%">
	<div id="page-wrapper" style="min-height: 562px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<h1>TEXT ONLY</h1>
					<div class="white-box">
						<br>
						<?php
						$text = 'We are talking about [{"key":"SI", "text":"Lorem ipsum dolor sit amet, consectetur adipisicing elit."}]';
						$engine = new Engine('text', $text);
						?>
						<?= $engine->render_tooltips()?>
					</div>
				</div>
				<div class="col-lg-6">
					<h1>TEXT AND IMAGE</h1>
					<div class="white-box">
						<br>
						<?php
						$text = 'Take a look to our [{"key":"IT Courses", "text":"The following are just some of the many jobs available in the IT industry: Computer Network Architect.", "image":"https://www.training.com.au/wp-content/uploads/career-in-technology-feature.png"}]';
						$engine = new Engine('text-image', $text);
						?>
						<?= $engine->render_tooltips()?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="js/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<!--Style Switcher -->
<script src="js/jQuery.style.switcher.js"></script>
</body>

</html>