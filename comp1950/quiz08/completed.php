<?php
	$title="COMP 1950 - Quiz #8 - Example solution";
	include '../inc/header.inc';
?>

<script>/*manipulating content from header.inc*/
$('body').addClass("quiz completed");</script>

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
 - Use descriptive page titles
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
			<p class="contblock">Feel free to <button><a href="../lecture10">Return</a></button> to the lecture now.</p>
		</section>
		</form>
	</main>

<?php include "../inc/footer.inc"; ?>
