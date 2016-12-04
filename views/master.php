<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/grillade.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" href="assets/jquery-ui-1.12.1.custom/jquery-ui.min.css">

	<title>Le Triste Mouton</title>

</head>
<body>
	<div class="color-brown" id="head-title">
		<div>
			<h1 class="center mb-6">Le Triste Mouton</h1>
		</div>			
		<hr/>
		<div>
			<h6 class="center mt-6 mb-4">Journal / blog</h6>			
		</div>
	</div>
	<div class="grid mb-3">
	    <div class="center">
	    	<a href="#" class="button">La petite</a>
	    </div>
	    <div class="center">
	    	<a href="#" class="button">Grillarde</a>
	    </div>
	    <div class="center">
	    	<a href="#" class="button">De knacss</a>
	    </div>
	    <div class="center">
	    	<a href="#" class="button">Qui va bien</a>
	    </div>
	    <div class="center">
	    	<a href="#" class="button">Comme il faut</a>
	    </div>
	</div>
	<div class="content">
		<?php echo $content?? '' ; ?>
	</div>

	<script src="assets/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
	<script src="assets/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>