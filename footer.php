
<footer>
	<div class="row twelve columns footerLink">
      <ul class="footerLinks">
        <ul>
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

          <li class="topItUp"><a href="#" class="back-to-top">TOP</a></li>
        </ul>

        <p class="copyright">© <?php echo date("Y"); ?> <a href="https://twitter.com/comedy_girl">Ash Writes TV</a></p>
	</div>
</footer>

</div>
</div>

<?php wp_enqueue_script("jquery"); ?>

<script src="http://api.html5media.info/1.1.5/html5media.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.js"></script>

<!-- <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33137770-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>  -->

<?php wp_footer(); ?> 
</body>
</html>