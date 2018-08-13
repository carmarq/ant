<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<!--Font Awesome-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<!--JQuery first, Popper.js second, and Bootstrap Js  third-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
				  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
				  crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
				  integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
				  crossorigin="anonymous"></script>

		<!--CSS Stylesheet-->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<title>UncleLame</title>
	</head>

	<body>
		<header> <!--NavBar-->
			<div class="container nav-font">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" id="navfont">UncleLame</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon nav-fon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" id="soundcloud" href="https://soundcloud.com/godiscozy">Soundcloud<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tumblr" href="https://unclelame.tumblr.com/">Tumblr</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

		<div class="audio ant-audio-player">

			<div class="loading">
				<div class="spinner"></div>
			</div>
			<div class=play-pause-btn">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
					<path fill="#566574" fill-rule="evenodd" d="M18 12LO 24V0" class="play-pause-icon"
							id="playPause"/>
				</svg>
			</div>

		</div>

	</body>

</html>