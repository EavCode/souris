<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Souris CSS Frameworks</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="logo.png">
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/souris.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<nav class=" container text-center">
			<ul>
				<li><a href="http://github.com/Vannrith/souris.git" class="flat-purple">github</a></li>
				<li><a href="http://rith.work">rith's</a></li>
				<li><a href="documents">documentations</a></li>
				<li><a href="download.php">download</a></li>
			</ul>
		</nav>
	</header>
	<aside class="container no-margin no-padding text-center banner">
		<img src="img/logo-bg.png" alt="logo" class="b1"> <br>
		<img src="img/banner-txt" alt="slogan" class="b2"> <br>
		<img src="img/banner.png" alt="images" class="b3">
	</aside>
	
	<main>
		<div class="container">

			<div class="row marbutt">
				<div class="small-5 columns text-right">
					<img src="img/basic.png" alt="basic" width="80px">
				</div>
				<div class="small-7 columns text-left">
					<h3>Very Basic</h3>
					<p>Easy to use. <br>
					Best for starter.</p>
				</div>
			</div>

			<div class="row marbutt">
				<div class="small-5 columns text-right">
					<img src="img/css.png" alt="css" width="80px">
				</div>
				<div class="small-7 columns text-left">
					<h3>Made With CSS 3</h3>
					<p>Readable, modifiable.<br>
					Works on most browsers.</p>
				</div>
			</div>

			<div class="row marbutt">
				<div class="small-5 columns text-right">
					<img src="img/nojs.png" alt="nojs" width="80px">
				</div>
				<div class="small-7 columns text-left">
					<h3>No Javascript!</h3>
					<p>Single CSS, no JS included<br>
					Don't worry.</p>
				</div>
			</div>

			<div class="row marbutt">
				<div class="small-12 medium-12 large-8 large-offset-2 columns contrib">
					<div class="small-12 medium-4 columns text-center">
						<img src="img/git.png" alt="git">
					</div>
					<div class="small-12 medium-8 columns text-center">
						<h3>MAKE IT BETTER</h3>
						<p>There's always be some mistakes and bugs. Please kindly help me make it better by using Github link below:</p>
						<a href="http://github.com/Vannrith/souris.git"><button class="flat-purple">Github</button></a>
					</div>
				</div>
			</div>

		</div>
	</main>

	<footer>
		<p class="white-color">Design by SOURIS, front-end web developer of FREEDOMTEAM <br>
		&copy;2015 - <?php echo date('Y');?> SOURIS, FREEDOMTEAM, CAMBODIA</p>
	</footer>

	<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>