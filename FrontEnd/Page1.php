
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<title>SOEN Course Stream</title>
	<style type="text/css">
		@media (max-width: 575px) {
			.myH1 {
				color: red;
				font-size: 20px;
				}
		}

		@media (min-width: 578px) {
			.myH1 {
				color: yellow;
				font-size: 30px;
				}
		}

		@media (min-width: 991px) {
			.myH1 {
				color: blue;
				font-size: 40px;
				}
		}

		@media (min-width: 1200px) {
			.myH1 {
				color: green;
				font-size: 50px;
				}
		}

		@media (max-width: 577px) {
			.myP1 {
				font-size: 10px;
				}
		}

		@media (max-width: 577px) {
			.myP2 {
				font-size: 10px;
				}
		}
		@media (min-width: 578px) {
			.myP1 {
				font-size: 20px;
				}
		}
		@media (min-width: 578px) {
			.myP2 {
				font-size: 20px;
				}
		}
	</style>


  </head>
  <?php  ?>
  <body>


	<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top">
		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
			<span class="navbar-toggler-icon"></span>


		</button>

		<span class="navbar-text">CourseSequence</span>
		<div class="collapse navbar-collapse" id="collapse_target">



		<ul class="navbar-nav">
			<li class="nav-item dropdown>
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
					Dropdown
					<span class="caret"></span>
				</a>
			<div class="dropdown-menu" aria-labelledby="dropdown_target">
				<ul class="navbar-nav">
				<a class="dropdown-item">Item 1</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item">Item 2</a>
				<a class="dropdown-item">Item 3</a>
				<a class="dropdown-item">Item 4</a>
				</ul>
			</div>
			</li>
			<li class="nav-item>
				<a class="nav-link" href="#">Link 2 </a>
			</li>
			<li class="nav-item>
				<a class="nav-link" href="#">Link 3 </a>
			</li>
			<li class="nav-item>
				<a class="nav-link" href="#">Link 4 </a>
			</li>
		</ul>
		</div>
	</nav>

	<div class="jumbotron text-center" style="margin-bottom: 0px;">
		<h1 class="myH1">Course Sequence</h1>
		<p class="myP1">Let's choose your sequence. Please log in to edit your course sequence and download for your own use.</p>
		<p class="myP2">For a new user, you can easily create a new account for next time convenience. Thank you so much!</P>

	<button type=button class="btn btn-lg btn-primary">Log In</button>
  <a href="page2.html">
	<button type=button class="btn btn-lg btn-danger">Sign Up</button>
</a>
	</div>

	<!-- <div class="page-header bg-light text-center">
	<h1>Course Sequence Entrance</h1>
	</div> -->



	<div class="navbar navbar-inverse bg-dark fixed-bottom">
		<div class="navbar-text text-white pull-left">
			<p> Copyright Error404 Team 2019</p>
		</div>
		<div class="navbar-text text-success text-center">
			<p> Please Share this Website to your friends, thanks!</p>
		</div>
		<div class="navbar-text pull-right">
		<a href="#"><i class="fab fa-facebook-square"></i></a>
		<a href="#"><i class="fab fa-google"></i></a>
		<a href="#"><i class="fab fa-twitter-square"></i></a>
		<a href="#"><i class="fas fa-share-square"></i></a>
		</div>
	</div>




  </body>
</html>