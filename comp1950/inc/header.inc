<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if (isset($title)) { ?>
	<title><?php echo $title ?></title>
<?php } ?>


<!-- CSS -->
	<!-- mild css reset -->
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
	<!-- main style sheet -->
	<link rel="stylesheet" type="text/css" href="../css/style.css" title="default"/>
	<link rel="alternate stylesheet" type="text/css" href="../css/projector.css" media="all" title="projector">

	<link rel="stylesheet" type="text/css" href="../css/print.css" media="print">
	<!--
		<link rel="alternate stylesheet" href="../css/overhead.css" type="text/css" media="screen" title="Overhead" />
		<link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
	-->

<!-- JS -->
	<!-- HTML5 shiv -->
		<!--[if lt IE 9]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
		<![endif]-->
	<!-- Uncompressed jquery -->
		<script
		src="https://code.jquery.com/jquery-3.2.1.js"
		integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		crossorigin="anonymous"></script>

		<!-- bootstrap -->
		<!--
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<script src="js/bootstrap.min.js"></script>
		-->

	<!-- Custom -->
		<script src="../script.js" charset="utf-8"></script>
</head>
<body>
	<?php include '../inc/new-nav.inc' ?>
	<div class="page-wrap">
		<header id="top">
			<h1 id="banner">British Columbia Institute of Technology</h1>
			<h2 id="titlebar">COMP 1950 - Intermediate Web Design and Development</h3>
		</header>
