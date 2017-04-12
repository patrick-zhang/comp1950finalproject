<!DOCTYPE html>

<html lang="en">
<head>
	<title>COMP 1950 - Quiz #8</title>

	<!-- mild css reset -->
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
	<link rel="stylesheet" href="../style.css">

<!-- we should probably store the rest that's included in all pages in a include file, too? -->
<!--
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
-->
	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->

<!--
	<script src="/js/scripts.js"></script>
<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
-->
</head>

<body class="quiz">
<div class="page-wrap">
	<header id="top">
		<h1 id="banner">British Columbia Institute of Technology</h1>
		<h2 id="titlebar">COMP 1950 - Intermediate Web Design and Development</h3>
	</header>
	<main><article>
		<!-- We could consider building in functionality that prevents leaving the window and records attempts to do so -->
		 <form class="quiz quiz-8"> <!-- action="#done" method="post" could be used to process it on the same page -->
			<h1>Quiz # 8 - Good luck!</h1>
			<section class="warning major-section">
				<p class="contblock">This quiz is to be done individually and is closed book, so please <strong>don't leave this window</strong> until you're done!</p>

				<dl class="contblock">
					<dt><label for="sname">Name</label></dt>
					<dd><input id="sname" type="text" name="sname"></dd>
					<dt><label for="snum">Student #</label></dt>
					<dd><input id="snum" type="text" name="snum"></dd>
				</dl>
			</section>

			<section class="major-section">
			<ol class="contblock">
				<li>
					<p>What does the acronym <strong>SEO</strong> stand for? (2 marks)</p>
					<input type="text" name="q1">
				</li>
				<li>
					<p>Name at least five things you can do to optimize a page for search engines (5 marks)</p>
					<textarea name="q2" rows="6" cols="70">
 -
 -
 -
 -
 -
					</textarea>
				</li>
				<li>
					<p>The acronym CMS stands for: (1 mark)</p>
					<ul>
						<li>
							<input type="radio" name="q3" value="a" id="q3a">
							<label for="q3a">Critical Management System</label>
						</li>
						<li>
							<input type="radio" name="q3" value="b" id="q3b">
							<label for="q3b">Critical Management System</label>
						</li>
						<li>
							<input type="radio" name="q3" value="c" id="q3c">
							<label for="q3c">Content Management System</label>
						</li>
						<li>
							<input type="radio" name="q3" value="d" id="q3d">
							<label for="q3d">Content Meta System</label>
						</li>
					</ul>
				</li>
				<li>
					<p>Name one CMS other than Tumblr. (2 marks)</p>
					<input type="text" name="">
				</li>
				<li>
					<p>Mauris congue ullamcorper efficitur. Check <strong>all</strong> that apply! (1 bonus mark)</p>
					<ul>
						<li>
							<input type="checkbox" name="q5" value="a" id="q5a">
							<label for="q5a">Phasellus rutrum condimentum augue, quis fringilla tellus pharetra at. Morbi eros leo, dapibus lacinia velit at, ultricies sollicitudin enim.</label>
						</li>
						<li>
							<input type="checkbox" name="q5" value="b" id="q5b">
							<label for="q5b">Nam luctus nec lectus ac viverra</label>
						</li>
						<li>
							<input type="checkbox" name="q5" value="c" id="q5c">
							<label for="q5c">Nunc iaculis odio et mi porttitor consequat</label>
						</li>
						<li>
							<input type="checkbox" name="q5" value="d" id="q5d">
							<label for="q5d">Donec a elit nec leo pretium convallis</label>
						</li>
					</ul>
				</li>
			</ol>
			</section>
			<section class="major-section">
				<input type="submit" value="Submit">
			</section>
		 </form>
	</article></main>
	<footer>
		<!-- the usual, whatever that is -->
	</footer>
</div>
</body>
</html>
