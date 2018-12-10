<hr />
	<div class="footerwrap">
		<div class="contact">
			<?php perch_content('Contact Information') ?>	
		</div>
 				<?php perch_content('Map'); ?>		
			<div class="footer panel">
				<?php perch_content('Footertext') ?>
			</div>
				<div class="subfooter panel">
				<?php
					perch_collection('Song Quotes', [
    					'count' => 1,
    					'sort'  => 'songquote', 
    					'sort-order' => 'RAND',
						]);
					?>
				</div>
	</div><!--End footerwrapper-->

		<div class="backtotop"><!--div links to top of any given page-->
			<p>
				<a class="button large filled menupage" href="<?php $my_var = perch_pages_title(true); ?>" >Back to the Top
				</a>
			</p>
		</div><!--End div "back to top" link-->

  </div><!--end .wrapper div in global header-->
		<?php perch_get_javascript(); ?> 

<!--jquery and foundation script was added here- removed for testing-->  

			<!--Begin Google Analytics-->
			<script type="text/javascript">
				var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
					document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-15433422");
			pageTracker._trackPageview();
			} catch(err) {}</script>
			<!--End Google Analytics-->
</body>
</html>