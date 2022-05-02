<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="msvalidate.01" content="F677B62211ACEFF3097F9FDF26815A55" />
<meta name="format-detection" content="telephone=no">
<title>John Rose</title>
	<?php perch_page_attributes(); ?>
	<?php perch_get_css(); ?>
			<!--enter google analytics-->
		<script type="text/javascript">
			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-15433422-1']);
			  _gaq.push(['_trackPageview']);

			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
		</script>
		<!--End enter google analytics-->
		
		<!-- Enter updated Google stuff -->
		<meta name="google-site-verification" content="qTa9ZCmfWH-y94tS7wvg-AYaCBkNJTwWIuNlCQgwtNQ" />
</head>
	<body class="menupage">
		<div class="wrapper page-content"><!--div is closed in global/footer-->
			<?php perch_content('Page Heading with Image'); ?>

			<?php perch_content('Main Navigation'); ?>

			<?php perch_content('Timely Alert'); ?>

			<?php perch_content('Types of Work- Features a Label with Image(s) and Text'); ?>

    <?php perch_content('Link to Top of Page'); ?>
    
   <p> What happens if I add a line here? </p>

<?php perch_layout('global/footer'); ?><!-- body tag and div class="wrapper" are closed in the global footer-->
