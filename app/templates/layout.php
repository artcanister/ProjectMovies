<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="<?= BASE_URL?>/css/style.css">
	<link rel="stylesheet" href="<?= BASE_URL?>/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?= BASE_URL?>/css/bootstrap.min.css">
	<script src="<?= BASE_URL?>/js/bootstrap.min.js"></script>
	<script src="<?= BASE_URL?>/js/npm.js"></script>
</head>
<body>
	<div class="container">
	    <div class="collapse navbar-collapse navbar-inverse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li><a href="<?= BASE_URL?>">Home</a></li>
	        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link</a></li>        
	      </ul>
	    </div>
	</div>

	<div class="container">
		<?php include($grill_page);?>
	</div>

</body>
</html>
