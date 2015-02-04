    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/lazyload.min.js" type="text/javascript"></script>
	<script src="js/jquery.onscreen.min.js" type="text/javascript"></script>
	<!--CDN links for the latest TweenLite, CSSPlugin, and EasePack-->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/easing/EasePack.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js"></script>
	<!-- custom scripts -->
	<script src="js/main.js"></script>
	<script>
	
	</script>
	<div align="center">
	<?php
		$time = microtime();
		$time = explode(' ', $time);
		$time = $time[1] + $time[0];
		$finish = $time;
		$total_time = round(($finish - $start), 4);
		echo 'Page generated in '.$total_time.' seconds.';
	?>
	</div>
  </body>
</html>