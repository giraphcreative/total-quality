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
					Phone: <a href="tel:6267656980">626.765.6980</a></p>
			</div>
			<div class="third contact">
				<p>Fax to Email: 626.765.6975<br>
					Dedicated Fax: 626.356.0001<br>
					General Inquiries<br>
					Email: <a href="mailto:slb@TotalQualityConsulting.com">slb@TotalQualityConsulting.com</a><br>
					Financial: <a href="mailto:dqd@TotalQualityConsulting.com">dqd@TotalQualityConsulting.com</a></p>
			</div>
			<div class="third social">
				<a href="https://www.google.com/url?q=https%3A%2F%2Fwww.facebook.com%2FTotalQualityConsultingInc&sa=D&sntz=1&usg=AFQjCNFhsTWjGzeLStTIM_vmDFwJAiqksg" target="_blank"><img src="<?php print get_template_directory_uri() ?>/img/social-facebook.png"></a>
				<a href="http://www.linkedin.com/pub/doug-duong/3/a78/684" target="_blank"><img src="<?php print get_template_directory_uri() ?>/img/social-linkedin.png"></a>
			</div>

		</footer>

		<div class="copyright">
			Total Quality Consulting &copy; 2015 
		</div>

	</div>

<?php wp_footer(); ?>
</body>
</html>
