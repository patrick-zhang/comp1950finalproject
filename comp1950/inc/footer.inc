	<!-- footer -->
	<footer id="footer" class="major-section">
		<section class="contblock"><div id="switcher" >Switch stylesheet: <?php include '../inc/style-switcher.inc';?></div>
			<p><a href="https://validator.w3.org/nu/?doc=<?php
				/*from http://stackoverflow.com/questions/6768793/get-the-full-url-in-php*/
				$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				echo $actual_link;
			?>" target="_blank">[Validator Link]</a></p>
			<p>Jeff, this would be a great place to put copyright info or other static information that you'd want always available to your students.</p>
		</section>
	</footer>

</div><!-- div.page-wrap -->
</body>
</html>
