<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<style>
		:root {

		}
body {
	background-color: #22222b;
	background-image: url('falling-triangles.svg?gg');
	background-size: 150px;
	font-family:'Catamaran', sans-serif;
	color: #ffffff;
	background-position: 25% 50%;
	animation: name 120s ease infinite;
}
@keyframes name {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
h1 {
font-weight: 900 !important;
}
	</style>
</head>
<body>

   <div class="container">
    <nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
      <div class="col-md-3 mb-2 mb-md-0">
    <a class="navbar-brand" href="#">
      <img src="./logo.svg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      readme.ftp.sh
    </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 active link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-secondary">Generate</a></li>
          <li><a href="#" class="nav-link px-2 link-secondary">FAQ</a></li>
          <li><a href="#" class="nav-link px-2 link-secondary">Credits</a></li>
      </ul>
    </nav>
  </div>
<div class="px-4 pt-5 my-5 text-center">
    <h1 class="display-1">README.ftp.sh</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Yet another GitHub README generator.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
				<div class="mb-3">
  <input type="text" class="form-control" placeholder="Your GitHub username" aria-label="Your GitHub username" aria-describedby="button-addon2">
  <br><button class="btn btn-primary" type="button" id="button-addon2">Let's go!</button>
</div>
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
