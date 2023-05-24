<!DOCTYPE html>
<!--TheFreeElectron 2015, http://www.instructables.com/member/TheFreeElectron/ -->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<title>Raspberry Pi Gpio</title>

</head>

<body>
	<!-- On/Off button's picture -->
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-expand navbar-light bg-light">
				<ul class="nav navbar-nav">
					<li class="nav-item">

					</li>
				</ul>
			</nav>
		</div>
	</header>
	<main>
		<div class="container-fluid text-center mb-5 mt-5">
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-dark">ON/OFF Switch Toggle Button</h4>
				</div>
			</div>
		</div>
		<div class="container-fluid row justify-content-center row-cols-1 row-cols-md-2 g-4">
			<?php
			//this php script generate the first page in function of the file
			for ($i = 0; $i < 3; $i++) {
				//set the pin's mode to output and read them
				try {
					exec("python3 relay_" . $i, $return);
				} catch (Exception) {
					function shutdown()
					{
						pcntl_signal(SIGINT, "shutdown");
					}
				}
			}
			//for loop to read the value
			$i = 0;
			for ($i = 0; $i < 3; $i++) {
				echo '
			<div class="card border-dark m-2" style="max-width: 18rem;">
			  <div class="card-header text-uppercase" style="background-color: aliceblue;">relay ' . $i . '</div>
			  <div class="card-body text-dark text-center">
				<h5 class="card-title">Gerbang Lobby Timur</h5>
				<p class="card-text text-switch status-switch mt-2">
				<button id="check' . $i . '" class="btn bg-danger text-light" onclick="stat()">
				Close
			  </button>
				</p>
			  </div>
			  </div>
			';
			}
			?>
		</div>
	</main>

	<!-- javascript -->
	<script src="script.js"></script>

	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	</script>

	<!-- FontAwesome 6.2.0 CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- (Optional) Use CSS or JS implementation -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>

</html>