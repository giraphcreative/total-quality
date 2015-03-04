<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		</main>

		<footer class="bg-blue-dark group">
			
			<div class="third location">
				<p>931 E. Walnut St., Suite 204 (map)<br>
					Pasadena, CA 91106<br>
					Monday-Friday 8:00 a.m.-5:00 p.m. PT<br>
					Phone: 626.765.6980</p>
			</div>
			<div class="third contact">
				<p>Fax to Email: 626.765.6975<br>
					General Inquiries<br>
					Email: slb@totalqualityconsulting.com<br>
					Financial: DQD@TotalQualityConsulting.com</p>
			</div>
			<div class="third social">
				<a href="#"><img src="<?php print get_template_directory_uri() ?>/img/social-facebook.png"></a>
				<a href="#"><img src="<?php print get_template_directory_uri() ?>/img/social-linkedin.png"></a>
			</div>

		</footer>

		<div class="copyright">
			Total Quality Consulting &copy; 2015 
		</div>

	</div>

<?php wp_footer(); ?>
</body>
</html>
