<!DOCTYPE html>

<html lang="en">
<head>
	<title>COMP 1950 - Quiz #8 - Example solution</title>

	<meta charset="UTF-8">
	<!-- mild css reset -->
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
	<!-- main style sheet -->
	<link rel="stylesheet" type="text/css" href="../style.css" />

<!-- we should probably store the rest that's included in all pages in a include file, too? -->
<!--
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="/css/styles.css">

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


<body class="quiz completed">
<div class="page-wrap">
	<header id="top">
		<h1 id="banner">British Columbia Institute of Technology</h1>
		<h2 id="titlebar">COMP 1950 - Intermediate Web Design and Development</h3>
	</header>
	<main><article>
		<form class="quiz quiz-8">
		<h1>Quiz # 8 - Example Solution</h1>
		<section class="warning major-section">
			<p class="contblock">This is an example solution only. Other answers may also have been correct.</p>
		<!-- We could consider building in functionality that prevents leaving the window and records attempts to do so -->
		</section>
		<section class="major-section">
			<ol>
				<li class="contblock">
					<p>What does the acronym <strong>SEO</strong> stand for? (2 marks)</p>
					<input type="text" name="q1" value="Search Engine Optimization" disabled>
				</li>
				<li class="contblock">
					<p>Name at least five things you can do to optimize a page for search engines (5 marks)</p>
					<textarea name="q2" rows="6" cols="70" disabled>
 -Use descriptive page titles
 - Use good file and folder names
 - Site folder structure helps explain information architecture
 - Meta tag name=”description” is applied to the head section
 - URLS are contextual and descriptive
 - Content is on topic
 - Content is fresh or updated regularly
 - HTML semantics help to make sense of content
					</textarea>
				</li>
				<li class="contblock">
					<p>The acronym CMS stands for: (1 mark)</p>
					<ul>
						<li>
							<input type="radio" name="q3" value="a" id="q3a" disabled>
							<label for="q3a">Critical Management System</label>
						</li>
						<li>
							<input type="radio" name="q3" value="b" id="q3b" disabled>
							<label for="q3b">Critical Management System</label>
						</li>
						<li>
							<input type="radio" name="q3" value="c" id="q3c" checked disabled>
							<label for="q3c">Content Management System</label>
						</li>
						<li>
							<input type="radio" name="q3" value="d" id="q3d" disabled>
							<label for="q3d">Content Meta System</label>
						</li>
					</ul>
				</li>
				<li class="contblock">
					<p>Name one CMS other than Tumblr. (2 marks)</p>
					<input type="text" name="q4" value="Wordpress, Drupal, Joomla, Blogger, Posterous …" disabled>
				</li>
				<li class="contblock">
					<p>Mauris congue ullamcorper efficitur. <br> Check <strong>all</strong> that apply! (1 bonus mark)</p>
					<ul>
						<li>
							<input type="checkbox" name="q5" value="a" id="q5a" disabled checked>
							<label for="q5a">Phasellus rutrum condimentum augue, quis fringilla tellus pharetra at. Morbi eros leo, dapibus lacinia velit at, ultricies sollicitudin enim.</label>
						</li>
						<li>
							<input type="checkbox" name="q5" value="b" id="q5b" disabled checked>
							<label for="q5b">Nam luctus nec lectus ac viverra</label>
						</li>
						<li>
							<input type="checkbox" name="q5" value="c" id="q5c" disabled>
							<label for="q5c">Nunc iaculis odio et mi porttitor consequat</label>
						</li>
						<li>
							<input type="checkbox" name="q5" value="d" id="q5d" disabled checked>
							<label for="q5d">Donec a elit nec leo pretium convallis</label>
						</li>
					</ul>
				</li>
			</ol>
		</section>
		<section class="major-section">
			<p class="contblock">Your results will be evaluated by hand, please be patient.</p>
		</section>
		</form>
	</main>
	<footer>
		<!-- the usual, whatever that is -->
	</footer>
</body>
</html>
